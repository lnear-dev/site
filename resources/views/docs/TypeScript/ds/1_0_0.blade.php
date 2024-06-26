@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-lnear-data-structures-package">Lnear Data Structures Package</a>
<ul>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
<ul>
<li>
<a href="#content-doublylinkedlist">DoublyLinkedList</a>
</li>
<li>
<a href="#content-binarysearchtree">BinarySearchTree</a>
</li>
<li>
<a href="#content-linkedlist">LinkedList</a>
</li>
<li>
<a href="#content-stack">Stack</a>
</li>
<li>
<a href="#content-queue">Queue</a>
</li>
</ul>
</li>
<li>
<a href="#content-api">API</a>
<ul>
<li>
<a href="#content-doublylinkedlist-1">DoublyLinkedList</a>
</li>
<li>
<a href="#content-binarysearchtree-1">BinarySearchTree</a>
</li>
<li>
<a href="#content-linkedlist-1">LinkedList</a>
</li>
<li>
<a href="#content-stack-1">Stack</a>
</li>
<li>
<a href="#content-queue-1">Queue</a>
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
<h1><a id="content-lnear-data-structures-package" href="#content-lnear-data-structures-package" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Lnear Data Structures Package</h1>
<p>This package provides TypeScript implementations of various data structures: <code>DoublyLinkedList</code>, <code>BinarySearchTree</code>, <code>LinkedList</code>, <code>Stack</code>, and <code>Queue</code>. These classes offer efficient operations for managing collections of data.</p>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>To use the package, you can install it via npm:</p>
<pre data-lang="txt" class="notranslate">npm install @lnear/ds
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<h3><a id="content-doublylinkedlist" href="#content-doublylinkedlist" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>DoublyLinkedList</h3>
<p>The <code>DoublyLinkedList</code> class provides a doubly linked list implementation with methods for basic operations like appending, inserting, removing, and printing elements.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { DoublyLinkedList } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/ds</span>&quot;;

<span class="hl-comment">// Create a new doubly linked list</span>
<span class="hl-keyword">const</span> list = <span class="hl-keyword">new</span> DoublyLinkedList&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Append elements</span>
list.<span class="hl-property">append</span>(10);
list.<span class="hl-property">append</span>(20);
list.<span class="hl-property">append</span>(30);

<span class="hl-comment">// Insert element at a specific position</span>
list.<span class="hl-property">insert</span>(15, 1);

<span class="hl-comment">// Remove element at a specific position</span>
list.<span class="hl-property">remove</span>(2);

<span class="hl-comment">// Print all elements</span>
list.<span class="hl-property">print</span>();

<span class="hl-comment">// Check size and emptiness</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Size:</span>&quot;, list.<span class="hl-property">size</span>()); <span class="hl-comment">// Outputs: 3</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Is Empty:</span>&quot;, list.<span class="hl-property">isEmpty</span>()); <span class="hl-comment">// Outputs: false</span>
</pre>
<h3><a id="content-binarysearchtree" href="#content-binarysearchtree" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>BinarySearchTree</h3>
<p>The <code>BinarySearchTree</code> class provides a binary search tree implementation with methods for insertion, deletion, searching, and in-order traversal.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { BinarySearchTree } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/ds</span>&quot;;

<span class="hl-comment">// Create a new binary search tree</span>
<span class="hl-keyword">const</span> bst = <span class="hl-keyword">new</span> BinarySearchTree&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Insert elements</span>
bst.<span class="hl-property">insert</span>(10);
bst.<span class="hl-property">insert</span>(5);
bst.<span class="hl-property">insert</span>(15);

<span class="hl-comment">// Remove element</span>
bst.<span class="hl-property">remove</span>(5);

<span class="hl-comment">// Search for an element</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Contains 10:</span>&quot;, bst.<span class="hl-property">search</span>(10)); <span class="hl-comment">// Outputs: true</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Contains 5:</span>&quot;, bst.<span class="hl-property">search</span>(5)); <span class="hl-comment">// Outputs: false</span>

<span class="hl-comment">// In-order traversal</span>
bst.<span class="hl-property">inOrderTraverse</span>((data) =&gt; console.<span class="hl-property">log</span>(data));
</pre>
<h3><a id="content-linkedlist" href="#content-linkedlist" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>LinkedList</h3>
<p>The <code>LinkedList</code> class provides a singly linked list implementation with methods for basic operations like appending, inserting, removing, and printing elements.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { LinkedList } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/ds</span>&quot;;

<span class="hl-comment">// Create a new linked list</span>
<span class="hl-keyword">const</span> list = <span class="hl-keyword">new</span> LinkedList&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Append elements</span>
list.<span class="hl-property">append</span>(10);
list.<span class="hl-property">append</span>(20);
list.<span class="hl-property">append</span>(30);

<span class="hl-comment">// Insert element at a specific position</span>
list.<span class="hl-property">insert</span>(15, 1);

<span class="hl-comment">// Remove element at a specific position</span>
list.<span class="hl-property">remove</span>(2);

<span class="hl-comment">// Print all elements</span>
list.<span class="hl-property">print</span>();

<span class="hl-comment">// Check size and emptiness</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Size:</span>&quot;, list.<span class="hl-property">size</span>()); <span class="hl-comment">// Outputs: 3</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Is Empty:</span>&quot;, list.<span class="hl-property">isEmpty</span>()); <span class="hl-comment">// Outputs: false</span>
</pre>
<h3><a id="content-stack" href="#content-stack" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Stack</h3>
<p>The <code>Stack</code> class provides a stack implementation with methods for pushing, popping, peeking, and checking the size and emptiness of the stack.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { Stack } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/ds</span>&quot;;

<span class="hl-comment">// Create a new stack</span>
<span class="hl-keyword">const</span> stack = <span class="hl-keyword">new</span> Stack&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Push elements</span>
stack.<span class="hl-property">push</span>(10);
stack.<span class="hl-property">push</span>(20);
stack.<span class="hl-property">push</span>(30);

<span class="hl-comment">// Pop element</span>
console.<span class="hl-property">log</span>(stack.<span class="hl-property">pop</span>()); <span class="hl-comment">// Outputs: 30</span>

<span class="hl-comment">// Peek top element</span>
console.<span class="hl-property">log</span>(stack.<span class="hl-property">peek</span>()); <span class="hl-comment">// Outputs: 20</span>

<span class="hl-comment">// Check size and emptiness</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Size:</span>&quot;, stack.<span class="hl-property">size</span>()); <span class="hl-comment">// Outputs: 2</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Is Empty:</span>&quot;, stack.<span class="hl-property">isEmpty</span>()); <span class="hl-comment">// Outputs: false</span>
</pre>
<h3><a id="content-queue" href="#content-queue" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Queue</h3>
<p>The <code>Queue</code> class provides a queue implementation with methods for enqueuing, dequeuing, peeking, and checking the size and emptiness of the queue.</p>
<pre data-lang="ts" class="notranslate"><span class="hl-keyword">import</span> { Queue } <span class="hl-keyword">from</span> &quot;<span class="hl-value"><span class="hl-attribute">@lnear</span>/ds</span>&quot;;

<span class="hl-comment">// Create a new queue</span>
<span class="hl-keyword">const</span> queue = <span class="hl-keyword">new</span> Queue&lt;<span class="hl-generic">number</span>&gt;();

<span class="hl-comment">// Enqueue elements</span>
queue.<span class="hl-property">enqueue</span>(10);
queue.<span class="hl-property">enqueue</span>(20);
queue.<span class="hl-property">enqueue</span>(30);

<span class="hl-comment">// Dequeue element</span>
console.<span class="hl-property">log</span>(queue.<span class="hl-property">dequeue</span>()); <span class="hl-comment">// Outputs: 10</span>

<span class="hl-comment">// Peek front element</span>
console.<span class="hl-property">log</span>(queue.<span class="hl-property">peek</span>()); <span class="hl-comment">// Outputs: 20</span>

<span class="hl-comment">// Check size and emptiness</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Size:</span>&quot;, queue.<span class="hl-property">size</span>()); <span class="hl-comment">// Outputs: 2</span>
console.<span class="hl-property">log</span>(&quot;<span class="hl-value">Is Empty:</span>&quot;, queue.<span class="hl-property">isEmpty</span>()); <span class="hl-comment">// Outputs: false</span>
</pre>
<h2><a id="content-api" href="#content-api" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>API</h2>
<h3><a id="content-doublylinkedlist-1" href="#content-doublylinkedlist-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>DoublyLinkedList</h3>
<ul>
<li>
<strong>Methods</strong>:
<ul>
<li>
<code>isEmpty(): boolean</code>: Checks if the doubly linked list is empty.</li>
<li>
<code>size(): number</code>: Returns the number of elements in the doubly linked list.</li>
<li>
<code>append(data: T): void</code>: Appends an element to the end of the doubly linked list.</li>
<li>
<code>insert(data: T, position: number): void</code>: Inserts an element at a specified position.</li>
<li>
<code>remove(position: number): void</code>: Removes an element at a specified position.</li>
<li>
<code>print(): void</code>: Prints all elements in the doubly linked list.</li>
</ul>
</li>
</ul>
<h3><a id="content-binarysearchtree-1" href="#content-binarysearchtree-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>BinarySearchTree</h3>
<ul>
<li>
<strong>Methods</strong>:
<ul>
<li>
<code>insert(data: T): void</code>: Inserts an element into the binary search tree.</li>
<li>
<code>remove(data: T): void</code>: Removes an element from the binary search tree.</li>
<li>
<code>search(data: T): boolean</code>: Searches for an element in the binary search tree.</li>
<li>
<code>inOrderTraverse(callback: (data: T) =&gt; void): void</code>: Performs an in-order traversal of the binary search tree.</li>
</ul>
</li>
</ul>
<h3><a id="content-linkedlist-1" href="#content-linkedlist-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>LinkedList</h3>
<ul>
<li>
<strong>Methods</strong>:
<ul>
<li>
<code>isEmpty(): boolean</code>: Checks if the linked list is empty.</li>
<li>
<code>size(): number</code>: Returns the number of elements in the linked list.</li>
<li>
<code>append(data: T): void</code>: Appends an element to the end of the linked list.</li>
<li>
<code>insert(data: T, position: number): void</code>: Inserts an element at a specified position.</li>
<li>
<code>remove(position: number): void</code>: Removes an element at a specified position.</li>
<li>
<code>print(): void</code>: Prints all elements in the linked list.</li>
</ul>
</li>
</ul>
<h3><a id="content-stack-1" href="#content-stack-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Stack</h3>
<ul>
<li>
<strong>Methods</strong>:
<ul>
<li>
<code>push(item: T): void</code>: Pushes an element onto the stack.</li>
<li>
<code>pop(): T | undefined</code>: Pops and returns the top element from the stack.</li>
<li>
<code>peek(): T | undefined</code>: Returns the top element from the stack without removing it.</li>
<li>
<code>isEmpty(): boolean</code>: Checks if the stack is empty.</li>
<li>
<code>size(): number</code>: Returns the number of elements in the stack.</li>
</ul>
</li>
</ul>
<h3><a id="content-queue-1" href="#content-queue-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Queue</h3>
<ul>
<li>
<strong>Methods</strong>:
<ul>
<li>
<code>enqueue(item: T): void</code>: Enqueues an element at the rear of the queue.</li>
<li>
<code>dequeue(): T | undefined</code>: Dequeues and returns the front element from the queue.</li>
<li>
<code>peek(): T | undefined</code>: Returns the front element from the queue without dequeuing it.</li>
<li>
<code>isEmpty(): boolean</code>: Checks if the queue is empty.</li>
<li>
<code>size(): number</code>: Returns the number of elements in the queue.</li>
</ul>
</li>
</ul>
<h2><a id="content-contributing" href="#content-contributing" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Contributing</h2>
<p>Contributions are welcome! Please feel free to open issues or submit pull requests with improvements.</p>
<h2><a id="content-license" href="#content-license" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>License</h2>
<p>This package is licensed under the MIT License. See the LICENSE file for more details.</p>

@endsection