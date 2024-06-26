@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-lnearhtml-a-php-library-for-generating-html-elements">lnear/html, a PHP library for generating HTML elements</a>
</li>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
</li>
<li>
<a href="#content-elements">Elements</a>
</li>
</ul>
<h1><a id="content-lnearhtml-a-php-library-for-generating-html-elements" href="#content-lnearhtml-a-php-library-for-generating-html-elements" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>lnear/html, a PHP library for generating HTML elements</h1>
<p>This is a list of HTML elements and their attributes generated from the <a href="https://html.spec.whatwg.org/multipage/indices.html">HTML Living Standard</a>.</p>
<h1><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h1>
<pre data-lang="txt" class="notranslate">composer require lnear/html
</pre>
<h1><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h1>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">html\a</span>;

<span class="hl-keyword">echo</span> <span class="hl-property">a</span>(<span class="hl-property">href</span>: '<span class="hl-value">https://example.com</span>', <span class="hl-property">target</span>: '<span class="hl-value">_blank</span>', <span class="hl-property">rel</span>: '<span class="hl-value">noopener noreferrer</span>'); // &lt;a href=&quot;<span class="hl-value">https://example.com</span>&quot; target=&quot;<span class="hl-value">_blank</span>&quot; rel=&quot;<span class="hl-value">noopener noreferrer</span>&quot;&gt;&lt;/a&gt;
</pre>
<p>All functions return a string of the HTML element that it is named after. The only exception is the <code>var</code> function, which is named <code>variable</code> to avoid conflicts with the reserved keyword <code>var</code>.</p>
<p>The <code>body</code> argument is present in all non-self-closing elements. It is used to add text or other elements inside the element.</p>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">html\div</span>;

<span class="hl-keyword">echo</span> <span class="hl-property">div</span>(<span class="hl-property">body</span>: '<span class="hl-value">Hello, World!</span>'); <span class="hl-comment">// &lt;div&gt;Hello, World!&lt;/div&gt;</span>
</pre>
<p>It is also the first argument in those functions, so you can omit the argument name.</p>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">html\div</span>;

<span class="hl-keyword">echo</span> <span class="hl-property">div</span>('<span class="hl-value">Hello, World!</span>'); <span class="hl-comment">// &lt;div&gt;Hello, World!&lt;/div&gt;</span>
</pre>
<p>More complex elements can be created by nesting functions.</p>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">html\</span>{div, a, p};

<span class="hl-keyword">echo</span> <span class="hl-property">div</span>(
    <span class="hl-property">class</span>: '<span class="hl-value">container</span>', 
    <span class="hl-property">body</span>: <span class="hl-property">a</span>('<span class="hl-value">Click me!</span>', <span class="hl-property">href</span>: '<span class="hl-value">https://example.com</span>', <span class="hl-property">target</span>: '<span class="hl-value">_blank</span>', <span class="hl-property">rel</span>: '<span class="hl-value">noopener noreferrer</span>') . <span class="hl-property">p</span>('<span class="hl-value">This is a paragraph.</span>')
);

<span class="hl-comment">// &lt;div class=&quot;container&quot;&gt;&lt;a href=&quot;https://example.com&quot; target=&quot;_blank&quot; rel=&quot;noopener noreferrer&quot;&gt;Click me!&lt;/a&gt;&lt;p&gt;This is a paragraph.&lt;/p&gt;&lt;/div&gt;</span>
</pre>
<h1><a id="content-elements" href="#content-elements" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Elements</h1>
<p>All elements share the following global attributes:</p>
<table>
<thead>
<tr>
<th>Attribute</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>accesskey</code></td>
</tr>
<tr>
<td><code>autocapitalize</code></td>
</tr>
<tr>
<td><code>class</code></td>
</tr>
<tr>
<td><code>contenteditable</code></td>
</tr>
<tr>
<td><code>contextmenu</code></td>
</tr>
<tr>
<td><code>dir</code></td>
</tr>
<tr>
<td><code>draggable</code></td>
</tr>
<tr>
<td><code>dropzone</code></td>
</tr>
<tr>
<td><code>hidden</code></td>
</tr>
<tr>
<td><code>id</code></td>
</tr>
<tr>
<td><code>itemid</code></td>
</tr>
<tr>
<td><code>itemprop</code></td>
</tr>
<tr>
<td><code>itemref</code></td>
</tr>
<tr>
<td><code>itemscope</code></td>
</tr>
<tr>
<td><code>itemtype</code></td>
</tr>
<tr>
<td><code>lang</code></td>
</tr>
<tr>
<td><code>spellcheck</code></td>
</tr>
<tr>
<td><code>style</code></td>
</tr>
<tr>
<td><code>tabindex</code></td>
</tr>
<tr>
<td><code>title</code></td>
</tr>
<tr>
<td><code>translate</code></td>
</tr>
</tbody>
</table>
<p>The following elements only have the global attributes:</p>
<table>
<thead>
<tr>
<th>Tag</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>abbr</code></td>
</tr>
<tr>
<td><code>address</code></td>
</tr>
<tr>
<td><code>article</code></td>
</tr>
<tr>
<td><code>aside</code></td>
</tr>
<tr>
<td><code>b</code></td>
</tr>
<tr>
<td><code>bdi</code></td>
</tr>
<tr>
<td><code>bdo</code></td>
</tr>
<tr>
<td><code>br</code></td>
</tr>
<tr>
<td><code>caption</code></td>
</tr>
<tr>
<td><code>cite</code></td>
</tr>
<tr>
<td><code>code</code></td>
</tr>
<tr>
<td><code>datalist</code></td>
</tr>
<tr>
<td><code>dd</code></td>
</tr>
<tr>
<td><code>dfn</code></td>
</tr>
<tr>
<td><code>div</code></td>
</tr>
<tr>
<td><code>dl</code></td>
</tr>
<tr>
<td><code>dt</code></td>
</tr>
<tr>
<td><code>em</code></td>
</tr>
<tr>
<td><code>figcaption</code></td>
</tr>
<tr>
<td><code>figure</code></td>
</tr>
<tr>
<td><code>footer</code></td>
</tr>
<tr>
<td><code>h1</code></td>
</tr>
<tr>
<td><code>head</code></td>
</tr>
<tr>
<td><code>header</code></td>
</tr>
<tr>
<td><code>hgroup</code></td>
</tr>
<tr>
<td><code>hr</code></td>
</tr>
<tr>
<td><code>i</code></td>
</tr>
<tr>
<td><code>kbd</code></td>
</tr>
<tr>
<td><code>legend</code></td>
</tr>
<tr>
<td><code>main</code></td>
</tr>
<tr>
<td><code>mark</code></td>
</tr>
<tr>
<td><code>math</code></td>
</tr>
<tr>
<td><code>menu</code></td>
</tr>
<tr>
<td><code>nav</code></td>
</tr>
<tr>
<td><code>noscript</code></td>
</tr>
<tr>
<td><code>p</code></td>
</tr>
<tr>
<td><code>picture</code></td>
</tr>
<tr>
<td><code>pre</code></td>
</tr>
<tr>
<td><code>rp</code></td>
</tr>
<tr>
<td><code>rt</code></td>
</tr>
<tr>
<td><code>ruby</code></td>
</tr>
<tr>
<td><code>s</code></td>
</tr>
<tr>
<td><code>samp</code></td>
</tr>
<tr>
<td><code>search</code></td>
</tr>
<tr>
<td><code>section</code></td>
</tr>
<tr>
<td><code>small</code></td>
</tr>
<tr>
<td><code>span</code></td>
</tr>
<tr>
<td><code>strong</code></td>
</tr>
<tr>
<td><code>sub</code></td>
</tr>
<tr>
<td><code>summary</code></td>
</tr>
<tr>
<td><code>sup</code></td>
</tr>
<tr>
<td><code>svg</code></td>
</tr>
<tr>
<td><code>table</code></td>
</tr>
<tr>
<td><code>tbody</code></td>
</tr>
<tr>
<td><code>tfoot</code></td>
</tr>
<tr>
<td><code>thead</code></td>
</tr>
<tr>
<td><code>title</code></td>
</tr>
<tr>
<td><code>tr</code></td>
</tr>
<tr>
<td><code>u</code></td>
</tr>
<tr>
<td><code>ul</code></td>
</tr>
<tr>
<td><code>var</code></td>
</tr>
<tr>
<td><code>wbr</code></td>
</tr>
</tbody>
</table>
<p>The following elements have additional attributes:</p>
<table>
<thead>
<tr>
<th>Tag</th>
<th>Attributes</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>a</code></td>
<td>href, target, download, ping, rel, hreflang, type, referrerpolicy</td>
</tr>
<tr>
<td><code>area</code></td>
<td>alt, coords, shape, href, target, download, ping, rel, referrerpolicy</td>
</tr>
<tr>
<td><code>audio</code></td>
<td>src, crossorigin, preload, autoplay, loop, muted, controls</td>
</tr>
<tr>
<td><code>base</code></td>
<td>href, target</td>
</tr>
<tr>
<td><code>blockquote</code></td>
<td>cite</td>
</tr>
<tr>
<td><code>body</code></td>
<td>onafterprint, onbeforeprint, onbeforeunload, onhashchange, onlanguagechange, onmessage, onmessageerror, onoffline, ononline, onpageswap, onpagehide, onpagereveal, onpageshow, onpopstate, onrejectionhandled, onstorage, onunhandledrejection, onunload</td>
</tr>
<tr>
<td><code>button</code></td>
<td>disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, name, popovertarget, popovertargetaction, type, value</td>
</tr>
<tr>
<td><code>canvas</code></td>
<td>width, height</td>
</tr>
<tr>
<td><code>col</code></td>
<td>span</td>
</tr>
<tr>
<td><code>colgroup</code></td>
<td>span</td>
</tr>
<tr>
<td><code>data</code></td>
<td>value</td>
</tr>
<tr>
<td><code>del</code></td>
<td>cite, datetime</td>
</tr>
<tr>
<td><code>details</code></td>
<td>name, open</td>
</tr>
<tr>
<td><code>dialog</code></td>
<td>open</td>
</tr>
<tr>
<td><code>embed</code></td>
<td>src, type, width, height</td>
</tr>
<tr>
<td><code>fieldset</code></td>
<td>disabled, form, name</td>
</tr>
<tr>
<td><code>form</code></td>
<td>accept-charset, action, autocomplete, enctype, method, name, novalidate, rel, target</td>
</tr>
<tr>
<td><code>html</code></td>
<td>manifest</td>
</tr>
<tr>
<td><code>iframe</code></td>
<td>src, srcdoc, name, sandbox, allow, allowfullscreen, width, height, referrerpolicy, loading</td>
</tr>
<tr>
<td><code>img</code></td>
<td>alt, src, srcset, sizes, crossorigin, usemap, ismap, width, height, referrerpolicy, decoding, loading, fetchpriority</td>
</tr>
<tr>
<td><code>input</code></td>
<td>accept, alt, autocomplete, checked, dirname, disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, height, list, max, maxlength, min, minlength, multiple, name, pattern, placeholder, popovertarget, popovertargetaction, readonly, required, size, src, step, type, value, width</td>
</tr>
<tr>
<td><code>ins</code></td>
<td>cite, datetime</td>
</tr>
<tr>
<td><code>label</code></td>
<td>for</td>
</tr>
<tr>
<td><code>li</code></td>
<td>value</td>
</tr>
<tr>
<td><code>link</code></td>
<td>href, crossorigin, rel, as, media, hreflang, type, sizes, imagesrcset, imagesizes, referrerpolicy, integrity, blocking, color, disabled, fetchpriority</td>
</tr>
<tr>
<td><code>map</code></td>
<td>name</td>
</tr>
<tr>
<td><code>meta</code></td>
<td>name, http-equiv, content, charset, media</td>
</tr>
<tr>
<td><code>meter</code></td>
<td>value, min, max, low, high, optimum</td>
</tr>
<tr>
<td><code>object</code></td>
<td>data, type, name, form, width, height</td>
</tr>
<tr>
<td><code>ol</code></td>
<td>reversed, start, type</td>
</tr>
<tr>
<td><code>optgroup</code></td>
<td>disabled, label</td>
</tr>
<tr>
<td><code>option</code></td>
<td>disabled, label, selected, value</td>
</tr>
<tr>
<td><code>output</code></td>
<td>for, form, name</td>
</tr>
<tr>
<td><code>progress</code></td>
<td>value, max</td>
</tr>
<tr>
<td><code>q</code></td>
<td>cite</td>
</tr>
<tr>
<td><code>script</code></td>
<td>src, type, nomodule, async, defer, crossorigin, integrity, referrerpolicy, blocking, fetchpriority</td>
</tr>
<tr>
<td><code>select</code></td>
<td>autocomplete, disabled, form, multiple, name, required, size</td>
</tr>
<tr>
<td><code>slot</code></td>
<td>name</td>
</tr>
<tr>
<td><code>source</code></td>
<td>type, media, src, srcset, sizes, width, height</td>
</tr>
<tr>
<td><code>style</code></td>
<td>media, blocking</td>
</tr>
<tr>
<td><code>td</code></td>
<td>colspan, rowspan, headers</td>
</tr>
<tr>
<td><code>template</code></td>
<td>shadowrootmode, shadowrootdelegatesfocus, shadowrootclonable, shadowrootserializable</td>
</tr>
<tr>
<td><code>textarea</code></td>
<td>autocomplete, cols, dirname, disabled, form, maxlength, minlength, name, placeholder, readonly, required, rows, wrap</td>
</tr>
<tr>
<td><code>th</code></td>
<td>colspan, rowspan, headers, scope, abbr</td>
</tr>
<tr>
<td><code>time</code></td>
<td>datetime</td>
</tr>
<tr>
<td><code>track</code></td>
<td>default, kind, label, src, srclang</td>
</tr>
<tr>
<td><code>video</code></td>
<td>src, crossorigin, poster, preload, autoplay, playsinline, loop, muted, controls, width, height</td>
</tr>
</tbody>
</table>

@endsection