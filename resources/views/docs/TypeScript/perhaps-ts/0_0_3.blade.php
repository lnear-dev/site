@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-maybe-type-library">Maybe Type Library</a>
<ul>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
<ul>
<li>
<a href="#content-creating-maybe-instances">Creating Maybe Instances</a>
</li>
<li>
<a href="#content-checking-for-values">Checking for Values</a>
</li>
<li>
<a href="#content-retrieving-values">Retrieving Values</a>
</li>
<li>
<a href="#content-default-values">Default Values</a>
</li>
<li>
<a href="#content-conditional-value-extraction">Conditional Value Extraction</a>
</li>
<li>
<a href="#content-equality-comparisons">Equality Comparisons</a>
</li>
<li>
<a href="#content-example-function-returning-maybet">Example Function Returning Maybe&lt;T&gt;</a>
</li>
<li>
<a href="#content-handling-and-checking-maybet-values">Handling and Checking Maybe&lt;T&gt; Values</a>
<ul>
<li>
<a href="#content-using-isjust-and-isnothing">Using IsJust and IsNothing</a>
</li>
<li>
<a href="#content-using-frommaybe-with-a-default-value">Using FromMaybe with a Default Value</a>
</li>
<li>
<a href="#content-using-to-for-conditional-extraction">Using To for Conditional Extraction</a>
</li>
</ul>
</li>
<li>
<a href="#content-another-function-example">Another Function Example</a>
</li>
<li>
<a href="#content-returning-maybet-from-asynchronous-functions">Returning Maybe&lt;T&gt; from Asynchronous Functions</a>
</li>
</ul>
</li>
<li>
<a href="#content-api-reference">API Reference</a>
<ul>
<li>
<a href="#content-maybe-class">Maybe Class</a>
<ul>
<li>
<a href="#content-static-methods">Static Methods</a>
</li>
<li>
<a href="#content-instance-methods">Instance Methods</a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a href="#content-license">License</a>
</li>
</ul>
</li>
</ul>
<h1><a id="content-maybe-type-library" href="#content-maybe-type-library" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Maybe Type Library</h1>
<p>This library provides a light <code>Maybe</code> type for handling optional values, inspired by functional programming languages. A <code>Maybe</code> can either be <code>Just</code> (containing a value) or <code>Nothing</code> (no value).</p>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>Install via npm:</p>
<pre data-lang="txt" class="notranslate">npm install perhaps-ts
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<h3><a id="content-creating-maybe-instances" href="#content-creating-maybe-instances" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Creating <code>Maybe</code> Instances</h3>
<p>You can create <code>Maybe</code> instances using the <code>Just</code> and <code>Nothing</code> static methods or helper functions.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> <span class="hl-keyword">{ Maybe, Just, Nothing } from </span>&quot;<span class="hl-value">perhaps-ts</span>&quot;;

<span class="hl-comment">// Using static methods</span>
<span class="hl-keyword">const</span> maybeValue = <span class="hl-type">Maybe</span>.<span class="hl-property">Just</span>(5);
<span class="hl-keyword">const</span> noValue = <span class="hl-type">Maybe</span>.<span class="hl-property">Nothing</span>&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Using helper functions</span>
<span class="hl-keyword">const</span> anotherMaybeValue = <span class="hl-property">Just</span>(10);
<span class="hl-keyword">const</span> anotherNoValue = Nothing&lt;<span class="hl-generic">string</span>&gt;();
</pre>
<h3><a id="content-checking-for-values" href="#content-checking-for-values" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Checking for Values</h3>
<p>You can check if a <code>Maybe</code> instance has a value (<code>Just</code>) or not (<code>Nothing</code>).</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">if</span> (maybeValue.<span class="hl-property">IsJust</span>()) console.<span class="hl-property">log</span>(&quot;<span class="hl-value">This is Just:</span>&quot;, maybeValue.<span class="hl-property">FromJust</span>());
<span class="hl-keyword">if</span> (noValue.<span class="hl-property">IsNothing</span>()) console.<span class="hl-property">log</span>(&quot;<span class="hl-value">This is Nothing</span>&quot;);
</pre>
<h3><a id="content-retrieving-values" href="#content-retrieving-values" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Retrieving Values</h3>
<p>To retrieve the value of a <code>Just</code> instance, use the <code>FromJust</code> or <code>ToChecked</code> methods. Be cautious as these methods will throw an error if called on a <code>Nothing</code> instance.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">try</span> {
  <span class="hl-keyword">const</span> value = maybeValue.<span class="hl-property">FromJust</span>();
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Value:</span>&quot;, value);
} <span class="hl-keyword">catch</span> (error) {
  console.<span class="hl-property">error</span>(error.<span class="hl-property">message</span>);
}

<span class="hl-keyword">try</span> {
  <span class="hl-keyword">const</span> value = noValue.<span class="hl-property">ToChecked</span>();
} <span class="hl-keyword">catch</span> (error) {
  console.<span class="hl-property">error</span>(error.<span class="hl-property">message</span>); <span class="hl-comment">// Maybe: Attempted to access value of Nothing</span>
}
</pre>
<h3><a id="content-default-values" href="#content-default-values" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Default Values</h3>
<p>You can provide a default value when dealing with <code>Maybe</code> instances, ensuring you always have a fallback.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> valueOrDefault = noValue.<span class="hl-property">FromMaybe</span>(42);
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Value or Default:</span>&quot;, valueOrDefault); <span class="hl-comment">// Outputs: 42</span>
</pre>
<h3><a id="content-conditional-value-extraction" href="#content-conditional-value-extraction" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Conditional Value Extraction</h3>
<p>You can conditionally extract the value into an output object if the instance is <code>Just</code>.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> output = {};
<span class="hl-keyword">if</span> (maybeValue.<span class="hl-property">To</span>(output)) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Extracted Value:</span>&quot;, output.<span class="hl-property">value</span>); <span class="hl-comment">// Extracted Value: 5</span>
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">No value to extract</span>&quot;);
}
</pre>
<p>Or you can use the <code>To</code> method with a custom key.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">type</span> Output = { <span class="hl-variable">data</span>?: <span class="hl-keyword">number</span> };
<span class="hl-keyword">type</span> UserData = { <span class="hl-property">id</span>: <span class="hl-keyword">number</span>; <span class="hl-property">name</span>: <span class="hl-keyword">string</span> };

<span class="hl-keyword">const</span> <span class="hl-property">output</span>: Output = {};
<span class="hl-keyword">if</span> (maybeValue.<span class="hl-property">To</span>(output, &quot;<span class="hl-value">data</span>&quot;)) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Extracted Data:</span>&quot;, output.<span class="hl-property">data</span>); <span class="hl-comment">// Extracted Data: 5</span>
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">No data to extract</span>&quot;);
}

<span class="hl-keyword">const</span> <span class="hl-property">user</span>: Maybe&lt;<span class="hl-generic">UserData</span>&gt; = <span class="hl-property">Just</span>({ <span class="hl-property">id</span>: 1, <span class="hl-property">name</span>: &quot;<span class="hl-value">Alice</span>&quot; });
<span class="hl-keyword">const</span> <span class="hl-property">userOutput</span>: Output = {};
<span class="hl-keyword">if</span> (user.<span class="hl-property">To</span>(userOutput, &quot;<span class="hl-value">data</span>&quot;)) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Extracted User:</span>&quot;, userOutput.<span class="hl-property">data</span>); <span class="hl-comment">// Extracted User: { id: 1, name: 'Alice' }</span>
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">No user to extract</span>&quot;);
}
</pre>
<h3><a id="content-equality-comparisons" href="#content-equality-comparisons" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Equality Comparisons</h3>
<p>You can compare <code>Maybe</code> instances for equality.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> maybe1 = <span class="hl-property">Just</span>(5);
<span class="hl-keyword">const</span> maybe2 = <span class="hl-property">Just</span>(5);
<span class="hl-keyword">const</span> maybe3 = Nothing&lt;<span class="hl-generic">number</span>&gt;();

console.<span class="hl-property">log</span>(maybe1.<span class="hl-property">equals</span>(maybe2)); <span class="hl-comment">// true</span>
console.<span class="hl-property">log</span>(maybe1.<span class="hl-property">equals</span>(maybe3)); <span class="hl-comment">// false</span>
console.<span class="hl-property">log</span>(maybe1.<span class="hl-property">notEquals</span>(maybe3)); <span class="hl-comment">// true</span>
</pre>
<p>Sure! Here are some examples of how to write functions that return <code>Maybe&lt;T&gt;</code> instead of <code>T | false</code>, along with how to handle and check the returned <code>Maybe&lt;T&gt;</code> values.</p>
<h3><a id="content-example-function-returning-maybet" href="#content-example-function-returning-maybet" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Example Function Returning <code>Maybe&lt;T&gt;</code></h3>
<p>Let's write a function that searches for an item in an array and returns a <code>Maybe&lt;T&gt;</code> instead of the item or <code>false</code>.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> <span class="hl-keyword">{ Maybe, Just, Nothing } from </span>&quot;<span class="hl-value">maybe-type</span>&quot;;

<span class="hl-keyword">function</span> findItem&lt;<span class="hl-generic">T</span>&gt;(<span class="hl-property">array</span>: T[], <span class="hl-property">predicate</span>: (<span class="hl-property">item</span>: T) =&gt; <span class="hl-keyword">boolean</span>): Maybe&lt;<span class="hl-generic">T</span>&gt; {
  <span class="hl-keyword">for</span> (<span class="hl-keyword">const</span> item <span class="hl-keyword">of</span> array) {
    <span class="hl-keyword">if</span> (<span class="hl-property">predicate</span>(item)) {
      <span class="hl-keyword">return</span> <span class="hl-property">Just</span>(item);
    }
  }
  <span class="hl-keyword">return</span> Nothing&lt;<span class="hl-generic">T</span>&gt;();
}

<span class="hl-comment">// Usage example</span>
<span class="hl-keyword">const</span> numbers = [1, 2, 3, 4, 5];

<span class="hl-keyword">const</span> result = <span class="hl-property">findItem</span>(numbers, (n) =&gt; n === 3);
<span class="hl-keyword">if</span> (result.<span class="hl-property">IsJust</span>()) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Found:</span>&quot;, result.<span class="hl-property">FromJust</span>()); <span class="hl-comment">// Found: 3</span>
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Item not found</span>&quot;);
}
</pre>
<h3><a id="content-handling-and-checking-maybet-values" href="#content-handling-and-checking-maybet-values" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Handling and Checking <code>Maybe&lt;T&gt;</code> Values</h3>
<p>Here are several ways to handle and check <code>Maybe&lt;T&gt;</code> values returned from functions.</p>
<h4><a id="content-using-isjust-and-isnothing" href="#content-using-isjust-and-isnothing" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Using <code>IsJust</code> and <code>IsNothing</code></h4>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> maybeNumber = <span class="hl-property">findItem</span>(numbers, (n) =&gt; n === 6);

<span class="hl-keyword">if</span> (maybeNumber.<span class="hl-property">IsJust</span>()) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Found:</span>&quot;, maybeNumber.<span class="hl-property">FromJust</span>());
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Item not found</span>&quot;);
}
</pre>
<h4><a id="content-using-frommaybe-with-a-default-value" href="#content-using-frommaybe-with-a-default-value" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Using <code>FromMaybe</code> with a Default Value</h4>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> valueOrDefault = maybeNumber.<span class="hl-property">FromMaybe</span>(0);
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Value or Default:</span>&quot;, valueOrDefault); <span class="hl-comment">// Value or Default: 0</span>
</pre>
<h4><a id="content-using-to-for-conditional-extraction" href="#content-using-to-for-conditional-extraction" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Using <code>To</code> for Conditional Extraction</h4>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">const</span> output = {};
<span class="hl-keyword">if</span> (maybeNumber.<span class="hl-property">To</span>(output)) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Extracted Value:</span>&quot;, output.<span class="hl-property">value</span>);
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">No value to extract</span>&quot;);
}
</pre>
<h3><a id="content-another-function-example" href="#content-another-function-example" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Another Function Example</h3>
<p>Let's create another function that parses an integer from a string and returns <code>Maybe&lt;number&gt;</code>.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">function</span> <span class="hl-property">parseIntMaybe</span>(<span class="hl-property">input</span>: <span class="hl-keyword">string</span>): Maybe&lt;<span class="hl-generic">number</span>&gt; {
  <span class="hl-keyword">const</span> parsed = <span class="hl-property">parseInt</span>(input, 10);
  <span class="hl-keyword">if</span> (<span class="hl-property">isNaN</span>(parsed)) {
    <span class="hl-keyword">return</span> Nothing&lt;<span class="hl-generic">number</span>&gt;();
  }
  <span class="hl-keyword">return</span> <span class="hl-property">Just</span>(parsed);
}

<span class="hl-comment">// Usage example</span>
<span class="hl-keyword">const</span> maybeParsed = <span class="hl-property">parseIntMaybe</span>(&quot;<span class="hl-value">123</span>&quot;);
<span class="hl-keyword">if</span> (maybeParsed.<span class="hl-property">IsJust</span>()) {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Parsed integer:</span>&quot;, maybeParsed.<span class="hl-property">FromJust</span>()); <span class="hl-comment">// Parsed integer: 123</span>
} <span class="hl-keyword">else</span> {
  console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Failed to parse integer</span>&quot;);
}

<span class="hl-keyword">const</span> maybeFailedParsed = <span class="hl-property">parseIntMaybe</span>(&quot;<span class="hl-value">abc</span>&quot;);
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Parsed or Default:</span>&quot;, maybeFailedParsed.<span class="hl-property">FromMaybe</span>(0)); <span class="hl-comment">// Parsed or Default: 0</span>
</pre>
<h3><a id="content-returning-maybet-from-asynchronous-functions" href="#content-returning-maybet-from-asynchronous-functions" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Returning <code>Maybe&lt;T&gt;</code> from Asynchronous Functions</h3>
<p>Here’s an example of how to use <code>Maybe&lt;T&gt;</code> in an asynchronous function:</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">async</span> <span class="hl-keyword">function</span> <span class="hl-property">fetchData</span>(<span class="hl-property">url</span>: <span class="hl-keyword">string</span>): Promise&lt;Maybe&lt;<span class="hl-generic">string</span>&gt;&gt; {
  <span class="hl-keyword">try</span> {
    <span class="hl-keyword">const</span> response = <span class="hl-keyword">await</span> <span class="hl-property">fetch</span>(url);
    <span class="hl-keyword">if</span> (!response.<span class="hl-property">ok</span>) {
      <span class="hl-keyword">return</span> Nothing&lt;<span class="hl-generic">string</span>&gt;();
    }
    <span class="hl-keyword">const</span> data = <span class="hl-keyword">await</span> response.<span class="hl-property">text</span>();
    <span class="hl-keyword">return</span> <span class="hl-property">Just</span>(data);
  } <span class="hl-keyword">catch</span> (error) {
    <span class="hl-keyword">return</span> Nothing&lt;<span class="hl-generic">string</span>&gt;();
  }
}

<span class="hl-comment">// Usage example</span>
<span class="hl-property">fetchData</span>(&quot;<span class="hl-value">https://api.example.com/data</span>&quot;).<span class="hl-property">then</span>((maybeData) =&gt; {
  <span class="hl-keyword">if</span> (maybeData.<span class="hl-property">IsJust</span>()) {
    console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Fetched Data:</span>&quot;, maybeData.<span class="hl-property">FromJust</span>());
  } <span class="hl-keyword">else</span> {
    console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Failed to fetch data</span>&quot;);
  }
});
</pre>
<p>These examples demonstrate how to use the <code>Maybe</code> type to handle cases where values might be absent, making your code more expressive and robust.</p>
<h2><a id="content-api-reference" href="#content-api-reference" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>API Reference</h2>
<h3><a id="content-maybe-class" href="#content-maybe-class" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>Maybe</code> Class</h3>
<h4><a id="content-static-methods" href="#content-static-methods" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Static Methods</h4>
<ul>
<li>
<code>Maybe.Just(value: T): Maybe&lt;T&gt;</code>
<ul>
<li>Creates a <code>Just</code> instance containing the provided value.</li>
</ul>
</li>
<li>
<code>Maybe.Nothing&lt;T&gt;(): Maybe&lt;T&gt;</code>
<ul>
<li>Creates a <code>Nothing</code> instance with no value.</li>
</ul>
</li>
</ul>
<h4><a id="content-instance-methods" href="#content-instance-methods" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Instance Methods</h4>
<ul>
<li>
<code>IsJust(): boolean</code>
<ul>
<li>Returns <code>true</code> if the instance is <code>Just</code>, otherwise <code>false</code>.</li>
</ul>
</li>
<li>
<code>IsNothing(): boolean</code>
<ul>
<li>Returns <code>true</code> if the instance is <code>Nothing</code>, otherwise <code>false</code>.</li>
</ul>
</li>
<li>
<code>FromJust(): T</code>
<ul>
<li>Returns the value if the instance is <code>Just</code>, otherwise throws an error.</li>
</ul>
</li>
<li>
<code>ToChecked(): T</code>
<ul>
<li>Alias for <code>FromJust</code>.</li>
</ul>
</li>
<li>
<code>FromMaybe(defaultValue: T): T</code>
<ul>
<li>Returns the value if the instance is <code>Just</code>, otherwise returns the provided default value.</li>
</ul>
</li>
<li>
<code>To(out: { [key: string]: T }, key?: string): boolean</code>
<ul>
<li>If the instance is <code>Just</code>, sets the value in the provided output object and returns <code>true</code>, otherwise returns <code>false</code>. Optionally, you can specify a custom key, otherwise the default key is <code>&quot;value&quot;</code>.</li>
</ul>
</li>
<li>
<code>equals(other: Maybe&lt;T&gt;): boolean</code>
<ul>
<li>Returns <code>true</code> if the other <code>Maybe</code> instance is equal, otherwise <code>false</code>.</li>
</ul>
</li>
<li>
<code>notEquals(other: Maybe&lt;T&gt;): boolean</code>
<ul>
<li>Returns <code>true</code> if the other <code>Maybe</code> instance is not equal, otherwise <code>false</code>.</li>
</ul>
</li>
</ul>
<h2><a id="content-license" href="#content-license" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>License</h2>
<p>This project is licensed under the MIT License. See the <a href="LICENSE">LICENSE</a> file for details.</p>
<hr />
<p>This library simplifies handling optional values in TypeScript, providing a clear and expressive way to manage cases where a value may or may not be present.</p>

@endsection