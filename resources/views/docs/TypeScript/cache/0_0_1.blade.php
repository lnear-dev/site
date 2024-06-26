@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-lnearcache">@lnear/cache</a>
<ul>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
<ul>
<li>
<a href="#content-importing">Importing</a>
</li>
<li>
<a href="#content-creating-a-cache-instance">Creating a Cache Instance</a>
<ul>
<li>
<a href="#content-lru-cache-example">LRU Cache Example:</a>
</li>
<li>
<a href="#content-lfu-cache-example">LFU Cache Example:</a>
</li>
</ul>
</li>
<li>
<a href="#content-api">API</a>
<ul>
<li>
<a href="#content-common-methods-for-lrucache-and-lfucache">Common Methods for LRUCache and LFUCache</a>
</li>
</ul>
</li>
<li>
<a href="#content-license">License</a>
</li>
<li>
<a href="#content-support">Support</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
<h1><a id="content-lnearcache" href="#content-lnearcache" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>@lnear/cache</h1>
<p><code>@lnear/cache</code> is a TypeScript library that provides implementations for two types of caching mechanisms: Least Recently Used (LRU) and Least Frequently Used (LFU). Caching is crucial in applications to improve performance by storing frequently accessed data in memory.</p>
<p>This package offers flexibility through generic implementations, allowing developers to cache any type of data with customizable options for maximum size and expiration times.</p>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>Install the package via npm:</p>
<pre data-lang="txt" class="notranslate">npm install @lnear/cache
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<h3><a id="content-importing" href="#content-importing" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Importing</h3>
<p>Import the cache classes into your TypeScript project:</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { LRUCache, LFUCache } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/cache</span>&quot;;
</pre>
<h3><a id="content-creating-a-cache-instance" href="#content-creating-a-cache-instance" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Creating a Cache Instance</h3>
<h4><a id="content-lru-cache-example" href="#content-lru-cache-example" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>LRU Cache Example:</h4>
<pre data-lang="ts" class="notranslate"><span class="hl-comment">// Create an LRU cache with a maximum size of 100 items</span>
<span class="hl-keyword">const</span> lruCache = <span class="hl-keyword">new</span> LRUCache&lt;<span class="hl-generic">string</span>, <span class="hl-generic">number</span>&gt;({ <span class="hl-property">maxSize</span>: 100 });

<span class="hl-comment">// Adding entries to the cache</span>
lruCache.<span class="hl-property">set</span>(&quot;<span class="hl-value">key1</span>&quot;, 1);
lruCache.<span class="hl-property">set</span>(&quot;<span class="hl-value">key2</span>&quot;, 2);

<span class="hl-comment">// Retrieving a value from the cache</span>
<span class="hl-keyword">const</span> value = lruCache.<span class="hl-property">get</span>(&quot;<span class="hl-value">key1</span>&quot;).<span class="hl-property">ToChecked</span>(); <span class="hl-comment">// Returns 1</span>

<span class="hl-comment">// Iterating through cache entries</span>
<span class="hl-keyword">for</span> (<span class="hl-keyword">const</span> [key, value] <span class="hl-keyword">of</span> lruCache.<span class="hl-property">entries</span>()) {
  console.<span class="hl-property">log</span>(`<span class="hl-property">Key</span>: ${key}, <span class="hl-property">Value</span>: ${value}`);
}
</pre>
<h4><a id="content-lfu-cache-example" href="#content-lfu-cache-example" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>LFU Cache Example:</h4>
<pre data-lang="ts" class="notranslate"><span class="hl-comment">// Create an LFU cache with a maximum size of 100 items</span>
<span class="hl-keyword">const</span> lfuCache = <span class="hl-keyword">new</span> LFUCache&lt;<span class="hl-generic">string</span>, <span class="hl-generic">number</span>&gt;({ <span class="hl-property">maxSize</span>: 100 });

<span class="hl-comment">// Adding entries to the cache</span>
lfuCache.<span class="hl-property">set</span>(&quot;<span class="hl-value">key1</span>&quot;, 1);
lfuCache.<span class="hl-property">set</span>(&quot;<span class="hl-value">key2</span>&quot;, 2);

<span class="hl-comment">// Retrieving a value from the cache</span>
<span class="hl-keyword">const</span> value = lfuCache.<span class="hl-property">get</span>(&quot;<span class="hl-value">key1</span>&quot;).<span class="hl-property">ToChecked</span>(); <span class="hl-comment">// Returns 1</span>

<span class="hl-comment">// Iterating through cache entries</span>
<span class="hl-keyword">for</span> (<span class="hl-keyword">const</span> [key, value] <span class="hl-keyword">of</span> lfuCache.<span class="hl-property">entries</span>()) {
  console.<span class="hl-property">log</span>(`<span class="hl-property">Key</span>: ${key}, <span class="hl-property">Value</span>: ${value}`);
}
</pre>
<h3><a id="content-api" href="#content-api" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>API</h3>
<h4><a id="content-common-methods-for-lrucache-and-lfucache" href="#content-common-methods-for-lrucache-and-lfucache" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Common Methods for LRUCache and LFUCache</h4>
<ul>
<li>
<code>set(key: K, value: V, options?: { maxAge?: number }): this</code>: Adds or updates a key-value pair in the cache.</li>
<li>
<code>get(key: K): Maybe&lt;V&gt;</code>: Retrieves the value associated with the key, if present.</li>
<li>
<code>has(key: K): boolean</code>: Checks if the cache contains the specified key.</li>
<li>
<code>delete(key: K): boolean</code>: Deletes a key-value pair from the cache.</li>
<li>
<code>clear(): void</code>: Clears all entries from the cache.</li>
<li>
<code>resize(newSize: number): void</code>: Resizes the cache to the new size, evicting entries if necessary.</li>
<li>
<code>entries(): IterableIterator&lt;[K, V]&gt;</code>: Returns an iterator for all entries in the cache.</li>
<li>
<code>forEach(callback: (value: V, key: K, map: Cache&lt;K, V&gt;) =&gt; void, thisArg?: any): void</code>: Executes a callback for each entry in the cache.</li>
<li>
<code>peek(key: K): Maybe&lt;V&gt;</code>: Retrieves the value associated with the key without updating its frequency.</li>
</ul>
<h3><a id="content-license" href="#content-license" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>License</h3>
<p>This project is licensed under the MIT License - see the <a href="./LICENSE">LICENSE</a> file for details.</p>
<h3><a id="content-support" href="#content-support" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Support</h3>
<p>For questions or issues regarding the package, please <a href="https://github.com/lnear-dev/cache/issues">open an issue</a> on GitHub.</p>

@endsection