@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-pwa">Pwa</a>
<ul>
<li>
<a href="#content-install">Install</a>
</li>
<li>
<a href="#content-usage">Usage</a>
</li>
<li>
<a href="#content-callbacks">Callbacks</a>
</li>
<li>
<a href="#content-styling-the-dialog">Styling the dialog</a>
</li>
<li>
<a href="#content-animating-the-dialog">Animating the dialog</a>
</li>
<li>
<a href="#content-abstractions">Abstractions</a>
<ul>
<li>
<a href="#content-context-menu">Context menu</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
<h1><a id="content-pwa" href="#content-pwa" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Pwa</h1>
<h2><a id="content-install" href="#content-install" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Install</h2>
<pre data-lang="txt" class="notranslate">npm i -S @lnear/dialog
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>'; 

<span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">foo</span>: { 
    <span class="hl-property">opening</span>: (context) =&gt; {context.<span class="hl-property">dialog</span>.<span class="hl-property">querySelector</span>('<span class="hl-value">form</span>').<span class="hl-property">innerHTML</span> = '<span class="hl-value">hello world</span>';},
    <span class="hl-property">opened</span>: (context) =&gt; {},
    <span class="hl-property">closing</span>: (context) =&gt; {},
    <span class="hl-property">closed</span>: (context) =&gt; {}
  },
  <span class="hl-property">bar</span>: <span class="hl-property">someAbstraction</span>({
    <span class="hl-property">title</span>: '<span class="hl-value">foo</span>', 
    <span class="hl-keyword">import</span>: () =&gt; <span class="hl-keyword">import</span>('<span class="hl-value">./my-component.js</span>'),
    <span class="hl-property">render</span>: () =&gt; html`&lt;my-dialog&gt;&lt;/my-dialog&gt;`
  }),
});

dialog.<span class="hl-property">open</span>({<span class="hl-property">id</span>: '<span class="hl-value">foo</span>'});
<span class="hl-keyword">await</span> dialog.<span class="hl-property">opened</span>;
dialog.<span class="hl-property">isOpen</span>; <span class="hl-comment">// true</span>
<span class="hl-comment">/** Or */</span>
dialog.<span class="hl-property">opened</span>.<span class="hl-property">then</span>((context) =&gt; {});

dialog.<span class="hl-property">close</span>();
<span class="hl-keyword">await</span> dialog.<span class="hl-property">closed</span>;
dialog.<span class="hl-property">isOpen</span>; <span class="hl-comment">// false</span>
<span class="hl-comment">/** Or */</span>
dialog.<span class="hl-property">closed</span>.<span class="hl-property">then</span>((context) =&gt; {});

dialog.<span class="hl-property">addEventListener</span>('<span class="hl-value">opening</span>', ({context}) =&gt; {});
dialog.<span class="hl-property">addEventListener</span>('<span class="hl-value">opened</span>', ({context}) =&gt; {});
dialog.<span class="hl-property">addEventListener</span>('<span class="hl-value">closing</span>', ({context}) =&gt; {
  console.<span class="hl-property">log</span>(dialog.<span class="hl-property">returnValue</span>);
});
dialog.<span class="hl-property">addEventListener</span>('<span class="hl-value">closed</span>', ({context}) =&gt; {
  <span class="hl-keyword">const</span> { id, dialog } = context;
  
  <span class="hl-keyword">if</span> (id === '<span class="hl-value">foo</span>') {
    console.<span class="hl-property">log</span>(dialog.<span class="hl-property">returnValue</span>);
  }

  <span class="hl-keyword">if</span>(dialog.<span class="hl-property">returnValue</span> === '<span class="hl-value">dismiss</span>') {
    console.<span class="hl-property">log</span>('<span class="hl-value">Dialog was closed via light dismiss</span>');
  }

  <span class="hl-keyword">if</span>(dialog.<span class="hl-property">returnValue</span> === '<span class="hl-value">programmatic</span>') {
    console.<span class="hl-property">log</span>('<span class="hl-value">Dialog was closed via `dialog.close()`</span>');
  }
});

dialog.<span class="hl-property">modify</span>((dialogNode) =&gt; {
  dialogNode.<span class="hl-property">classList</span>.<span class="hl-property">add</span>('<span class="hl-value">foo</span>');
});

<span class="hl-comment">/** You can also pass parameters to the dialog renderer */</span>
dialog.<span class="hl-property">open</span>({
  <span class="hl-property">id</span>: '<span class="hl-value">foo</span>', 
  <span class="hl-property">parameters</span>: {
    <span class="hl-property">foo</span>: '<span class="hl-value">bar</span>'
  }
});
</pre>
<h2><a id="content-callbacks" href="#content-callbacks" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Callbacks</h2>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>'; 

<span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">foo</span>: { 
    <span class="hl-comment">/** 
     * Executed right after the dialog has been created and added to the DOM, before animations have run
     * Can be used for setup work, like adding `id`s to the dialog, lazy loading, 
     * and rendering to the dialog's DOM
     */</span>
    <span class="hl-property">opening</span>: (context) =&gt; {
      context.<span class="hl-property">dialog</span>; <span class="hl-comment">// dialog node</span>
      context.<span class="hl-property">id</span>; <span class="hl-comment">// 'foo';</span>
      context.<span class="hl-property">parameters</span>; <span class="hl-comment">// { bar: 'bar' }</span>
    },
    
    <span class="hl-comment">/** 
     * Executed after animations for the dialog element have run 
     */</span>
    <span class="hl-property">opened</span>: (context) =&gt; {},
    
    <span class="hl-comment">/** 
     * Executed when the native &lt;dialog&gt;'s `close` event has fired, on &quot;light dismiss&quot;, 
     * escape was pressed, or `dialog.close` was called
     * Executed before animations 
     * 
     * Has access to `dialog.returnValue`
     */</span>
    <span class="hl-property">closing</span>: (context) =&gt; {},

    <span class="hl-comment">/** 
     * Executed after the dialog's close animations have run and right before the dialog node is removed from the DOM 
     * 
     * Has access to `dialog.returnValue`
     */</span>
    <span class="hl-property">closed</span>: (context) =&gt; {}
  },
});

dialog.<span class="hl-property">open</span>({<span class="hl-property">id</span>: '<span class="hl-value">foo</span>', <span class="hl-property">parameters</span>: {<span class="hl-property">bar</span>: '<span class="hl-value">bar</span>'}})
</pre>
<h2><a id="content-styling-the-dialog" href="#content-styling-the-dialog" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Styling the dialog</h2>
<p>It's recommended to provide a unique ID for the kind of dialog you want to show. For example:</p>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>'; 

<span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">foo</span>: { 
    <span class="hl-property">opening</span>: ({dialog}) =&gt; {
      dialog.<span class="hl-property">id</span> = '<span class="hl-value">foo</span>';
    },
  },
});
</pre>
<p>You can then, in your global stylesheet, select the dialog like so:</p>
<pre data-lang="css" class="notranslate"><span class="hl-keyword">dialog[app-tools]#foo </span>{
  <span class="hl-property">border-radius</span>: 10px;
  <span class="hl-property">background</span>: lightgrey;
  <span class="hl-comment">/* etc */</span>
}<span class="hl-keyword">

@media (max-width: 600px) </span>{<span class="hl-keyword">
  dialog[app-tools]#foo </span>{
    <span class="hl-property">width</span>: 90%;
  }
}
</pre>
<h2><a id="content-animating-the-dialog" href="#content-animating-the-dialog" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Animating the dialog</h2>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>'; 

<span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">foo</span>: { 
    <span class="hl-property">opening</span>: ({dialog}) =&gt; {
      dialog.<span class="hl-property">id</span> = '<span class="hl-value">foo</span>';
      dialog.<span class="hl-property">form</span>.<span class="hl-property">innerHTML</span> = '<span class="hl-value">hello world</span>';
    },
  },
});

dialog.<span class="hl-property">open</span>({<span class="hl-property">id</span>: '<span class="hl-value">foo</span>'});
</pre>
<pre data-lang="css" class="notranslate"><span class="hl-keyword">dialog[app-tools]#foo </span>{
  <span class="hl-property">opacity</span>: 0;
  <span class="hl-property">transform</span>: <span class="hl-keyword">translateY</span>(40px);
  <span class="hl-property">transition</span>: opacity .3s ease-out, transform .3s ease-out;
}<span class="hl-keyword">

dialog[app-tools][open]#foo </span>{
  <span class="hl-property">opacity</span>: 1;
  <span class="hl-property">transform</span>: <span class="hl-keyword">translateY</span>(0);
}
</pre>
<h2><a id="content-abstractions" href="#content-abstractions" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Abstractions</h2>
<p>It can be useful to declare some abstractions for the different kinds of dialogs you want to use in your app. Here's an example using Lit:</p>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { html, render } <span class="hl-keyword">from</span> '<span class="hl-value">lit</span>';
<span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>'; 

<span class="hl-keyword">function</span> <span class="hl-property">modal</span>(config) {
  <span class="hl-keyword">return</span> {
    <span class="hl-property">opening</span>: ({dialog, parameters}) =&gt; {
      config.<span class="hl-property">import</span>();
      <span class="hl-property">render</span>(config.<span class="hl-property">render</span>({parameters, <span class="hl-property">title</span>: config.<span class="hl-property">title</span>}), dialog.<span class="hl-property">form</span>);
    },
    <span class="hl-property">closing</span>: ({dialog}) =&gt; {
      console.<span class="hl-property">log</span>(dialog.<span class="hl-property">returnValue</span>); <span class="hl-comment">// &quot;bar&quot;</span>
    }
  }
}

<span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">foo</span>: <span class="hl-property">modal</span>({
    <span class="hl-property">title</span>: '<span class="hl-value">Cart</span>',
    <span class="hl-keyword">import</span>: () =&gt; <span class="hl-keyword">import</span>('<span class="hl-value">./shopping-cart.js</span>'),
    <span class="hl-property">render</span>: ({title, parameters}) =&gt; html`
      &lt;h1&gt;${title}&lt;/h1&gt;
      &lt;shopping-cart foo=${parameters.<span class="hl-property">foo</span>}&gt;&lt;/shopping-cart&gt;
      &lt;button value=&quot;<span class="hl-value">bar</span>&quot;&gt;Close&lt;/button&gt;
    `
  })
});

dialog.<span class="hl-property">open</span>({<span class="hl-property">id</span>: '<span class="hl-value">foo</span>', <span class="hl-property">parameters</span>: { <span class="hl-property">foo</span>: '<span class="hl-value">bar</span>' }});
</pre>
<h3><a id="content-context-menu" href="#content-context-menu" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Context menu</h3>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { computePosition } <span class="hl-keyword">from</span> '<span class="hl-value">@floating-ui/dom</span>';
<span class="hl-keyword">import</span> { Dialog } <span class="hl-keyword">from</span> '<span class="hl-value">@lnear/dialog</span>';

<span class="hl-keyword">export</span> <span class="hl-keyword">const</span> dialog = <span class="hl-keyword">new</span> <span class="hl-type">Dialog</span>({
  <span class="hl-property">context</span>: <span class="hl-property">context</span>()
});

<span class="hl-keyword">function</span> <span class="hl-property">context</span>() {
  <span class="hl-keyword">return</span> {
    <span class="hl-property">opening</span>: <span class="hl-keyword">async</span> ({dialog, parameters, id}) =&gt; {
      dialog.<span class="hl-property">id</span> = '<span class="hl-value">context</span>';
      <span class="hl-property">render</span>(parameters.<span class="hl-property">template</span>(), dialog.<span class="hl-property">form</span>);

      <span class="hl-keyword">if</span> (!media.<span class="hl-type">MAX</span>.<span class="hl-property">XS</span>()) {
        <span class="hl-keyword">const</span> { x, y } = <span class="hl-keyword">await</span> <span class="hl-property">computePosition</span>(
          parameters.<span class="hl-property">target</span>, 
          dialog, 
          { <span class="hl-property">placement</span>: '<span class="hl-value">bottom-end</span>'}
        );
        <span class="hl-type">Object</span>.<span class="hl-property">assign</span>(dialog.<span class="hl-property">style</span>, {
          <span class="hl-property">marginLeft</span>: `${x}px`,
          <span class="hl-property">marginTop</span>: `${y}px`,
        });
      }
    }
  }
}

dialog.<span class="hl-property">open</span>({
  <span class="hl-property">id</span>: '<span class="hl-value">context</span>', 
  <span class="hl-property">parameters</span>: {
    <span class="hl-property">target</span>: e.<span class="hl-property">target</span>,
    <span class="hl-property">template</span>: () =&gt; html`&lt;h1&gt;hello world&lt;/h1&gt;`
  }
});
</pre>

@endsection