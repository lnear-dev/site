@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-jsonobject-library">JSONObject Library</a>
<ul>
<li>
<a href="#content-features">Features</a>
</li>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
<ul>
<li>
<a href="#content-basic-usage">Basic Usage</a>
</li>
<li>
<a href="#content-jsonstring">JSONString</a>
</li>
<li>
<a href="#content-usage-1">Usage</a>
</li>
</ul>
</li>
<li>
<a href="#content-exception-handling">Exception Handling</a>
<ul>
<li>
<a href="#content-arrayaccess-and-countable">ArrayAccess and Countable</a>
</li>
<li>
<a href="#content-data-manipulation">Data Manipulation</a>
</li>
<li>
<a href="#content-advanced-methods">Advanced Methods</a>
</li>
</ul>
</li>
<li>
<a href="#content-license">License</a>
</li>
<li>
<a href="#content-documentation">Documentation</a>
</li>
<li>
<a href="#content-contributing">Contributing</a>
</li>
<li>
<a href="#content-contact">Contact</a>
</li>
<li>
<a href="#content-security">Security</a>
</li>
<li>
<a href="#content-credits">Credits</a>
</li>
</ul>
</li>
</ul>
<h1><a id="content-jsonobject-library" href="#content-jsonobject-library" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>JSONObject Library</h1>
<p>This package provides a robust abstraction for handling JSON objects in PHP. It includes functionalities for loading, saving, and manipulating JSON data with a fluent API.</p>
<h2><a id="content-features" href="#content-features" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Features</h2>
<ul>
<li>Load and save JSON data.</li>
<li>Access and modify JSON data using array syntax.</li>
<li>Push, prepend, and merge data into JSON objects.</li>
<li>Filter, map, reduce, and sort JSON data.</li>
<li>Increment and decrement numeric values.</li>
<li>Convert JSON objects to and from JSON strings.</li>
<li>Fluent API for chaining method calls.</li>
</ul>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>You can install the package via composer:</p>
<pre data-lang="txt" class="notranslate">composer require lnear/json
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<h3><a id="content-basic-usage" href="#content-basic-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Basic Usage</h3>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">Lame\JSONFile</span>;

<span class="hl-comment">// Instantiate JSONFile with a file path</span>
<span class="hl-variable">$jsonFile</span> = <span class="hl-keyword">new</span> <span class="hl-type">JSONFile</span>('<span class="hl-value">/path/to/file.json</span>');

<span class="hl-comment">// Access and manipulate JSON data</span>
<span class="hl-variable">$jsonFile</span>-&gt;<span class="hl-property">put</span>('<span class="hl-value">key</span>', '<span class="hl-value">value</span>');
<span class="hl-variable">$jsonFile</span>-&gt;<span class="hl-property">save</span>(); <span class="hl-comment">// Save changes to the file</span>

<span class="hl-comment">// Load JSON data from the file</span>
<span class="hl-variable">$data</span> = <span class="hl-variable">$jsonFile</span>-&gt;<span class="hl-property">load</span>();
</pre>
<h3><a id="content-jsonstring" href="#content-jsonstring" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>JSONString</h3>
<p>The <code>JSONString</code> class handles JSON data stored as a string. It also extends the <code>JSONObject</code> abstract class and provides methods to work with JSON data in string format.</p>
<h3><a id="content-usage-1" href="#content-usage-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h3>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">Lame\JSONString</span>;

<span class="hl-comment">// Instantiate JSONString with a JSON string</span>
<span class="hl-variable">$jsonString</span> = <span class="hl-keyword">new</span> <span class="hl-type">JSONString</span>('<span class="hl-value">{&quot;key&quot;: &quot;value&quot;}</span>');

<span class="hl-comment">// Access and manipulate JSON data</span>
<span class="hl-variable">$jsonString</span>-&gt;<span class="hl-property">put</span>('<span class="hl-value">newKey</span>', '<span class="hl-value">newValue</span>');
<span class="hl-variable">$jsonString</span>-&gt;<span class="hl-property">save</span>(); <span class="hl-comment">// Save changes to the JSON string</span>

<span class="hl-comment">// Load JSON data from the string</span>
<span class="hl-variable">$data</span> = <span class="hl-variable">$jsonString</span>-&gt;<span class="hl-property">load</span>();
</pre>
<h2><a id="content-exception-handling" href="#content-exception-handling" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Exception Handling</h2>
<p>Both classes handle exceptions related to JSON parsing and file operations. They throw appropriate exceptions when errors occur, allowing you to handle them gracefully in your application.</p>
<h3><a id="content-arrayaccess-and-countable" href="#content-arrayaccess-and-countable" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>ArrayAccess and Countable</h3>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">if</span> (<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">has</span>('<span class="hl-value">name</span>')) {
    <span class="hl-keyword">echo</span> <span class="hl-variable">$jsonObject</span>['<span class="hl-value">name</span>']; <span class="hl-comment">// Outputs: John</span>
}

<span class="hl-variable">$jsonObject</span>['<span class="hl-value">email</span>'] = '<span class="hl-value">john.doe@example.com</span>';
<span class="hl-keyword">unset</span>(<span class="hl-variable">$jsonObject</span>['<span class="hl-value">age</span>']);
<span class="hl-keyword">echo</span> <span class="hl-property">count</span>(<span class="hl-variable">$jsonObject</span>); <span class="hl-comment">// Outputs the count of items in the JSON object</span>
</pre>
<h3><a id="content-data-manipulation" href="#content-data-manipulation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Data Manipulation</h3>
<pre data-lang="php" class="notranslate"><span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">push</span>('<span class="hl-value">tags</span>', '<span class="hl-value">developer</span>');
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">prepend</span>('<span class="hl-value">tags</span>', '<span class="hl-value">programmer</span>');
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">increment</span>('<span class="hl-value">age</span>', 2);
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">decrement</span>('<span class="hl-value">age</span>', 1);

<span class="hl-variable">$allData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">all</span>();
<span class="hl-variable">$filteredData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">filter</span>(<span class="hl-keyword">fn</span>(<span class="hl-injection">$key, $value</span>) =&gt; <span class="hl-property">is_string</span>(<span class="hl-variable">$value</span>));
</pre>
<h3><a id="content-advanced-methods" href="#content-advanced-methods" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Advanced Methods</h3>
<pre data-lang="php" class="notranslate"><span class="hl-variable">$keysStartingWithA</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">startingWith</span>('<span class="hl-value">a</span>');
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">forget</span>('<span class="hl-value">location</span>');
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">flush</span>();
<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">flushStartingWith</span>('<span class="hl-value">temp_</span>');

<span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">each</span>(<span class="hl-keyword">fn</span>(<span class="hl-injection">$key, $value</span>) =&gt; <span class="hl-keyword">print</span>(&quot;<span class="hl-value">Key: $key, Value: $value</span>&quot;));
<span class="hl-variable">$mappedData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">map</span>(<span class="hl-keyword">fn</span>(<span class="hl-injection">$value</span>) =&gt; <span class="hl-property">strtoupper</span>(<span class="hl-variable">$value</span>));
<span class="hl-variable">$reducedData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">reduce</span>(<span class="hl-keyword">fn</span>(<span class="hl-injection">$carry, $value</span>) =&gt; <span class="hl-variable">$carry</span> . <span class="hl-variable">$value</span>, '<span class="hl-value"></span>');
<span class="hl-variable">$sortedData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">sort</span>(<span class="hl-keyword">fn</span>(<span class="hl-injection">$a, $b</span>) =&gt; <span class="hl-variable">$a</span> <span class="hl-operator">&lt;=&gt;</span> <span class="hl-variable">$b</span>);
<span class="hl-variable">$reversedData</span> = <span class="hl-variable">$jsonObject</span>-&gt;<span class="hl-property">reverse</span>();
</pre>
<h2><a id="content-license" href="#content-license" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>License</h2>
<p>This project is licensed under the MIT License - see the <a href="https://github.com/lnear-dev/JSONObject/blob/main/LICENSE">LICENSE</a> file for details.</p>
<h2><a id="content-documentation" href="#content-documentation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Documentation</h2>
<p>For detailed documentation, please visit <a href="https://docs.lnear.dev/json">JSONObject Documentation</a>.</p>
<h2><a id="content-contributing" href="#content-contributing" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Contributing</h2>
<p>We welcome contributions! Please read our <a href="https://github.com/lnear-dev/JSONObject/blob/main/CONTRIBUTING.md">Contributing Guidelines</a> before making any contributions.</p>
<h2><a id="content-contact" href="#content-contact" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Contact</h2>
<p>If you have any questions or feedback, feel free to reach out at <a href="mailto:hi@lnear.dev">hi@lnear.dev</a>.</p>
<h2><a id="content-security" href="#content-security" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Security</h2>
<p>If you discover any security related issues, please email <a href="mailto:hi@lnear.dev">hi@lnear.dev</a> instead of using the issue tracker.</p>
<h2><a id="content-credits" href="#content-credits" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Credits</h2>
<ul>
<li>
<a href="https://github.com/oplanre">Lanre Waju</a>
</li>
<li>
<a href="../../contributors">All Contributors</a>
</li>
</ul>

@endsection