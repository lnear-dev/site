@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-lnearrouter">@lnear/router</a>
<ul>
<li>
<a href="#content-table-of-contents">Table of Contents</a>
</li>
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
<a href="#content-configuration">Configuration</a>
</li>
<li>
<a href="#content-adding-routes">Adding Routes</a>
</li>
<li>
<a href="#content-navigation">Navigation</a>
</li>
</ul>
</li>
<li>
<a href="#content-api-reference">API Reference</a>
<ul>
<li>
<a href="#content-resolverouterpath">resolveRouterPath</a>
</li>
<li>
<a href="#content-config">Config</a>
</li>
<li>
<a href="#content-router">Router</a>
</li>
<li>
<a href="#content-routedefinition">RouteDefinition</a>
</li>
<li>
<a href="#content-routeevent">RouteEvent</a>
</li>
</ul>
</li>
<li>
<a href="#content-contributing">Contributing</a>
</li>
<li>
<a href="#content-license">License</a>
</li>
</ul>
</li>
</ul>
<h1><a id="content-lnearrouter" href="#content-lnearrouter" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>@lnear/router</h1>
<p>This repository contains a TypeScript-based router library designed for single-page applications (SPAs). It is built with <code>lit-html</code> for template rendering and supports route management with plugins and dynamic path resolution.</p>
<h2><a id="content-table-of-contents" href="#content-table-of-contents" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Table of Contents</h2>
<ol>
<li>
<a href="#features">Features</a>
</li>
<li>
<a href="#installation">Installation</a>
</li>
<li>
<a href="#usage">Usage</a>
<ul>
<li>
<a href="#configuration">Configuration</a>
</li>
<li>
<a href="#adding-routes">Adding Routes</a>
</li>
<li>
<a href="#navigation">Navigation</a>
</li>
</ul>
</li>
<li>
<a href="#api-reference">API Reference</a>
<ul>
<li>
<a href="#resolverouterpath">resolveRouterPath</a>
</li>
<li>
<a href="#config">Config</a>
</li>
<li>
<a href="#router">Router</a>
</li>
<li>
<a href="#routedefinition">RouteDefinition</a>
</li>
<li>
<a href="#routeevent">RouteEvent</a>
</li>
</ul>
</li>
<li>
<a href="#contributing">Contributing</a>
</li>
<li>
<a href="#license">License</a>
</li>
</ol>
<h2><a id="content-features" href="#content-features" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Features</h2>
<ul>
<li>
<strong>Dynamic Path Resolution</strong>: Resolve paths with the base URL specified at build time.</li>
<li>
<strong>Route Management</strong>: Define and manage routes with dynamic parameters and query strings.</li>
<li>
<strong>Plugin System</strong>: Enhance routing capabilities with plugins.</li>
<li>
<strong>Event Handling</strong>: Listen to route changes with custom events.</li>
<li>
<strong>Fallback Routes</strong>: Specify fallback routes for unmatched paths.</li>
</ul>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>To install the router library, you need to have a package manager like npm or yarn:</p>
<pre data-lang="txt" class="notranslate">npm install @lnear/router
# or
yarn add @lnear/router
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<h3><a id="content-configuration" href="#content-configuration" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Configuration</h3>
<p>First, you need to create a configuration object for the router. This configuration includes your route definitions and any optional plugins or fallback routes.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { Router, Config } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/router</span>&quot;;
<span class="hl-keyword">import</span> <span class="hl-keyword">{ html } from </span>&quot;<span class="hl-value">lit-html</span>&quot;;
<span class="hl-keyword">const</span> router = <span class="hl-keyword">new</span> <span class="hl-type">Router</span>({
  <span class="hl-property">routes</span>: [
    {
      <span class="hl-property">path</span>: &quot;<span class="hl-value">/</span>&quot;,
      <span class="hl-property">title</span>: &quot;<span class="hl-value">Home</span>&quot;,
      <span class="hl-property">render</span>: (context) =&gt; html`&lt;<span class="hl-generic">h1</span>&gt;Home&lt;/h1&gt;`,
    },
    {
      <span class="hl-property">path</span>: &quot;<span class="hl-value">/about</span>&quot;,
      <span class="hl-property">title</span>: &quot;<span class="hl-value">About</span>&quot;,
      <span class="hl-property">render</span>: (context) =&gt; html`&lt;<span class="hl-generic">h1</span>&gt;About&lt;/h1&gt;`,
    },
  ],
  <span class="hl-property">fallback</span>: &quot;<span class="hl-value">/404</span>&quot;,
});
</pre>
<h3><a id="content-adding-routes" href="#content-adding-routes" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Adding Routes</h3>
<p>You can dynamically add routes to the router after initialization.</p>
<pre data-lang="ts" class="notranslate">router.<span class="hl-property">addRoute</span>({
  <span class="hl-property">path</span>: &quot;<span class="hl-value">/contact</span>&quot;,
  <span class="hl-property">title</span>: &quot;<span class="hl-value">Contact</span>&quot;,
  <span class="hl-property">render</span>: (context) =&gt; html`&lt;<span class="hl-generic">h1</span>&gt;Contact&lt;/h1&gt;`,
});
</pre>
<h3><a id="content-navigation" href="#content-navigation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Navigation</h3>
<p>To navigate programmatically, use the <code>navigate</code> method.</p>
<pre data-lang="ts" class="notranslate">router.<span class="hl-property">navigate</span>(&quot;<span class="hl-value">/about</span>&quot;);
</pre>
<h2><a id="content-api-reference" href="#content-api-reference" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>API Reference</h2>
<h3><a id="content-resolverouterpath" href="#content-resolverouterpath" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>resolveRouterPath</h3>
<p>This function resolves a given path with the base URL specified at build time.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { resolveRouterPath } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/router</span>&quot;;

<span class="hl-keyword">const</span> fullPath = <span class="hl-property">resolveRouterPath</span>(&quot;<span class="hl-value">/my-path</span>&quot;);
</pre>
<h3><a id="content-config" href="#content-config" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Config</h3>
<p>The configuration object for the router.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">export</span> <span class="hl-keyword">interface</span> Config {
  <span class="hl-variable">fallback</span>?: <span class="hl-keyword">string</span>;
  <span class="hl-variable">plugins</span>?: RouterPluginInterface[];
  <span class="hl-property">routes</span>: RouteDefinition[];
}
</pre>
<h3><a id="content-router" href="#content-router" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Router</h3>
<p>The main class for managing routes and navigation.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">class</span> <span class="hl-type">Router</span> <span class="hl-keyword">extends</span> EventTarget {
  <span class="hl-keyword">constructor</span>(<span class="hl-property">config</span>: Config);
  <span class="hl-property">addRoute</span>(<span class="hl-property">route</span>: RouteDefinition): <span class="hl-keyword">void</span>;
  <span class="hl-property">navigate</span>(
    <span class="hl-property">url</span>: URL | <span class="hl-keyword">string</span>,
    <span class="hl-variable">options</span>?: { <span class="hl-variable">backNav</span>?: <span class="hl-keyword">boolean</span>; <span class="hl-variable">replace</span>?: <span class="hl-keyword">boolean</span> }
  ): Promise&lt;<span class="hl-generic">void</span>&gt;;
  <span class="hl-property">render</span>(): TemplateResult&lt;<span class="hl-generic">1</span>&gt;;
  <span class="hl-property">uninstall</span>(): <span class="hl-keyword">void</span>;
}
</pre>
<h3><a id="content-routedefinition" href="#content-routedefinition" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>RouteDefinition</h3>
<p>Defines a route in the router.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">export</span> <span class="hl-keyword">interface</span> RouteDefinition {
  <span class="hl-property">path</span>: <span class="hl-keyword">string</span>;
  <span class="hl-property">title</span>: <span class="hl-keyword">string</span> | ((<span class="hl-property">context</span>: Partial&lt;<span class="hl-generic">Context</span>&gt;) =&gt; <span class="hl-keyword">string</span>);
  <span class="hl-property">render</span>(<span class="hl-property">context</span>: Context): TemplateResult&lt;<span class="hl-generic">1</span>&gt;;
  <span class="hl-variable">plugins</span>?: RouterPluginInterface[];
}
</pre>
<h3><a id="content-routeevent" href="#content-routeevent" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>RouteEvent</h3>
<p>An event that is dispatched when the route changes.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">class</span> <span class="hl-type">RouteEvent</span> <span class="hl-keyword">extends</span> Event {
  <span class="hl-keyword">constructor</span>(<span class="hl-property">context</span>: Context);
}
</pre>
<h2><a id="content-contributing" href="#content-contributing" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Contributing</h2>
<p>We welcome contributions to improve the router library. To contribute, please fork the repository, create a new branch, and submit a pull request with your changes.</p>
<h2><a id="content-license" href="#content-license" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>License</h2>
<p>This project is licensed under the MIT License. See the <a href="LICENSE">LICENSE</a> file for more details.</p>
<hr />
<p>This <code>README</code> provides an overview of the router library, its features, and usage instructions. For more detailed documentation and examples, please refer to the source code and comments within the codebase.</p>

@endsection