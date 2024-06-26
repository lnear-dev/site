import { existsSync, readFileSync } from "fs";
import { normalize, join } from "path";
const args = JSON.parse(process.argv.slice(2));

const FontStyle = {
    NotSet: -1,
    None: 0,
    Italic: 1,
    Bold: 2,
    Underline: 4,
};

const FONT_STYLE_TO_CSS = {
    [FontStyle.Italic]: "font-style: italic",
    [FontStyle.Bold]: "font-weight: bold",
    [FontStyle.Underline]: "text-decoration: underline",
};

const renderToHtml = function (lines, options = {}) {
    const bg = options.bg || "#fff";
    const highlightedLines = makeHighlightSet(options.highlightLines);
    const addLines = makeHighlightSet(options.addLines);
    const deleteLines = makeHighlightSet(options.deleteLines);
    const focusLines = makeHighlightSet(options.focusLines);

    const className = ["shiki"];
    if (highlightedLines.size) className.push("highlighted");
    if (addLines.size) className.push("added");
    if (deleteLines.size) className.push("deleted");
    if (focusLines.size) className.push("focus");

    const html = [
        `<pre class="${className.join(" ")}" style="background-color: ${bg}">`,
    ];
    if (options.langId)
        html.push(`<div class="language-id">${options.langId}</div>`);
    html.push(`<code>`);

    lines.forEach((l, index) => {
        const lineNumber = index + 1;

        const lineClass = [];
        if (highlightedLines.has(lineNumber)) lineClass.push("highlight");
        if (addLines.has(lineNumber)) lineClass.push("add");
        if (deleteLines.has(lineNumber)) lineClass.push("del");
        if (focusLines.has(lineNumber)) lineClass.push("focus");

        html.push(`<span class="${lineClass.join(" ")}">`);
        l.forEach((token) => {
            const cssDeclarations = [`color: ${token.color || options.fg}`];
            if (token.fontStyle > FontStyle.None)
                cssDeclarations.push(FONT_STYLE_TO_CSS[token.fontStyle]);
            html.push(
                `<span style="${cssDeclarations.join("; ")}">${escapeHtml(
                    token.content
                )}</span>`
            );
        });
        html.push(`</span>\n`);
    });
    html.push(`</code></pre>`);
    console.log(html.join(""));
    return html.join("");
};

const makeHighlightSet = function (highlightLines) {
    const lines = new Set();
    if (!highlightLines) return lines;
    for (let lineSpec of highlightLines)
        if (lineSpec.toString().includes("-")) {
            const [begin, end] = lineSpec
                .split("-")
                .map((lineNo) => Number(lineNo));
            for (let line = begin; line <= end; line++) lines.add(line);
        } else if (lineSpec.toString().trim()) {
            lines.add(Number(lineSpec));
        }

    return lines;
};

const htmlEscapes = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#39;",
};

const escapeHtml = (html) =>
    html.replace(/[&<>"']/g, (chr) => htmlEscapes[chr]);

const customLanguages = {
    antlers: {
        scopeName: "text.html.statamic",
        embeddedLangs: ["html"],
    },
    blade: {
        scopeName: "text.html.php.blade",
        embeddedLangs: ["html", "php"],
    },
};

async function main(args) {
    const shiki = await import("shiki");
    const highlighter = await shiki.getHighlighter({
        themes: {
            light: "vitesse-light",
            dark: "vitesse-black",
        },
    });

    for (const [lang, spec] of Object.entries(customLanguages)) {
        for (const embedded of spec.embeddedLangs)
            await highlighter.loadLanguage(embedded);
        await highlighter.loadLanguage({
            ...spec,
            ...loadLanguage(lang),
            name: lang,
        });
    }
    const language = args[1] || "php";
    let theme = args[2] || "vitesse-light";
    if (existsSync(theme)) theme = JSON.parse(readFileSync(theme, "utf-8"));
    else await highlighter.loadTheme(theme);

    if (!customLanguages[language]) await highlighter.loadLanguage(language);
    const { theme: theme$ } = highlighter.setTheme(theme);
    const result = highlighter.codeToTokens(args[0], {
        theme: theme$,
        lang: language,
    });
    const options = args[3] || {};
    const rendered = renderToHtml(result.tokens, {
        fg: theme$.fg,
        bg: theme$.bg,
        highlightLines: options.highlightLines,
        addLines: options.addLines,
        deleteLines: options.deleteLines,
        focusLines: options.focusLines,
    });
    console.log(rendered);
    process.stdout.write(rendered);
}

main(args);

const loadLanguage = (language) =>
    JSON.parse(readFileSync(getLanguagePath(language)));
const getLanguagePath = (language) =>
    normalize(
        join(__dirname, "..", "languages", `${language}.tmLanguage.json`)
    );
