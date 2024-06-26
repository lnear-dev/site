import { html, css, customElement, BlitzElement } from "@lnear/blitz";
import { BaseCard } from "../../components/card.js";
import { repeat, unsafeHTML } from "@lnear/blitz/directives";
import { packages } from "@/data/index.js";
import { prop } from "@lnear/blitz/decorators";
type CardEntry = App.Data.Docs.Package;
@customElement({
    name: "package-card",
})
export class PackageCard extends BlitzElement {
    @prop({ type: String }) entry!: CardEntry;
    render() {
        return html`
            <a target="_blank" href="${this.entry.url}">
                <div>   
                    <h2>${this.entry.name}</h2>
                    ${unsafeHTML(this.entry.language.icon)}
                </div>
            </a>
        `;

    }

    static styles = [
        css`
        :host { max-width: 100%; }
        svg { width: 10% };
        h2 { color: var(--blue); }
        a { text-decoration: none; color: var(--blue); }
        a:visited{  color: var(--blue); }
        div:hover {
            border: .1px solid var(--text);
            border-radius: 16px;
            cursor: pointer;
        }
        div {
            padding: 1%;
            margin: 1%;
            border: 1px solid inherit;
        }

        @media (max-width: 768px) {
            div {
                width: inherit;
                display: flex;
                flex-direction: row;
                justify-content: left;
                align-items: center;
                padding: 10%;
            }
            svg { width: 20%; margin-left: auto; };
            h2 { display: inline; }

        }
        `
    ];
}
@customElement({
    name: "packages-card",
})
export class PackagesCard extends BaseCard<CardEntry> {
    static styles = [
        BaseCard.styles,
        css`
            :host {
                flex-wrap: nowrap;
                width: 40%;
                overflow-y: scroll   
            }
            fieldset {
                flex-wrap: wrap;
                border: 2px solid var(--sec, black);
                text-align: center;
                margin: 5% 0;
                & a { width: 23%; padding: 1%; }
                & h2 { color: var(--blue); }
                & img { width: 55%; }
                & legend {
                    border: 5px solid var(--blue, black);
                    justify-content: center;
                    width: 20%;
                    color: white;
                }
            }

            @media (max-width: 768px) {
                :host { width: 100%; max-width: 100vw; }
                fieldset {
                    max-width: 100vw;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    & a { width: 45%; }
                    & package-card {
                        width: 100%;
                        justify-content: center;
                        align-items: center;
                    }
                }
            }
        `,
    ];

    render() {
        return html`
            <fieldset>
                <legend>packages</legend>
                ${repeat(this.data, (x: CardEntry) => html`<package-card .entry=${x}></package-card>`)}
            </fieldset>
        `;
    }

    constructor() {
        super();
        this.data = packages;
    }
}
