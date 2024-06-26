@extends('layouts.blog')
@section('doc')
<ul class="table-of-contents">
<li>
<a href="#content-marco---css-macro-library">Marco - CSS Macro Library</a>
<ul>
<li>
<a href="#content-installation">Installation</a>
</li>
<li>
<a href="#content-usage">Usage</a>
</li>
<li>
<a href="#content-patterns">Patterns</a>
<ul>
<li>
<a href="#content-drop-shadow">drop-shadow</a>
</li>
<li>
<a href="#content-drop-shadow-sm">drop-shadow-sm</a>
</li>
<li>
<a href="#content-drop-shadow-md">drop-shadow-md</a>
</li>
<li>
<a href="#content-drop-shadow-lg">drop-shadow-lg</a>
</li>
<li>
<a href="#content-drop-shadow-xl">drop-shadow-xl</a>
</li>
<li>
<a href="#content-drop-shadow-xl2">drop-shadow-xl2</a>
</li>
<li>
<a href="#content-drop-shadow-none">drop-shadow-none</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-0">backdrop-hue-rotate-0</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-15">backdrop-hue-rotate-15</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-16">backdrop-hue-rotate-16</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-30">backdrop-hue-rotate-30</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-60">backdrop-hue-rotate-60</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-90">backdrop-hue-rotate-90</a>
</li>
<li>
<a href="#content-backdrop-hue-rotate-180">backdrop-hue-rotate-180</a>
</li>
<li>
<a href="#content-hue-rotate-0">hue-rotate-0</a>
</li>
<li>
<a href="#content-hue-rotate-15">hue-rotate-15</a>
</li>
<li>
<a href="#content-hue-rotate-30">hue-rotate-30</a>
</li>
<li>
<a href="#content-hue-rotate-60">hue-rotate-60</a>
</li>
<li>
<a href="#content-hue-rotate-90">hue-rotate-90</a>
</li>
<li>
<a href="#content-hue-rotate-180">hue-rotate-180</a>
</li>
<li>
<a href="#content-grayscale-0">grayscale-0</a>
</li>
<li>
<a href="#content-grayscale">grayscale</a>
</li>
<li>
<a href="#content-invert-0">invert-0</a>
</li>
<li>
<a href="#content-invert">invert</a>
</li>
<li>
<a href="#content-sepia-0">sepia-0</a>
</li>
<li>
<a href="#content-sepia">sepia</a>
</li>
<li>
<a href="#content-backdrop-grayscale-0">backdrop-grayscale-0</a>
</li>
<li>
<a href="#content-backdrop-grayscale">backdrop-grayscale</a>
</li>
<li>
<a href="#content-saturate-0">saturate-0</a>
</li>
<li>
<a href="#content-saturate-50">saturate-50</a>
</li>
<li>
<a href="#content-saturate-100">saturate-100</a>
</li>
<li>
<a href="#content-saturate-150">saturate-150</a>
</li>
<li>
<a href="#content-saturate-200">saturate-200</a>
</li>
<li>
<a href="#content-backdrop-blur">backdrop-blur</a>
</li>
<li>
<a href="#content-backdrop-blur-none">backdrop-blur-none</a>
</li>
<li>
<a href="#content-backdrop-blur-sm">backdrop-blur-sm</a>
</li>
<li>
<a href="#content-backdrop-blur-md">backdrop-blur-md</a>
</li>
<li>
<a href="#content-backdrop-blur-lg">backdrop-blur-lg</a>
</li>
<li>
<a href="#content-backdrop-blur-xl">backdrop-blur-xl</a>
</li>
<li>
<a href="#content-backdrop-blur-xl2">backdrop-blur-xl2</a>
</li>
<li>
<a href="#content-backdrop-blur-xl3">backdrop-blur-xl3</a>
</li>
<li>
<a href="#content-blur">blur</a>
</li>
<li>
<a href="#content-blur-none">blur-none</a>
</li>
<li>
<a href="#content-blur-sm">blur-sm</a>
</li>
<li>
<a href="#content-blur-md">blur-md</a>
</li>
<li>
<a href="#content-blur-lg">blur-lg</a>
</li>
<li>
<a href="#content-blur-xl">blur-xl</a>
</li>
<li>
<a href="#content-blur-xl2">blur-xl2</a>
</li>
<li>
<a href="#content-blur-xl3">blur-xl3</a>
</li>
<li>
<a href="#content-backdrop-brightness-0">backdrop-brightness-0</a>
</li>
<li>
<a href="#content-backdrop-brightness-50">backdrop-brightness-50</a>
</li>
<li>
<a href="#content-backdrop-brightness-75">backdrop-brightness-75</a>
</li>
<li>
<a href="#content-backdrop-brightness-90">backdrop-brightness-90</a>
</li>
<li>
<a href="#content-backdrop-brightness-95">backdrop-brightness-95</a>
</li>
<li>
<a href="#content-backdrop-brightness-100">backdrop-brightness-100</a>
</li>
<li>
<a href="#content-backdrop-brightness-105">backdrop-brightness-105</a>
</li>
<li>
<a href="#content-backdrop-brightness-110">backdrop-brightness-110</a>
</li>
<li>
<a href="#content-backdrop-brightness-125">backdrop-brightness-125</a>
</li>
<li>
<a href="#content-backdrop-brightness-150">backdrop-brightness-150</a>
</li>
<li>
<a href="#content-backdrop-brightness-200">backdrop-brightness-200</a>
</li>
<li>
<a href="#content-brightness-0">brightness-0</a>
</li>
<li>
<a href="#content-brightness-50">brightness-50</a>
</li>
<li>
<a href="#content-brightness-75">brightness-75</a>
</li>
<li>
<a href="#content-brightness-90">brightness-90</a>
</li>
<li>
<a href="#content-brightness-95">brightness-95</a>
</li>
<li>
<a href="#content-brightness-100">brightness-100</a>
</li>
<li>
<a href="#content-brightness-105">brightness-105</a>
</li>
<li>
<a href="#content-brightness-110">brightness-110</a>
</li>
<li>
<a href="#content-brightness-125">brightness-125</a>
</li>
<li>
<a href="#content-brightness-150">brightness-150</a>
</li>
<li>
<a href="#content-brightness-200">brightness-200</a>
</li>
<li>
<a href="#content-contrast-0">contrast-0</a>
</li>
<li>
<a href="#content-contrast-50">contrast-50</a>
</li>
<li>
<a href="#content-contrast-75">contrast-75</a>
</li>
<li>
<a href="#content-contrast-100">contrast-100</a>
</li>
<li>
<a href="#content-contrast-125">contrast-125</a>
</li>
<li>
<a href="#content-contrast-150">contrast-150</a>
</li>
<li>
<a href="#content-contrast-200">contrast-200</a>
</li>
<li>
<a href="#content-backdrop-contrast-0">backdrop-contrast-0</a>
</li>
<li>
<a href="#content-backdrop-contrast-50">backdrop-contrast-50</a>
</li>
<li>
<a href="#content-backdrop-contrast-75">backdrop-contrast-75</a>
</li>
<li>
<a href="#content-backdrop-contrast-100">backdrop-contrast-100</a>
</li>
<li>
<a href="#content-backdrop-contrast-125">backdrop-contrast-125</a>
</li>
<li>
<a href="#content-backdrop-contrast-150">backdrop-contrast-150</a>
</li>
<li>
<a href="#content-backdrop-contrast-200">backdrop-contrast-200</a>
</li>
<li>
<a href="#content-ease-linear">ease-linear</a>
</li>
<li>
<a href="#content-ease-in">ease-in</a>
</li>
<li>
<a href="#content-ease-out">ease-out</a>
</li>
<li>
<a href="#content-ease-in-out">ease-in-out</a>
</li>
<li>
<a href="#content-timing-linear">timing-linear</a>
</li>
<li>
<a href="#content-timing-in">timing-in</a>
</li>
<li>
<a href="#content-timing-out">timing-out</a>
</li>
<li>
<a href="#content-timing-in-out">timing-in-out</a>
</li>
<li>
<a href="#content-transition-colors">transition-colors</a>
</li>
<li>
<a href="#content-transition-opacity">transition-opacity</a>
</li>
<li>
<a href="#content-transition-all">transition-all</a>
</li>
<li>
<a href="#content-transition-shadow">transition-shadow</a>
</li>
<li>
<a href="#content-transition-none">transition-none</a>
</li>
<li>
<a href="#content-float-start">float-start</a>
</li>
<li>
<a href="#content-float-end">float-end</a>
</li>
<li>
<a href="#content-float-right">float-right</a>
</li>
<li>
<a href="#content-float-left">float-left</a>
</li>
<li>
<a href="#content-float-none">float-none</a>
</li>
<li>
<a href="#content-clear-start">clear-start</a>
</li>
<li>
<a href="#content-clear-end">clear-end</a>
</li>
<li>
<a href="#content-clear-right">clear-right</a>
</li>
<li>
<a href="#content-clear-left">clear-left</a>
</li>
<li>
<a href="#content-clear-both">clear-both</a>
</li>
<li>
<a href="#content-clear-none">clear-none</a>
</li>
<li>
<a href="#content-inline-block">inline-block</a>
</li>
<li>
<a href="#content-inline-flex">inline-flex</a>
</li>
<li>
<a href="#content-inline-table">inline-table</a>
</li>
<li>
<a href="#content-block">block</a>
</li>
<li>
<a href="#content-inline">inline</a>
</li>
<li>
<a href="#content-hidden">hidden</a>
</li>
<li>
<a href="#content-table">table</a>
</li>
<li>
<a href="#content-table-caption">table-caption</a>
</li>
<li>
<a href="#content-table-cell">table-cell</a>
</li>
<li>
<a href="#content-table-column">table-column</a>
</li>
<li>
<a href="#content-table-column-group">table-column-group</a>
</li>
<li>
<a href="#content-table-footer-group">table-footer-group</a>
</li>
<li>
<a href="#content-table-header-group">table-header-group</a>
</li>
<li>
<a href="#content-table-row-group">table-row-group</a>
</li>
<li>
<a href="#content-table-row">table-row</a>
</li>
<li>
<a href="#content-flow-root">flow-root</a>
</li>
<li>
<a href="#content-grid">grid</a>
</li>
<li>
<a href="#content-inline-grid">inline-grid</a>
</li>
<li>
<a href="#content-contents">contents</a>
</li>
<li>
<a href="#content-list-item">list-item</a>
</li>
<li>
<a href="#content-bg-inherit">bg-inherit</a>
</li>
<li>
<a href="#content-bg-transparent">bg-transparent</a>
</li>
<li>
<a href="#content-bg-auto">bg-auto</a>
</li>
<li>
<a href="#content-bg-cover">bg-cover</a>
</li>
<li>
<a href="#content-bg-contain">bg-contain</a>
</li>
<li>
<a href="#content-bg-fixed">bg-fixed</a>
</li>
<li>
<a href="#content-bg-local">bg-local</a>
</li>
<li>
<a href="#content-bg-scroll">bg-scroll</a>
</li>
<li>
<a href="#content-bg-center">bg-center</a>
</li>
<li>
<a href="#content-bg-top">bg-top</a>
</li>
<li>
<a href="#content-bg-right-top">bg-right-top</a>
</li>
<li>
<a href="#content-bg-right">bg-right</a>
</li>
<li>
<a href="#content-bg-right-bottom">bg-right-bottom</a>
</li>
<li>
<a href="#content-bg-bottom">bg-bottom</a>
</li>
<li>
<a href="#content-bg-left-bottom">bg-left-bottom</a>
</li>
<li>
<a href="#content-bg-left">bg-left</a>
</li>
<li>
<a href="#content-bg-left-top">bg-left-top</a>
</li>
<li>
<a href="#content-bg-repeat">bg-repeat</a>
</li>
<li>
<a href="#content-bg-no-repeat">bg-no-repeat</a>
</li>
<li>
<a href="#content-bg-repeat-x">bg-repeat-x</a>
</li>
<li>
<a href="#content-bg-repeat-y">bg-repeat-y</a>
</li>
<li>
<a href="#content-bg-round">bg-round</a>
</li>
<li>
<a href="#content-bg-space">bg-space</a>
</li>
<li>
<a href="#content-bg-none">bg-none</a>
</li>
<li>
<a href="#content-pointer-events-none">pointer-events-none</a>
</li>
<li>
<a href="#content-pointer-events-auto">pointer-events-auto</a>
</li>
<li>
<a href="#content-place-content-center">place-content-center</a>
</li>
<li>
<a href="#content-place-content-start">place-content-start</a>
</li>
<li>
<a href="#content-place-content-end">place-content-end</a>
</li>
<li>
<a href="#content-place-content-between">place-content-between</a>
</li>
<li>
<a href="#content-place-content-around">place-content-around</a>
</li>
<li>
<a href="#content-place-content-evenly">place-content-evenly</a>
</li>
<li>
<a href="#content-place-content-baseline">place-content-baseline</a>
</li>
<li>
<a href="#content-place-content-stretch">place-content-stretch</a>
</li>
<li>
<a href="#content-place-items-center">place-items-center</a>
</li>
<li>
<a href="#content-place-items-start">place-items-start</a>
</li>
<li>
<a href="#content-place-items-end">place-items-end</a>
</li>
<li>
<a href="#content-place-items-baseline">place-items-baseline</a>
</li>
<li>
<a href="#content-place-items-stretch">place-items-stretch</a>
</li>
<li>
<a href="#content-inset-auto">inset-auto</a>
</li>
<li>
<a href="#content-start-auto">start-auto</a>
</li>
<li>
<a href="#content-end-auto">end-auto</a>
</li>
<li>
<a href="#content-top-auto">top-auto</a>
</li>
<li>
<a href="#content-right-auto">right-auto</a>
</li>
<li>
<a href="#content-bottom-auto">bottom-auto</a>
</li>
<li>
<a href="#content-left-auto">left-auto</a>
</li>
<li>
<a href="#content-isolate">isolate</a>
</li>
<li>
<a href="#content-isolation-auto">isolation-auto</a>
</li>
<li>
<a href="#content-z-auto">z-auto</a>
</li>
<li>
<a href="#content-order-first">order-first</a>
</li>
<li>
<a href="#content-order-last">order-last</a>
</li>
<li>
<a href="#content-order-none">order-none</a>
</li>
<li>
<a href="#content-col-auto">col-auto</a>
</li>
<li>
<a href="#content-col-span-full">col-span-full</a>
</li>
<li>
<a href="#content-col-start-auto">col-start-auto</a>
</li>
<li>
<a href="#content-col-end-auto">col-end-auto</a>
</li>
<li>
<a href="#content-row-auto">row-auto</a>
</li>
<li>
<a href="#content-row-span-full">row-span-full</a>
</li>
<li>
<a href="#content-row-start-auto">row-start-auto</a>
</li>
<li>
<a href="#content-row-end-auto">row-end-auto</a>
</li>
<li>
<a href="#content-box-border">box-border</a>
</li>
<li>
<a href="#content-box-content">box-content</a>
</li>
<li>
<a href="#content-aspect-auto">aspect-auto</a>
</li>
<li>
<a href="#content-aspect-square">aspect-square</a>
</li>
<li>
<a href="#content-aspect-video">aspect-video</a>
</li>
<li>
<a href="#content-flex-auto">flex-auto</a>
</li>
<li>
<a href="#content-flex-initial">flex-initial</a>
</li>
<li>
<a href="#content-flex-none">flex-none</a>
</li>
<li>
<a href="#content-basis-auto">basis-auto</a>
</li>
<li>
<a href="#content-basis-full">basis-full</a>
</li>
<li>
<a href="#content-table-auto">table-auto</a>
</li>
<li>
<a href="#content-table-fixed">table-fixed</a>
</li>
<li>
<a href="#content-caption-top">caption-top</a>
</li>
<li>
<a href="#content-caption-bottom">caption-bottom</a>
</li>
<li>
<a href="#content-border-collapse">border-collapse</a>
</li>
<li>
<a href="#content-border-separate">border-separate</a>
</li>
<li>
<a href="#content-origin-center">origin-center</a>
</li>
<li>
<a href="#content-origin-top">origin-top</a>
</li>
<li>
<a href="#content-origin-top-right">origin-top-right</a>
</li>
<li>
<a href="#content-origin-right">origin-right</a>
</li>
<li>
<a href="#content-origin-bottom-right">origin-bottom-right</a>
</li>
<li>
<a href="#content-origin-bottom">origin-bottom</a>
</li>
<li>
<a href="#content-origin-bottom-left">origin-bottom-left</a>
</li>
<li>
<a href="#content-origin-left">origin-left</a>
</li>
<li>
<a href="#content-origin-top-left">origin-top-left</a>
</li>
<li>
<a href="#content-perspective-origin-center">perspective-origin-center</a>
</li>
<li>
<a href="#content-perspective-origin-top">perspective-origin-top</a>
</li>
<li>
<a href="#content-perspective-origin-top-right">perspective-origin-top-right</a>
</li>
<li>
<a href="#content-perspective-origin-right">perspective-origin-right</a>
</li>
<li>
<a href="#content-perspective-origin-bottom-right">perspective-origin-bottom-right</a>
</li>
<li>
<a href="#content-perspective-origin-bottom">perspective-origin-bottom</a>
</li>
<li>
<a href="#content-perspective-origin-bottom-left">perspective-origin-bottom-left</a>
</li>
<li>
<a href="#content-perspective-origin-left">perspective-origin-left</a>
</li>
<li>
<a href="#content-perspective-origin-top-left">perspective-origin-top-left</a>
</li>
<li>
<a href="#content-perspective-none">perspective-none</a>
</li>
<li>
<a href="#content-translate-none">translate-none</a>
</li>
<li>
<a href="#content-transform-none">transform-none</a>
</li>
<li>
<a href="#content-transform-flat">transform-flat</a>
</li>
<li>
<a href="#content-transform-3d">transform-3d</a>
</li>
<li>
<a href="#content-transform-content">transform-content</a>
</li>
<li>
<a href="#content-transform-border">transform-border</a>
</li>
<li>
<a href="#content-transform-fill">transform-fill</a>
</li>
<li>
<a href="#content-transform-stroke">transform-stroke</a>
</li>
<li>
<a href="#content-transform-view">transform-view</a>
</li>
<li>
<a href="#content-backface-visible">backface-visible</a>
</li>
<li>
<a href="#content-backface-hidden">backface-hidden</a>
</li>
<li>
<a href="#content-resize-none">resize-none</a>
</li>
<li>
<a href="#content-resize-both">resize-both</a>
</li>
<li>
<a href="#content-resize-x">resize-x</a>
</li>
<li>
<a href="#content-resize-y">resize-y</a>
</li>
<li>
<a href="#content-snap-none">snap-none</a>
</li>
<li>
<a href="#content-snap-align-none">snap-align-none</a>
</li>
<li>
<a href="#content-snap-start">snap-start</a>
</li>
<li>
<a href="#content-snap-end">snap-end</a>
</li>
<li>
<a href="#content-snap-center">snap-center</a>
</li>
<li>
<a href="#content-snap-normal">snap-normal</a>
</li>
<li>
<a href="#content-snap-always">snap-always</a>
</li>
<li>
<a href="#content-list-inside">list-inside</a>
</li>
<li>
<a href="#content-list-outside">list-outside</a>
</li>
<li>
<a href="#content-list-none">list-none</a>
</li>
<li>
<a href="#content-list-disc">list-disc</a>
</li>
<li>
<a href="#content-list-decimal">list-decimal</a>
</li>
<li>
<a href="#content-list-image-none">list-image-none</a>
</li>
<li>
<a href="#content-appearance-none">appearance-none</a>
</li>
<li>
<a href="#content-appearance-auto">appearance-auto</a>
</li>
<li>
<a href="#content-columns-auto">columns-auto</a>
</li>
<li>
<a href="#content-grid-flow-row">grid-flow-row</a>
</li>
<li>
<a href="#content-grid-flow-col">grid-flow-col</a>
</li>
<li>
<a href="#content-grid-flow-dense">grid-flow-dense</a>
</li>
<li>
<a href="#content-grid-flow-row-dense">grid-flow-row-dense</a>
</li>
<li>
<a href="#content-grid-flow-col-dense">grid-flow-col-dense</a>
</li>
<li>
<a href="#content-auto-cols-auto">auto-cols-auto</a>
</li>
<li>
<a href="#content-auto-cols-min">auto-cols-min</a>
</li>
<li>
<a href="#content-auto-cols-max">auto-cols-max</a>
</li>
<li>
<a href="#content-auto-cols-fr">auto-cols-fr</a>
</li>
<li>
<a href="#content-auto-rows-auto">auto-rows-auto</a>
</li>
<li>
<a href="#content-auto-rows-min">auto-rows-min</a>
</li>
<li>
<a href="#content-auto-rows-max">auto-rows-max</a>
</li>
<li>
<a href="#content-auto-rows-fr">auto-rows-fr</a>
</li>
<li>
<a href="#content-grid-cols-none">grid-cols-none</a>
</li>
<li>
<a href="#content-grid-cols-subgrid">grid-cols-subgrid</a>
</li>
<li>
<a href="#content-grid-rows-none">grid-rows-none</a>
</li>
<li>
<a href="#content-grid-rows-subgrid">grid-rows-subgrid</a>
</li>
<li>
<a href="#content-flex-row">flex-row</a>
</li>
<li>
<a href="#content-flex-row-reverse">flex-row-reverse</a>
</li>
<li>
<a href="#content-flex-col">flex-col</a>
</li>
<li>
<a href="#content-flex-col-reverse">flex-col-reverse</a>
</li>
<li>
<a href="#content-flex-wrap">flex-wrap</a>
</li>
<li>
<a href="#content-flex-nowrap">flex-nowrap</a>
</li>
<li>
<a href="#content-flex-wrap-reverse">flex-wrap-reverse</a>
</li>
<li>
<a href="#content-content-normal">content-normal</a>
</li>
<li>
<a href="#content-content-center">content-center</a>
</li>
<li>
<a href="#content-content-start">content-start</a>
</li>
<li>
<a href="#content-content-end">content-end</a>
</li>
<li>
<a href="#content-content-between">content-between</a>
</li>
<li>
<a href="#content-content-around">content-around</a>
</li>
<li>
<a href="#content-content-evenly">content-evenly</a>
</li>
<li>
<a href="#content-content-baseline">content-baseline</a>
</li>
<li>
<a href="#content-content-stretch">content-stretch</a>
</li>
<li>
<a href="#content-items-center">items-center</a>
</li>
<li>
<a href="#content-items-start">items-start</a>
</li>
<li>
<a href="#content-items-end">items-end</a>
</li>
<li>
<a href="#content-items-baseline">items-baseline</a>
</li>
<li>
<a href="#content-items-stretch">items-stretch</a>
</li>
<li>
<a href="#content-justify-normal">justify-normal</a>
</li>
<li>
<a href="#content-justify-center">justify-center</a>
</li>
<li>
<a href="#content-justify-start">justify-start</a>
</li>
<li>
<a href="#content-justify-end">justify-end</a>
</li>
<li>
<a href="#content-justify-between">justify-between</a>
</li>
<li>
<a href="#content-justify-around">justify-around</a>
</li>
<li>
<a href="#content-justify-evenly">justify-evenly</a>
</li>
<li>
<a href="#content-justify-baseline">justify-baseline</a>
</li>
<li>
<a href="#content-justify-stretch">justify-stretch</a>
</li>
<li>
<a href="#content-justify-items-normal">justify-items-normal</a>
</li>
<li>
<a href="#content-justify-items-center">justify-items-center</a>
</li>
<li>
<a href="#content-justify-items-start">justify-items-start</a>
</li>
<li>
<a href="#content-justify-items-end">justify-items-end</a>
</li>
<li>
<a href="#content-justify-items-stretch">justify-items-stretch</a>
</li>
<li>
<a href="#content-place-self-auto">place-self-auto</a>
</li>
<li>
<a href="#content-place-self-start">place-self-start</a>
</li>
<li>
<a href="#content-place-self-end">place-self-end</a>
</li>
<li>
<a href="#content-place-self-center">place-self-center</a>
</li>
<li>
<a href="#content-place-self-stretch">place-self-stretch</a>
</li>
<li>
<a href="#content-self-auto">self-auto</a>
</li>
<li>
<a href="#content-self-start">self-start</a>
</li>
<li>
<a href="#content-self-end">self-end</a>
</li>
<li>
<a href="#content-self-center">self-center</a>
</li>
<li>
<a href="#content-self-stretch">self-stretch</a>
</li>
<li>
<a href="#content-self-baseline">self-baseline</a>
</li>
<li>
<a href="#content-justify-self-auto">justify-self-auto</a>
</li>
<li>
<a href="#content-justify-self-start">justify-self-start</a>
</li>
<li>
<a href="#content-justify-self-end">justify-self-end</a>
</li>
<li>
<a href="#content-justify-self-center">justify-self-center</a>
</li>
<li>
<a href="#content-justify-self-stretch">justify-self-stretch</a>
</li>
<li>
<a href="#content-scroll-auto">scroll-auto</a>
</li>
<li>
<a href="#content-scroll-smooth">scroll-smooth</a>
</li>
<li>
<a href="#content-text-ellipsis">text-ellipsis</a>
</li>
<li>
<a href="#content-text-clip">text-clip</a>
</li>
<li>
<a href="#content-whitespace-normal">whitespace-normal</a>
</li>
<li>
<a href="#content-whitespace-nowrap">whitespace-nowrap</a>
</li>
<li>
<a href="#content-whitespace-pre">whitespace-pre</a>
</li>
<li>
<a href="#content-whitespace-pre-line">whitespace-pre-line</a>
</li>
<li>
<a href="#content-whitespace-pre-wrap">whitespace-pre-wrap</a>
</li>
<li>
<a href="#content-whitespace-break-spaces">whitespace-break-spaces</a>
</li>
<li>
<a href="#content-text-wrap">text-wrap</a>
</li>
<li>
<a href="#content-text-nowrap">text-nowrap</a>
</li>
<li>
<a href="#content-text-balance">text-balance</a>
</li>
<li>
<a href="#content-text-pretty">text-pretty</a>
</li>
<li>
<a href="#content-break-words">break-words</a>
</li>
<li>
<a href="#content-break-all">break-all</a>
</li>
<li>
<a href="#content-break-keep">break-keep</a>
</li>
<li>
<a href="#content-via-none">via-none</a>
</li>
<li>
<a href="#content-bg-clip-text">bg-clip-text</a>
</li>
<li>
<a href="#content-bg-clip-border">bg-clip-border</a>
</li>
<li>
<a href="#content-bg-clip-padding">bg-clip-padding</a>
</li>
<li>
<a href="#content-bg-clip-content">bg-clip-content</a>
</li>
<li>
<a href="#content-bg-origin-border">bg-origin-border</a>
</li>
<li>
<a href="#content-bg-origin-padding">bg-origin-padding</a>
</li>
<li>
<a href="#content-bg-origin-content">bg-origin-content</a>
</li>
<li>
<a href="#content-mix-blend-plus-darker">mix-blend-plus-darker</a>
</li>
<li>
<a href="#content-mix-blend-plus-lighter">mix-blend-plus-lighter</a>
</li>
<li>
<a href="#content-stroke-none">stroke-none</a>
</li>
<li>
<a href="#content-object-contain">object-contain</a>
</li>
<li>
<a href="#content-object-cover">object-cover</a>
</li>
<li>
<a href="#content-object-fill">object-fill</a>
</li>
<li>
<a href="#content-object-none">object-none</a>
</li>
<li>
<a href="#content-object-scale-down">object-scale-down</a>
</li>
<li>
<a href="#content-object-bottom">object-bottom</a>
</li>
<li>
<a href="#content-object-center">object-center</a>
</li>
<li>
<a href="#content-object-left">object-left</a>
</li>
<li>
<a href="#content-object-left-bottom">object-left-bottom</a>
</li>
<li>
<a href="#content-object-left-top">object-left-top</a>
</li>
<li>
<a href="#content-object-right">object-right</a>
</li>
<li>
<a href="#content-object-right-bottom">object-right-bottom</a>
</li>
<li>
<a href="#content-object-right-top">object-right-top</a>
</li>
<li>
<a href="#content-object-top">object-top</a>
</li>
<li>
<a href="#content-text-left">text-left</a>
</li>
<li>
<a href="#content-text-center">text-center</a>
</li>
<li>
<a href="#content-text-right">text-right</a>
</li>
<li>
<a href="#content-text-justify">text-justify</a>
</li>
<li>
<a href="#content-text-start">text-start</a>
</li>
<li>
<a href="#content-text-end">text-end</a>
</li>
<li>
<a href="#content-align-baseline">align-baseline</a>
</li>
<li>
<a href="#content-align-top">align-top</a>
</li>
<li>
<a href="#content-align-middle">align-middle</a>
</li>
<li>
<a href="#content-align-bottom">align-bottom</a>
</li>
<li>
<a href="#content-align-text-top">align-text-top</a>
</li>
<li>
<a href="#content-align-text-bottom">align-text-bottom</a>
</li>
<li>
<a href="#content-align-sub">align-sub</a>
</li>
<li>
<a href="#content-align-super">align-super</a>
</li>
<li>
<a href="#content-uppercase">uppercase</a>
</li>
<li>
<a href="#content-lowercase">lowercase</a>
</li>
<li>
<a href="#content-capitalize">capitalize</a>
</li>
<li>
<a href="#content-normal-case">normal-case</a>
</li>
<li>
<a href="#content-italic">italic</a>
</li>
<li>
<a href="#content-not-italic">not-italic</a>
</li>
<li>
<a href="#content-underline">underline</a>
</li>
<li>
<a href="#content-overline">overline</a>
</li>
<li>
<a href="#content-line-through">line-through</a>
</li>
<li>
<a href="#content-no-underline">no-underline</a>
</li>
<li>
<a href="#content-font-stretch-normal">font-stretch-normal</a>
</li>
<li>
<a href="#content-font-stretch-ultra-condensed">font-stretch-ultra-condensed</a>
</li>
<li>
<a href="#content-font-stretch-extra-condensed">font-stretch-extra-condensed</a>
</li>
<li>
<a href="#content-font-stretch-condensed">font-stretch-condensed</a>
</li>
<li>
<a href="#content-font-stretch-semi-condensed">font-stretch-semi-condensed</a>
</li>
<li>
<a href="#content-font-stretch-semi-expanded">font-stretch-semi-expanded</a>
</li>
<li>
<a href="#content-font-stretch-expanded">font-stretch-expanded</a>
</li>
<li>
<a href="#content-font-stretch-extra-expanded">font-stretch-extra-expanded</a>
</li>
<li>
<a href="#content-font-stretch-ultra-expanded">font-stretch-ultra-expanded</a>
</li>
<li>
<a href="#content-decoration-solid">decoration-solid</a>
</li>
<li>
<a href="#content-decoration-double">decoration-double</a>
</li>
<li>
<a href="#content-decoration-dotted">decoration-dotted</a>
</li>
<li>
<a href="#content-decoration-dashed">decoration-dashed</a>
</li>
<li>
<a href="#content-decoration-wavy">decoration-wavy</a>
</li>
<li>
<a href="#content-decoration-auto">decoration-auto</a>
</li>
<li>
<a href="#content-decoration-from-font">decoration-from-font</a>
</li>
<li>
<a href="#content-animate-none">animate-none</a>
</li>
<li>
<a href="#content-will-change-auto">will-change-auto</a>
</li>
<li>
<a href="#content-will-change-scroll">will-change-scroll</a>
</li>
<li>
<a href="#content-will-change-contents">will-change-contents</a>
</li>
<li>
<a href="#content-will-change-transform">will-change-transform</a>
</li>
<li>
<a href="#content-contain-none">contain-none</a>
</li>
<li>
<a href="#content-contain-content">contain-content</a>
</li>
<li>
<a href="#content-contain-strict">contain-strict</a>
</li>
<li>
<a href="#content-forced-color-adjust-none">forced-color-adjust-none</a>
</li>
<li>
<a href="#content-forced-color-adjust-auto">forced-color-adjust-auto</a>
</li>
<li>
<a href="#content-normal-nums">normal-nums</a>
</li>
<li>
<a href="#content-underline-offset-auto">underline-offset-auto</a>
</li>
<li>
<a href="#content-touch-none">touch-none</a>
</li>
<li>
<a href="#content-touch-auto">touch-auto</a>
</li>
<li>
<a href="#content-touch-pan-x">touch-pan-x</a>
</li>
<li>
<a href="#content-cursor-auto">cursor-auto</a>
</li>
<li>
<a href="#content-cursor-default">cursor-default</a>
</li>
<li>
<a href="#content-select-none">select-none</a>
</li>
<li>
<a href="#content-select-text">select-text</a>
</li>
<li>
<a href="#content-rotate-0">rotate-0</a>
</li>
<li>
<a href="#content-rotate-90">rotate-90</a>
</li>
<li>
<a href="#content-border-inherit">border-inherit</a>
</li>
<li>
<a href="#content-border-current">border-current</a>
</li>
<li>
<a href="#content-border-transparent">border-transparent</a>
</li>
<li>
<a href="#content-border-x-black">border-x-black</a>
</li>
<li>
<a href="#content-border-black">border-black</a>
</li>
<li>
<a href="#content-border-white">border-white</a>
</li>
<li>
<a href="#content-border-slate-50">border-slate-50</a>
</li>
<li>
<a href="#content-border-slate-100">border-slate-100</a>
</li>
<li>
<a href="#content-border-slate-200">border-slate-200</a>
</li>
<li>
<a href="#content-border-slate-300">border-slate-300</a>
</li>
<li>
<a href="#content-border-slate-400">border-slate-400</a>
</li>
<li>
<a href="#content-border-slate-500">border-slate-500</a>
</li>
<li>
<a href="#content-border-slate-600">border-slate-600</a>
</li>
<li>
<a href="#content-border-slate-700">border-slate-700</a>
</li>
<li>
<a href="#content-border-slate-800">border-slate-800</a>
</li>
<li>
<a href="#content-border-slate-900">border-slate-900</a>
</li>
<li>
<a href="#content-border-slate-950">border-slate-950</a>
</li>
<li>
<a href="#content-border-gray-50">border-gray-50</a>
</li>
<li>
<a href="#content-border-gray-100">border-gray-100</a>
</li>
<li>
<a href="#content-border-gray-200">border-gray-200</a>
</li>
<li>
<a href="#content-border-gray-300">border-gray-300</a>
</li>
<li>
<a href="#content-border-gray-400">border-gray-400</a>
</li>
<li>
<a href="#content-border-gray-500">border-gray-500</a>
</li>
<li>
<a href="#content-border-gray-600">border-gray-600</a>
</li>
<li>
<a href="#content-border-gray-700">border-gray-700</a>
</li>
<li>
<a href="#content-border-gray-800">border-gray-800</a>
</li>
<li>
<a href="#content-border-gray-900">border-gray-900</a>
</li>
<li>
<a href="#content-border-gray-950">border-gray-950</a>
</li>
<li>
<a href="#content-border-zinc-50">border-zinc-50</a>
</li>
<li>
<a href="#content-border-zinc-100">border-zinc-100</a>
</li>
<li>
<a href="#content-border-zinc-200">border-zinc-200</a>
</li>
<li>
<a href="#content-border-zinc-300">border-zinc-300</a>
</li>
<li>
<a href="#content-border-zinc-400">border-zinc-400</a>
</li>
<li>
<a href="#content-border-zinc-500">border-zinc-500</a>
</li>
<li>
<a href="#content-border-zinc-600">border-zinc-600</a>
</li>
<li>
<a href="#content-border-zinc-700">border-zinc-700</a>
</li>
<li>
<a href="#content-border-zinc-800">border-zinc-800</a>
</li>
<li>
<a href="#content-border-zinc-900">border-zinc-900</a>
</li>
<li>
<a href="#content-border-zinc-950">border-zinc-950</a>
</li>
<li>
<a href="#content-border-neutral-50">border-neutral-50</a>
</li>
<li>
<a href="#content-border-neutral-100">border-neutral-100</a>
</li>
<li>
<a href="#content-border-neutral-200">border-neutral-200</a>
</li>
<li>
<a href="#content-border-neutral-300">border-neutral-300</a>
</li>
<li>
<a href="#content-border-neutral-400">border-neutral-400</a>
</li>
<li>
<a href="#content-border-neutral-500">border-neutral-500</a>
</li>
<li>
<a href="#content-border-neutral-600">border-neutral-600</a>
</li>
<li>
<a href="#content-border-neutral-700">border-neutral-700</a>
</li>
<li>
<a href="#content-border-neutral-800">border-neutral-800</a>
</li>
<li>
<a href="#content-border-neutral-900">border-neutral-900</a>
</li>
<li>
<a href="#content-border-neutral-950">border-neutral-950</a>
</li>
<li>
<a href="#content-border-stone-50">border-stone-50</a>
</li>
<li>
<a href="#content-border-stone-100">border-stone-100</a>
</li>
<li>
<a href="#content-border-stone-200">border-stone-200</a>
</li>
<li>
<a href="#content-border-stone-300">border-stone-300</a>
</li>
<li>
<a href="#content-border-stone-400">border-stone-400</a>
</li>
<li>
<a href="#content-border-stone-500">border-stone-500</a>
</li>
<li>
<a href="#content-border-stone-600">border-stone-600</a>
</li>
<li>
<a href="#content-border-stone-700">border-stone-700</a>
</li>
<li>
<a href="#content-border-stone-800">border-stone-800</a>
</li>
<li>
<a href="#content-border-stone-900">border-stone-900</a>
</li>
<li>
<a href="#content-border-stone-950">border-stone-950</a>
</li>
<li>
<a href="#content-border-red-50">border-red-50</a>
</li>
<li>
<a href="#content-border-red-100">border-red-100</a>
</li>
<li>
<a href="#content-border-red-200">border-red-200</a>
</li>
<li>
<a href="#content-border-red-300">border-red-300</a>
</li>
<li>
<a href="#content-border-red-400">border-red-400</a>
</li>
<li>
<a href="#content-border-red-500">border-red-500</a>
</li>
<li>
<a href="#content-border-red-600">border-red-600</a>
</li>
<li>
<a href="#content-border-red-700">border-red-700</a>
</li>
<li>
<a href="#content-border-red-800">border-red-800</a>
</li>
<li>
<a href="#content-border-red-900">border-red-900</a>
</li>
<li>
<a href="#content-border-red-950">border-red-950</a>
</li>
<li>
<a href="#content-border-orange-50">border-orange-50</a>
</li>
<li>
<a href="#content-border-orange-100">border-orange-100</a>
</li>
<li>
<a href="#content-border-orange-200">border-orange-200</a>
</li>
<li>
<a href="#content-border-orange-300">border-orange-300</a>
</li>
<li>
<a href="#content-border-orange-400">border-orange-400</a>
</li>
<li>
<a href="#content-border-orange-500">border-orange-500</a>
</li>
<li>
<a href="#content-border-orange-600">border-orange-600</a>
</li>
<li>
<a href="#content-border-orange-700">border-orange-700</a>
</li>
<li>
<a href="#content-border-orange-800">border-orange-800</a>
</li>
<li>
<a href="#content-border-orange-900">border-orange-900</a>
</li>
<li>
<a href="#content-border-orange-950">border-orange-950</a>
</li>
<li>
<a href="#content-border-amber-50">border-amber-50</a>
</li>
<li>
<a href="#content-border-amber-100">border-amber-100</a>
</li>
<li>
<a href="#content-border-amber-200">border-amber-200</a>
</li>
<li>
<a href="#content-border-amber-300">border-amber-300</a>
</li>
<li>
<a href="#content-border-amber-400">border-amber-400</a>
</li>
<li>
<a href="#content-border-amber-500">border-amber-500</a>
</li>
<li>
<a href="#content-border-amber-600">border-amber-600</a>
</li>
<li>
<a href="#content-border-amber-700">border-amber-700</a>
</li>
<li>
<a href="#content-border-amber-800">border-amber-800</a>
</li>
<li>
<a href="#content-border-amber-900">border-amber-900</a>
</li>
<li>
<a href="#content-border-amber-950">border-amber-950</a>
</li>
<li>
<a href="#content-border-yellow-50">border-yellow-50</a>
</li>
<li>
<a href="#content-border-yellow-100">border-yellow-100</a>
</li>
<li>
<a href="#content-border-yellow-200">border-yellow-200</a>
</li>
<li>
<a href="#content-border-yellow-300">border-yellow-300</a>
</li>
<li>
<a href="#content-border-yellow-400">border-yellow-400</a>
</li>
<li>
<a href="#content-border-yellow-500">border-yellow-500</a>
</li>
<li>
<a href="#content-border-yellow-600">border-yellow-600</a>
</li>
<li>
<a href="#content-border-yellow-700">border-yellow-700</a>
</li>
<li>
<a href="#content-border-yellow-800">border-yellow-800</a>
</li>
<li>
<a href="#content-border-yellow-900">border-yellow-900</a>
</li>
<li>
<a href="#content-border-yellow-950">border-yellow-950</a>
</li>
<li>
<a href="#content-border-lime-50">border-lime-50</a>
</li>
<li>
<a href="#content-border-lime-100">border-lime-100</a>
</li>
<li>
<a href="#content-border-lime-200">border-lime-200</a>
</li>
<li>
<a href="#content-border-lime-300">border-lime-300</a>
</li>
<li>
<a href="#content-border-lime-400">border-lime-400</a>
</li>
<li>
<a href="#content-border-lime-500">border-lime-500</a>
</li>
<li>
<a href="#content-border-lime-600">border-lime-600</a>
</li>
<li>
<a href="#content-border-lime-700">border-lime-700</a>
</li>
<li>
<a href="#content-border-lime-800">border-lime-800</a>
</li>
<li>
<a href="#content-border-lime-900">border-lime-900</a>
</li>
<li>
<a href="#content-border-lime-950">border-lime-950</a>
</li>
<li>
<a href="#content-border-green-50">border-green-50</a>
</li>
<li>
<a href="#content-border-green-100">border-green-100</a>
</li>
<li>
<a href="#content-border-green-200">border-green-200</a>
</li>
<li>
<a href="#content-border-green-300">border-green-300</a>
</li>
<li>
<a href="#content-border-green-400">border-green-400</a>
</li>
<li>
<a href="#content-border-green-500">border-green-500</a>
</li>
<li>
<a href="#content-border-green-600">border-green-600</a>
</li>
<li>
<a href="#content-border-green-700">border-green-700</a>
</li>
<li>
<a href="#content-border-green-800">border-green-800</a>
</li>
<li>
<a href="#content-border-green-900">border-green-900</a>
</li>
<li>
<a href="#content-border-green-950">border-green-950</a>
</li>
<li>
<a href="#content-border-emerald-50">border-emerald-50</a>
</li>
<li>
<a href="#content-border-emerald-100">border-emerald-100</a>
</li>
<li>
<a href="#content-border-emerald-200">border-emerald-200</a>
</li>
<li>
<a href="#content-border-emerald-300">border-emerald-300</a>
</li>
<li>
<a href="#content-border-emerald-400">border-emerald-400</a>
</li>
<li>
<a href="#content-border-emerald-500">border-emerald-500</a>
</li>
<li>
<a href="#content-border-emerald-600">border-emerald-600</a>
</li>
<li>
<a href="#content-border-emerald-700">border-emerald-700</a>
</li>
<li>
<a href="#content-border-emerald-800">border-emerald-800</a>
</li>
<li>
<a href="#content-border-emerald-900">border-emerald-900</a>
</li>
<li>
<a href="#content-border-emerald-950">border-emerald-950</a>
</li>
<li>
<a href="#content-border-teal-50">border-teal-50</a>
</li>
<li>
<a href="#content-border-teal-100">border-teal-100</a>
</li>
<li>
<a href="#content-border-teal-200">border-teal-200</a>
</li>
<li>
<a href="#content-border-teal-300">border-teal-300</a>
</li>
<li>
<a href="#content-border-teal-400">border-teal-400</a>
</li>
<li>
<a href="#content-border-teal-500">border-teal-500</a>
</li>
<li>
<a href="#content-border-teal-600">border-teal-600</a>
</li>
<li>
<a href="#content-border-teal-700">border-teal-700</a>
</li>
<li>
<a href="#content-border-teal-800">border-teal-800</a>
</li>
<li>
<a href="#content-border-teal-900">border-teal-900</a>
</li>
<li>
<a href="#content-border-teal-950">border-teal-950</a>
</li>
<li>
<a href="#content-border-cyan-50">border-cyan-50</a>
</li>
<li>
<a href="#content-border-cyan-100">border-cyan-100</a>
</li>
<li>
<a href="#content-border-cyan-200">border-cyan-200</a>
</li>
<li>
<a href="#content-border-cyan-300">border-cyan-300</a>
</li>
<li>
<a href="#content-border-cyan-400">border-cyan-400</a>
</li>
<li>
<a href="#content-border-cyan-500">border-cyan-500</a>
</li>
<li>
<a href="#content-border-cyan-600">border-cyan-600</a>
</li>
<li>
<a href="#content-border-cyan-700">border-cyan-700</a>
</li>
<li>
<a href="#content-border-cyan-800">border-cyan-800</a>
</li>
<li>
<a href="#content-border-cyan-900">border-cyan-900</a>
</li>
<li>
<a href="#content-border-cyan-950">border-cyan-950</a>
</li>
<li>
<a href="#content-border-sky-50">border-sky-50</a>
</li>
<li>
<a href="#content-border-sky-100">border-sky-100</a>
</li>
<li>
<a href="#content-border-sky-200">border-sky-200</a>
</li>
<li>
<a href="#content-border-sky-300">border-sky-300</a>
</li>
<li>
<a href="#content-border-sky-400">border-sky-400</a>
</li>
<li>
<a href="#content-border-sky-500">border-sky-500</a>
</li>
<li>
<a href="#content-border-sky-600">border-sky-600</a>
</li>
<li>
<a href="#content-border-sky-700">border-sky-700</a>
</li>
<li>
<a href="#content-border-sky-800">border-sky-800</a>
</li>
<li>
<a href="#content-border-sky-900">border-sky-900</a>
</li>
<li>
<a href="#content-border-sky-950">border-sky-950</a>
</li>
<li>
<a href="#content-border-blue-50">border-blue-50</a>
</li>
<li>
<a href="#content-border-blue-100">border-blue-100</a>
</li>
<li>
<a href="#content-border-blue-200">border-blue-200</a>
</li>
<li>
<a href="#content-border-blue-300">border-blue-300</a>
</li>
<li>
<a href="#content-border-blue-400">border-blue-400</a>
</li>
<li>
<a href="#content-border-blue-500">border-blue-500</a>
</li>
<li>
<a href="#content-border-blue-600">border-blue-600</a>
</li>
<li>
<a href="#content-border-blue-700">border-blue-700</a>
</li>
<li>
<a href="#content-border-blue-800">border-blue-800</a>
</li>
<li>
<a href="#content-border-blue-900">border-blue-900</a>
</li>
<li>
<a href="#content-border-blue-950">border-blue-950</a>
</li>
<li>
<a href="#content-border-indigo-50">border-indigo-50</a>
</li>
<li>
<a href="#content-border-indigo-100">border-indigo-100</a>
</li>
<li>
<a href="#content-border-indigo-200">border-indigo-200</a>
</li>
<li>
<a href="#content-border-indigo-300">border-indigo-300</a>
</li>
<li>
<a href="#content-border-indigo-400">border-indigo-400</a>
</li>
<li>
<a href="#content-border-indigo-500">border-indigo-500</a>
</li>
<li>
<a href="#content-border-indigo-600">border-indigo-600</a>
</li>
<li>
<a href="#content-border-indigo-700">border-indigo-700</a>
</li>
<li>
<a href="#content-border-indigo-800">border-indigo-800</a>
</li>
<li>
<a href="#content-border-indigo-900">border-indigo-900</a>
</li>
<li>
<a href="#content-border-indigo-950">border-indigo-950</a>
</li>
<li>
<a href="#content-border-violet-50">border-violet-50</a>
</li>
<li>
<a href="#content-border-violet-100">border-violet-100</a>
</li>
<li>
<a href="#content-border-violet-200">border-violet-200</a>
</li>
<li>
<a href="#content-border-violet-300">border-violet-300</a>
</li>
<li>
<a href="#content-border-violet-400">border-violet-400</a>
</li>
<li>
<a href="#content-border-violet-500">border-violet-500</a>
</li>
<li>
<a href="#content-border-violet-600">border-violet-600</a>
</li>
<li>
<a href="#content-border-violet-700">border-violet-700</a>
</li>
<li>
<a href="#content-border-violet-800">border-violet-800</a>
</li>
<li>
<a href="#content-border-violet-900">border-violet-900</a>
</li>
<li>
<a href="#content-border-violet-950">border-violet-950</a>
</li>
<li>
<a href="#content-border-purple-50">border-purple-50</a>
</li>
<li>
<a href="#content-border-purple-100">border-purple-100</a>
</li>
<li>
<a href="#content-border-purple-200">border-purple-200</a>
</li>
<li>
<a href="#content-border-purple-300">border-purple-300</a>
</li>
<li>
<a href="#content-border-purple-400">border-purple-400</a>
</li>
<li>
<a href="#content-border-purple-500">border-purple-500</a>
</li>
<li>
<a href="#content-border-purple-600">border-purple-600</a>
</li>
<li>
<a href="#content-border-purple-700">border-purple-700</a>
</li>
<li>
<a href="#content-border-purple-800">border-purple-800</a>
</li>
<li>
<a href="#content-border-purple-900">border-purple-900</a>
</li>
<li>
<a href="#content-border-purple-950">border-purple-950</a>
</li>
<li>
<a href="#content-border-fuchsia-50">border-fuchsia-50</a>
</li>
<li>
<a href="#content-border-fuchsia-100">border-fuchsia-100</a>
</li>
<li>
<a href="#content-border-fuchsia-200">border-fuchsia-200</a>
</li>
<li>
<a href="#content-border-fuchsia-300">border-fuchsia-300</a>
</li>
<li>
<a href="#content-border-fuchsia-400">border-fuchsia-400</a>
</li>
<li>
<a href="#content-border-fuchsia-500">border-fuchsia-500</a>
</li>
<li>
<a href="#content-border-fuchsia-600">border-fuchsia-600</a>
</li>
<li>
<a href="#content-border-fuchsia-700">border-fuchsia-700</a>
</li>
<li>
<a href="#content-border-fuchsia-800">border-fuchsia-800</a>
</li>
<li>
<a href="#content-border-fuchsia-900">border-fuchsia-900</a>
</li>
<li>
<a href="#content-border-fuchsia-950">border-fuchsia-950</a>
</li>
<li>
<a href="#content-border-pink-50">border-pink-50</a>
</li>
<li>
<a href="#content-border-pink-100">border-pink-100</a>
</li>
<li>
<a href="#content-border-pink-200">border-pink-200</a>
</li>
<li>
<a href="#content-border-pink-300">border-pink-300</a>
</li>
<li>
<a href="#content-border-pink-400">border-pink-400</a>
</li>
<li>
<a href="#content-border-pink-500">border-pink-500</a>
</li>
<li>
<a href="#content-border-pink-600">border-pink-600</a>
</li>
<li>
<a href="#content-border-pink-700">border-pink-700</a>
</li>
<li>
<a href="#content-border-pink-800">border-pink-800</a>
</li>
<li>
<a href="#content-border-pink-900">border-pink-900</a>
</li>
<li>
<a href="#content-border-pink-950">border-pink-950</a>
</li>
<li>
<a href="#content-border-rose-50">border-rose-50</a>
</li>
<li>
<a href="#content-border-rose-100">border-rose-100</a>
</li>
<li>
<a href="#content-border-rose-200">border-rose-200</a>
</li>
<li>
<a href="#content-border-rose-300">border-rose-300</a>
</li>
<li>
<a href="#content-border-rose-400">border-rose-400</a>
</li>
<li>
<a href="#content-border-rose-500">border-rose-500</a>
</li>
<li>
<a href="#content-border-rose-600">border-rose-600</a>
</li>
<li>
<a href="#content-border-rose-700">border-rose-700</a>
</li>
<li>
<a href="#content-border-rose-800">border-rose-800</a>
</li>
<li>
<a href="#content-border-rose-900">border-rose-900</a>
</li>
<li>
<a href="#content-border-rose-950">border-rose-950</a>
</li>
<li>
<a href="#content-w-0">w-0</a>
</li>
<li>
<a href="#content-w-px">w-px</a>
</li>
<li>
<a href="#content-w-05">w-0.5</a>
</li>
<li>
<a href="#content-w-1">w-1</a>
</li>
<li>
<a href="#content-w-15">w-1.5</a>
</li>
<li>
<a href="#content-w-2">w-2</a>
</li>
<li>
<a href="#content-w-25">w-2.5</a>
</li>
<li>
<a href="#content-w-3">w-3</a>
</li>
<li>
<a href="#content-w-35">w-3.5</a>
</li>
<li>
<a href="#content-w-4">w-4</a>
</li>
<li>
<a href="#content-w-5">w-5</a>
</li>
<li>
<a href="#content-w-6">w-6</a>
</li>
<li>
<a href="#content-w-7">w-7</a>
</li>
<li>
<a href="#content-w-8">w-8</a>
</li>
<li>
<a href="#content-w-9">w-9</a>
</li>
<li>
<a href="#content-w-10">w-10</a>
</li>
<li>
<a href="#content-w-11">w-11</a>
</li>
<li>
<a href="#content-w-12">w-12</a>
</li>
<li>
<a href="#content-w-14">w-14</a>
</li>
<li>
<a href="#content-w-16">w-16</a>
</li>
<li>
<a href="#content-w-20">w-20</a>
</li>
<li>
<a href="#content-w-24">w-24</a>
</li>
<li>
<a href="#content-w-28">w-28</a>
</li>
<li>
<a href="#content-w-32">w-32</a>
</li>
<li>
<a href="#content-w-36">w-36</a>
</li>
<li>
<a href="#content-w-40">w-40</a>
</li>
<li>
<a href="#content-w-44">w-44</a>
</li>
<li>
<a href="#content-w-48">w-48</a>
</li>
<li>
<a href="#content-w-52">w-52</a>
</li>
<li>
<a href="#content-w-56">w-56</a>
</li>
<li>
<a href="#content-w-60">w-60</a>
</li>
<li>
<a href="#content-w-64">w-64</a>
</li>
<li>
<a href="#content-w-72">w-72</a>
</li>
<li>
<a href="#content-w-80">w-80</a>
</li>
<li>
<a href="#content-w-96">w-96</a>
</li>
<li>
<a href="#content-w-auto">w-auto</a>
</li>
<li>
<a href="#content-w-12-1">w-1/2</a>
</li>
<li>
<a href="#content-w-13">w-1/3</a>
</li>
<li>
<a href="#content-w-23">w-2/3</a>
</li>
<li>
<a href="#content-w-14-1">w-1/4</a>
</li>
<li>
<a href="#content-w-24-1">w-2/4</a>
</li>
<li>
<a href="#content-w-34">w-3/4</a>
</li>
<li>
<a href="#content-w-15-1">w-1/5</a>
</li>
<li>
<a href="#content-w-25-1">w-2/5</a>
</li>
<li>
<a href="#content-w-35-1">w-3/5</a>
</li>
<li>
<a href="#content-w-45">w-4/5</a>
</li>
<li>
<a href="#content-w-16-1">w-1/6</a>
</li>
<li>
<a href="#content-w-26">w-2/6</a>
</li>
<li>
<a href="#content-w-36-1">w-3/6</a>
</li>
<li>
<a href="#content-w-46">w-4/6</a>
</li>
<li>
<a href="#content-w-56-1">w-5/6</a>
</li>
<li>
<a href="#content-w-112">w-1/12</a>
</li>
<li>
<a href="#content-w-212">w-2/12</a>
</li>
<li>
<a href="#content-w-312">w-3/12</a>
</li>
<li>
<a href="#content-w-412">w-4/12</a>
</li>
<li>
<a href="#content-w-512">w-5/12</a>
</li>
<li>
<a href="#content-w-612">w-6/12</a>
</li>
<li>
<a href="#content-w-712">w-7/12</a>
</li>
<li>
<a href="#content-w-812">w-8/12</a>
</li>
<li>
<a href="#content-w-912">w-9/12</a>
</li>
<li>
<a href="#content-w-1012">w-10/12</a>
</li>
<li>
<a href="#content-w-1112">w-11/12</a>
</li>
<li>
<a href="#content-w-full">w-full</a>
</li>
<li>
<a href="#content-w-screen">w-screen</a>
</li>
<li>
<a href="#content-w-svw">w-svw</a>
</li>
<li>
<a href="#content-w-lvw">w-lvw</a>
</li>
<li>
<a href="#content-w-dvw">w-dvw</a>
</li>
<li>
<a href="#content-w-min">w-min</a>
</li>
<li>
<a href="#content-w-max">w-max</a>
</li>
<li>
<a href="#content-w-fit">w-fit</a>
</li>
<li>
<a href="#content-h-0">h-0</a>
</li>
<li>
<a href="#content-h-px">h-px</a>
</li>
<li>
<a href="#content-h-05">h-0.5</a>
</li>
<li>
<a href="#content-h-1">h-1</a>
</li>
<li>
<a href="#content-h-15">h-1.5</a>
</li>
<li>
<a href="#content-h-2">h-2</a>
</li>
<li>
<a href="#content-h-25">h-2.5</a>
</li>
<li>
<a href="#content-h-3">h-3</a>
</li>
<li>
<a href="#content-h-35">h-3.5</a>
</li>
<li>
<a href="#content-h-4">h-4</a>
</li>
<li>
<a href="#content-h-5">h-5</a>
</li>
<li>
<a href="#content-h-6">h-6</a>
</li>
<li>
<a href="#content-h-7">h-7</a>
</li>
<li>
<a href="#content-h-8">h-8</a>
</li>
<li>
<a href="#content-h-9">h-9</a>
</li>
<li>
<a href="#content-h-10">h-10</a>
</li>
<li>
<a href="#content-h-11">h-11</a>
</li>
<li>
<a href="#content-h-12">h-12</a>
</li>
<li>
<a href="#content-h-14">h-14</a>
</li>
<li>
<a href="#content-h-16">h-16</a>
</li>
<li>
<a href="#content-h-20">h-20</a>
</li>
<li>
<a href="#content-h-24">h-24</a>
</li>
<li>
<a href="#content-h-28">h-28</a>
</li>
<li>
<a href="#content-h-32">h-32</a>
</li>
<li>
<a href="#content-h-36">h-36</a>
</li>
<li>
<a href="#content-h-40">h-40</a>
</li>
<li>
<a href="#content-h-44">h-44</a>
</li>
<li>
<a href="#content-h-48">h-48</a>
</li>
<li>
<a href="#content-h-52">h-52</a>
</li>
<li>
<a href="#content-h-56">h-56</a>
</li>
<li>
<a href="#content-h-60">h-60</a>
</li>
<li>
<a href="#content-h-64">h-64</a>
</li>
<li>
<a href="#content-h-72">h-72</a>
</li>
<li>
<a href="#content-h-80">h-80</a>
</li>
<li>
<a href="#content-h-96">h-96</a>
</li>
<li>
<a href="#content-h-auto">h-auto</a>
</li>
<li>
<a href="#content-h-12-1">h-1/2</a>
</li>
<li>
<a href="#content-h-13">h-1/3</a>
</li>
<li>
<a href="#content-h-23">h-2/3</a>
</li>
<li>
<a href="#content-h-14-1">h-1/4</a>
</li>
<li>
<a href="#content-h-24-1">h-2/4</a>
</li>
<li>
<a href="#content-h-34">h-3/4</a>
</li>
<li>
<a href="#content-h-15-1">h-1/5</a>
</li>
<li>
<a href="#content-h-25-1">h-2/5</a>
</li>
<li>
<a href="#content-h-35-1">h-3/5</a>
</li>
<li>
<a href="#content-h-45">h-4/5</a>
</li>
<li>
<a href="#content-h-16-1">h-1/6</a>
</li>
<li>
<a href="#content-h-26">h-2/6</a>
</li>
<li>
<a href="#content-h-36-1">h-3/6</a>
</li>
<li>
<a href="#content-h-46">h-4/6</a>
</li>
<li>
<a href="#content-h-56-1">h-5/6</a>
</li>
<li>
<a href="#content-h-full">h-full</a>
</li>
<li>
<a href="#content-h-screen">h-screen</a>
</li>
<li>
<a href="#content-h-svh">h-svh</a>
</li>
<li>
<a href="#content-h-lvh">h-lvh</a>
</li>
<li>
<a href="#content-h-dvh">h-dvh</a>
</li>
<li>
<a href="#content-h-min">h-min</a>
</li>
<li>
<a href="#content-h-max">h-max</a>
</li>
<li>
<a href="#content-h-fit">h-fit</a>
</li>
<li>
<a href="#content-min-w-0">min-w-0</a>
</li>
<li>
<a href="#content-min-w-1">min-w-1</a>
</li>
<li>
<a href="#content-min-w-2">min-w-2</a>
</li>
<li>
<a href="#content-min-w-3">min-w-3</a>
</li>
<li>
<a href="#content-min-w-4">min-w-4</a>
</li>
<li>
<a href="#content-min-w-5">min-w-5</a>
</li>
<li>
<a href="#content-min-w-6">min-w-6</a>
</li>
<li>
<a href="#content-min-w-7">min-w-7</a>
</li>
<li>
<a href="#content-min-w-8">min-w-8</a>
</li>
<li>
<a href="#content-min-w-9">min-w-9</a>
</li>
<li>
<a href="#content-min-w-10">min-w-10</a>
</li>
<li>
<a href="#content-min-w-11">min-w-11</a>
</li>
<li>
<a href="#content-min-w-12">min-w-12</a>
</li>
<li>
<a href="#content-min-w-14">min-w-14</a>
</li>
<li>
<a href="#content-min-w-16">min-w-16</a>
</li>
<li>
<a href="#content-min-w-20">min-w-20</a>
</li>
<li>
<a href="#content-min-w-24">min-w-24</a>
</li>
<li>
<a href="#content-min-w-28">min-w-28</a>
</li>
<li>
<a href="#content-min-w-32">min-w-32</a>
</li>
<li>
<a href="#content-min-w-36">min-w-36</a>
</li>
<li>
<a href="#content-min-w-40">min-w-40</a>
</li>
<li>
<a href="#content-min-w-44">min-w-44</a>
</li>
<li>
<a href="#content-min-w-48">min-w-48</a>
</li>
<li>
<a href="#content-min-w-52">min-w-52</a>
</li>
<li>
<a href="#content-min-w-56">min-w-56</a>
</li>
<li>
<a href="#content-min-w-60">min-w-60</a>
</li>
<li>
<a href="#content-min-w-64">min-w-64</a>
</li>
<li>
<a href="#content-min-w-72">min-w-72</a>
</li>
<li>
<a href="#content-min-w-80">min-w-80</a>
</li>
<li>
<a href="#content-min-w-96">min-w-96</a>
</li>
<li>
<a href="#content-min-w-px">min-w-px</a>
</li>
<li>
<a href="#content-min-w-05">min-w-0.5</a>
</li>
<li>
<a href="#content-min-w-15">min-w-1.5</a>
</li>
<li>
<a href="#content-min-w-25">min-w-2.5</a>
</li>
<li>
<a href="#content-min-w-35">min-w-3.5</a>
</li>
<li>
<a href="#content-min-w-full">min-w-full</a>
</li>
<li>
<a href="#content-min-w-min">min-w-min</a>
</li>
<li>
<a href="#content-min-w-max">min-w-max</a>
</li>
<li>
<a href="#content-min-w-fit">min-w-fit</a>
</li>
<li>
<a href="#content-max-w-0">max-w-0</a>
</li>
<li>
<a href="#content-max-w-1">max-w-1</a>
</li>
<li>
<a href="#content-max-w-2">max-w-2</a>
</li>
<li>
<a href="#content-max-w-3">max-w-3</a>
</li>
<li>
<a href="#content-max-w-4">max-w-4</a>
</li>
<li>
<a href="#content-max-w-5">max-w-5</a>
</li>
<li>
<a href="#content-max-w-6">max-w-6</a>
</li>
<li>
<a href="#content-max-w-7">max-w-7</a>
</li>
<li>
<a href="#content-max-w-8">max-w-8</a>
</li>
<li>
<a href="#content-max-w-9">max-w-9</a>
</li>
<li>
<a href="#content-max-w-10">max-w-10</a>
</li>
<li>
<a href="#content-max-w-11">max-w-11</a>
</li>
<li>
<a href="#content-max-w-12">max-w-12</a>
</li>
<li>
<a href="#content-max-w-14">max-w-14</a>
</li>
<li>
<a href="#content-max-w-16">max-w-16</a>
</li>
<li>
<a href="#content-max-w-20">max-w-20</a>
</li>
<li>
<a href="#content-max-w-24">max-w-24</a>
</li>
<li>
<a href="#content-max-w-28">max-w-28</a>
</li>
<li>
<a href="#content-max-w-32">max-w-32</a>
</li>
<li>
<a href="#content-max-w-36">max-w-36</a>
</li>
<li>
<a href="#content-max-w-40">max-w-40</a>
</li>
<li>
<a href="#content-max-w-44">max-w-44</a>
</li>
<li>
<a href="#content-max-w-48">max-w-48</a>
</li>
<li>
<a href="#content-max-w-52">max-w-52</a>
</li>
<li>
<a href="#content-max-w-56">max-w-56</a>
</li>
<li>
<a href="#content-max-w-60">max-w-60</a>
</li>
<li>
<a href="#content-max-w-64">max-w-64</a>
</li>
<li>
<a href="#content-max-w-72">max-w-72</a>
</li>
<li>
<a href="#content-max-w-80">max-w-80</a>
</li>
<li>
<a href="#content-max-w-96">max-w-96</a>
</li>
<li>
<a href="#content-max-w-px">max-w-px</a>
</li>
<li>
<a href="#content-max-w-05">max-w-0.5</a>
</li>
<li>
<a href="#content-max-w-15">max-w-1.5</a>
</li>
<li>
<a href="#content-max-w-25">max-w-2.5</a>
</li>
<li>
<a href="#content-max-w-35">max-w-3.5</a>
</li>
<li>
<a href="#content-max-w-full">max-w-full</a>
</li>
<li>
<a href="#content-max-w-max">max-w-max</a>
</li>
<li>
<a href="#content-max-w-min">max-w-min</a>
</li>
<li>
<a href="#content-max-w-fit">max-w-fit</a>
</li>
<li>
<a href="#content-size-0">size-0</a>
</li>
<li>
<a href="#content-size-px">size-px</a>
</li>
<li>
<a href="#content-size-05">size-0.5</a>
</li>
<li>
<a href="#content-size-1">size-1</a>
</li>
<li>
<a href="#content-size-15">size-1.5</a>
</li>
<li>
<a href="#content-size-2">size-2</a>
</li>
<li>
<a href="#content-size-25">size-2.5</a>
</li>
<li>
<a href="#content-size-3">size-3</a>
</li>
<li>
<a href="#content-size-35">size-3.5</a>
</li>
<li>
<a href="#content-size-4">size-4</a>
</li>
<li>
<a href="#content-size-5">size-5</a>
</li>
<li>
<a href="#content-size-6">size-6</a>
</li>
<li>
<a href="#content-size-7">size-7</a>
</li>
<li>
<a href="#content-size-8">size-8</a>
</li>
<li>
<a href="#content-size-9">size-9</a>
</li>
<li>
<a href="#content-size-10">size-10</a>
</li>
<li>
<a href="#content-size-11">size-11</a>
</li>
<li>
<a href="#content-size-12">size-12</a>
</li>
<li>
<a href="#content-size-14">size-14</a>
</li>
<li>
<a href="#content-size-16">size-16</a>
</li>
<li>
<a href="#content-size-20">size-20</a>
</li>
<li>
<a href="#content-size-24">size-24</a>
</li>
<li>
<a href="#content-size-28">size-28</a>
</li>
<li>
<a href="#content-size-32">size-32</a>
</li>
<li>
<a href="#content-size-36">size-36</a>
</li>
<li>
<a href="#content-size-40">size-40</a>
</li>
<li>
<a href="#content-size-44">size-44</a>
</li>
<li>
<a href="#content-size-48">size-48</a>
</li>
<li>
<a href="#content-size-52">size-52</a>
</li>
<li>
<a href="#content-size-56">size-56</a>
</li>
<li>
<a href="#content-size-60">size-60</a>
</li>
<li>
<a href="#content-size-64">size-64</a>
</li>
<li>
<a href="#content-size-72">size-72</a>
</li>
<li>
<a href="#content-size-80">size-80</a>
</li>
<li>
<a href="#content-size-96">size-96</a>
</li>
<li>
<a href="#content-size-auto">size-auto</a>
</li>
<li>
<a href="#content-size-12-1">size-1/2</a>
</li>
<li>
<a href="#content-size-13">size-1/3</a>
</li>
<li>
<a href="#content-size-23">size-2/3</a>
</li>
<li>
<a href="#content-size-14-1">size-1/4</a>
</li>
<li>
<a href="#content-size-24-1">size-2/4</a>
</li>
<li>
<a href="#content-size-34">size-3/4</a>
</li>
<li>
<a href="#content-size-15-1">size-1/5</a>
</li>
<li>
<a href="#content-size-25-1">size-2/5</a>
</li>
<li>
<a href="#content-size-35-1">size-3/5</a>
</li>
<li>
<a href="#content-size-45">size-4/5</a>
</li>
<li>
<a href="#content-size-16-1">size-1/6</a>
</li>
<li>
<a href="#content-size-26">size-2/6</a>
</li>
<li>
<a href="#content-size-36-1">size-3/6</a>
</li>
<li>
<a href="#content-size-46">size-4/6</a>
</li>
<li>
<a href="#content-size-56-1">size-5/6</a>
</li>
<li>
<a href="#content-size-112">size-1/12</a>
</li>
<li>
<a href="#content-size-212">size-2/12</a>
</li>
<li>
<a href="#content-size-312">size-3/12</a>
</li>
<li>
<a href="#content-size-412">size-4/12</a>
</li>
<li>
<a href="#content-size-512">size-5/12</a>
</li>
<li>
<a href="#content-size-612">size-6/12</a>
</li>
<li>
<a href="#content-size-712">size-7/12</a>
</li>
<li>
<a href="#content-size-812">size-8/12</a>
</li>
<li>
<a href="#content-size-912">size-9/12</a>
</li>
<li>
<a href="#content-size-1012">size-10/12</a>
</li>
<li>
<a href="#content-size-1112">size-11/12</a>
</li>
<li>
<a href="#content-size-full">size-full</a>
</li>
<li>
<a href="#content-size-min">size-min</a>
</li>
<li>
<a href="#content-size-max">size-max</a>
</li>
<li>
<a href="#content-size-fit">size-fit</a>
</li>
</ul>
</li>
<li>
<a href="#content-colors">Colors</a>
</li>
</ul>
</li>
</ul>
<h1><a id="content-marco---css-macro-library" href="#content-marco---css-macro-library" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Marco - CSS Macro Library</h1>
<p>This is a lightweight (and low level) CSS utilities library aimed at simplifying and standardizing common CSS patterns. It provides a utility function for generating CSS properties and values dynamically.</p>
<h2><a id="content-installation" href="#content-installation" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Installation</h2>
<p>This library is implemented in both TypeScript and PHP. You can install the TypeScript version via npm:</p>
<pre data-lang="txt" class="notranslate">npm install @lnear/marco
</pre>
<p>and the PHP version via composer:</p>
<pre data-lang="txt" class="notranslate">composer require lnear/marco
</pre>
<h2><a id="content-usage" href="#content-usage" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Usage</h2>
<pre data-lang="js" class="notranslate"><span class="hl-keyword">import</span> { replace } <span class="hl-keyword">from</span> &quot;<span class="hl-value">@lnear/marco</span>&quot;;
console.<span class="hl-property">log</span>(
  `div { ${<span class="hl-property">replace</span>(
    &quot;<span class="hl-value">transition-colors</span>&quot;,
    &quot;<span class="hl-value">transition-none</span>&quot;,
    &quot;<span class="hl-value">blur-md</span>&quot;,
    &quot;<span class="hl-value">drop-shadow-xl</span>&quot;
  )} }`
);
</pre>
<pre data-lang="php" class="notranslate"><span class="hl-keyword">use</span> <span class="hl-type">Lnear\Marco\Marco</span>;
<span class="hl-variable">$m</span> = <span class="hl-type">Marco</span>::<span class="hl-property">macro</span>(
  '<span class="hl-value">transition-colors</span>',
  '<span class="hl-value">transition-none</span>',
  '<span class="hl-value">blur-md</span>',
  '<span class="hl-value">drop-shadow-xl</span>'
);
<span class="hl-keyword">echo</span> &quot;<span class="hl-value">div { $m }</span>&quot;;
</pre>
<p>This will generate the following CSS string:</p>
<pre data-lang="css" class="notranslate"><span class="hl-keyword">div </span>{
  <span class="hl-property">transition-property</span>: color, background-color, border-color,
    text-decoration-color, fill, stroke;
  <span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);
  <span class="hl-property">transition-duration</span>: 150ms;
  <span class="hl-property">transition-property</span>: none;
  <span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(12px);
  <span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 20px 13px <span class="hl-keyword">rgb</span>(0 0 0 / 0.03)) <span class="hl-keyword">drop-shadow</span>(
      0 8px 5px <span class="hl-keyword">rgb</span>(0 0 0 / 0.08)
    );
}
</pre>
<p>More docs coming soon...</p>
<h2><a id="content-patterns" href="#content-patterns" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Patterns</h2>
<p>The below are the predefined patterns that can be used with the <code>replace</code> function. It is not an exhaustive list and intutive patterns are implemented as needed.
For example, only &quot;saturate-(0, 50, 100, 150, 200)&quot; are documented here, but any value can be used with the &quot;saturate&quot; pattern. (saturate-x where x is a number will be replaced with &quot;filter: saturate({x / 100});&quot;)</p>
<details>
  <summary>View Patterns</summary>
<h4><a id="content-drop-shadow" href="#content-drop-shadow" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 1px 2px <span class="hl-keyword">rgb</span>(0 0 0 / 0.1)) <span class="hl-keyword">drop-shadow</span>(0 1px 1px <span class="hl-keyword">rgb</span>(0 0 0 / 0.06));
</pre>
<h4><a id="content-drop-shadow-sm" href="#content-drop-shadow-sm" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-sm</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 1px 1px <span class="hl-keyword">rgb</span>(0 0 0 / 0.05));
</pre>
<h4><a id="content-drop-shadow-md" href="#content-drop-shadow-md" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-md</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 4px 3px <span class="hl-keyword">rgb</span>(0 0 0 / 0.07)) <span class="hl-keyword">drop-shadow</span>(0 2px 2px <span class="hl-keyword">rgb</span>(0 0 0 / 0.06));
</pre>
<h4><a id="content-drop-shadow-lg" href="#content-drop-shadow-lg" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-lg</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 10px 8px <span class="hl-keyword">rgb</span>(0 0 0 / 0.04)) <span class="hl-keyword">drop-shadow</span>(0 4px 3px <span class="hl-keyword">rgb</span>(0 0 0 / 0.1));
</pre>
<h4><a id="content-drop-shadow-xl" href="#content-drop-shadow-xl" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-xl</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 20px 13px <span class="hl-keyword">rgb</span>(0 0 0 / 0.03)) <span class="hl-keyword">drop-shadow</span>(0 8px 5px <span class="hl-keyword">rgb</span>(0 0 0 / 0.08));
</pre>
<h4><a id="content-drop-shadow-xl2" href="#content-drop-shadow-xl2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-xl2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 25px 25px <span class="hl-keyword">rgb</span>(0 0 0 / 0.15));
</pre>
<h4><a id="content-drop-shadow-none" href="#content-drop-shadow-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>drop-shadow-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">drop-shadow</span>(0 0 #0000);
</pre>
<h4><a id="content-backdrop-hue-rotate-0" href="#content-backdrop-hue-rotate-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(0deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-15" href="#content-backdrop-hue-rotate-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-15</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(15deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-16" href="#content-backdrop-hue-rotate-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(16deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-30" href="#content-backdrop-hue-rotate-30" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-30</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(30deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-60" href="#content-backdrop-hue-rotate-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(60deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-90" href="#content-backdrop-hue-rotate-90" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-90</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(90deg);
</pre>
<h4><a id="content-backdrop-hue-rotate-180" href="#content-backdrop-hue-rotate-180" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-hue-rotate-180</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">hue-rotate</span>(180deg);
</pre>
<h4><a id="content-hue-rotate-0" href="#content-hue-rotate-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(0deg);
</pre>
<h4><a id="content-hue-rotate-15" href="#content-hue-rotate-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-15</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(15deg);
</pre>
<h4><a id="content-hue-rotate-30" href="#content-hue-rotate-30" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-30</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(30deg);
</pre>
<h4><a id="content-hue-rotate-60" href="#content-hue-rotate-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(60deg);
</pre>
<h4><a id="content-hue-rotate-90" href="#content-hue-rotate-90" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-90</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(90deg);
</pre>
<h4><a id="content-hue-rotate-180" href="#content-hue-rotate-180" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hue-rotate-180</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">hue-rotate</span>(180deg);
</pre>
<h4><a id="content-grayscale-0" href="#content-grayscale-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grayscale-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">grayscale</span>(0);
</pre>
<h4><a id="content-grayscale" href="#content-grayscale" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grayscale</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">grayscale</span>(100%);
</pre>
<h4><a id="content-invert-0" href="#content-invert-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>invert-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">invert</span>(0);
</pre>
<h4><a id="content-invert" href="#content-invert" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>invert</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">invert</span>(100%);
</pre>
<h4><a id="content-sepia-0" href="#content-sepia-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>sepia-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">sepia</span>(0);
</pre>
<h4><a id="content-sepia" href="#content-sepia" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>sepia</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">sepia</span>(100%);
</pre>
<h4><a id="content-backdrop-grayscale-0" href="#content-backdrop-grayscale-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-grayscale-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">grayscale</span>(0);
</pre>
<h4><a id="content-backdrop-grayscale" href="#content-backdrop-grayscale" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-grayscale</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">grayscale</span>(100%);
</pre>
<h4><a id="content-saturate-0" href="#content-saturate-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>saturate-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">saturate</span>(0);
</pre>
<h4><a id="content-saturate-50" href="#content-saturate-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>saturate-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">saturate</span>(0.5);
</pre>
<h4><a id="content-saturate-100" href="#content-saturate-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>saturate-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">saturate</span>(1);
</pre>
<h4><a id="content-saturate-150" href="#content-saturate-150" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>saturate-150</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">saturate</span>(1.5);
</pre>
<h4><a id="content-saturate-200" href="#content-saturate-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>saturate-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">saturate</span>(2);
</pre>
<h4><a id="content-backdrop-blur" href="#content-backdrop-blur" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(8px);
</pre>
<h4><a id="content-backdrop-blur-none" href="#content-backdrop-blur-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(0);
</pre>
<h4><a id="content-backdrop-blur-sm" href="#content-backdrop-blur-sm" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-sm</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(4px);
</pre>
<h4><a id="content-backdrop-blur-md" href="#content-backdrop-blur-md" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-md</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(12px);
</pre>
<h4><a id="content-backdrop-blur-lg" href="#content-backdrop-blur-lg" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-lg</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(16px);
</pre>
<h4><a id="content-backdrop-blur-xl" href="#content-backdrop-blur-xl" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-xl</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(24px);
</pre>
<h4><a id="content-backdrop-blur-xl2" href="#content-backdrop-blur-xl2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-xl2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(40px);
</pre>
<h4><a id="content-backdrop-blur-xl3" href="#content-backdrop-blur-xl3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-blur-xl3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">blur</span>(64px);
</pre>
<h4><a id="content-blur" href="#content-blur" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(8px);
</pre>
<h4><a id="content-blur-none" href="#content-blur-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(0);
</pre>
<h4><a id="content-blur-sm" href="#content-blur-sm" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-sm</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(4px);
</pre>
<h4><a id="content-blur-md" href="#content-blur-md" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-md</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(12px);
</pre>
<h4><a id="content-blur-lg" href="#content-blur-lg" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-lg</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(16px);
</pre>
<h4><a id="content-blur-xl" href="#content-blur-xl" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-xl</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(24px);
</pre>
<h4><a id="content-blur-xl2" href="#content-blur-xl2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-xl2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(40px);
</pre>
<h4><a id="content-blur-xl3" href="#content-blur-xl3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>blur-xl3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">blur</span>(64px);
</pre>
<h4><a id="content-backdrop-brightness-0" href="#content-backdrop-brightness-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(0);
</pre>
<h4><a id="content-backdrop-brightness-50" href="#content-backdrop-brightness-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(0.5);
</pre>
<h4><a id="content-backdrop-brightness-75" href="#content-backdrop-brightness-75" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-75</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(0.75);
</pre>
<h4><a id="content-backdrop-brightness-90" href="#content-backdrop-brightness-90" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-90</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(0.9);
</pre>
<h4><a id="content-backdrop-brightness-95" href="#content-backdrop-brightness-95" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-95</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(0.95);
</pre>
<h4><a id="content-backdrop-brightness-100" href="#content-backdrop-brightness-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(1);
</pre>
<h4><a id="content-backdrop-brightness-105" href="#content-backdrop-brightness-105" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-105</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(1.05);
</pre>
<h4><a id="content-backdrop-brightness-110" href="#content-backdrop-brightness-110" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-110</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(1.1);
</pre>
<h4><a id="content-backdrop-brightness-125" href="#content-backdrop-brightness-125" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-125</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(1.25);
</pre>
<h4><a id="content-backdrop-brightness-150" href="#content-backdrop-brightness-150" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-150</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(1.5);
</pre>
<h4><a id="content-backdrop-brightness-200" href="#content-backdrop-brightness-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-brightness-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">brightness</span>(2);
</pre>
<h4><a id="content-brightness-0" href="#content-brightness-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(0);
</pre>
<h4><a id="content-brightness-50" href="#content-brightness-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(0.5);
</pre>
<h4><a id="content-brightness-75" href="#content-brightness-75" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-75</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(0.75);
</pre>
<h4><a id="content-brightness-90" href="#content-brightness-90" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-90</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(0.9);
</pre>
<h4><a id="content-brightness-95" href="#content-brightness-95" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-95</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(0.95);
</pre>
<h4><a id="content-brightness-100" href="#content-brightness-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(1);
</pre>
<h4><a id="content-brightness-105" href="#content-brightness-105" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-105</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(1.05);
</pre>
<h4><a id="content-brightness-110" href="#content-brightness-110" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-110</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(1.1);
</pre>
<h4><a id="content-brightness-125" href="#content-brightness-125" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-125</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(1.25);
</pre>
<h4><a id="content-brightness-150" href="#content-brightness-150" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-150</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(1.5);
</pre>
<h4><a id="content-brightness-200" href="#content-brightness-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>brightness-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">brightness</span>(2);
</pre>
<h4><a id="content-contrast-0" href="#content-contrast-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(0);
</pre>
<h4><a id="content-contrast-50" href="#content-contrast-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(0.5);
</pre>
<h4><a id="content-contrast-75" href="#content-contrast-75" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-75</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(0.75);
</pre>
<h4><a id="content-contrast-100" href="#content-contrast-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(1);
</pre>
<h4><a id="content-contrast-125" href="#content-contrast-125" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-125</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(1.25);
</pre>
<h4><a id="content-contrast-150" href="#content-contrast-150" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-150</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(1.5);
</pre>
<h4><a id="content-contrast-200" href="#content-contrast-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contrast-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">filter</span>: <span class="hl-keyword">contrast</span>(2);
</pre>
<h4><a id="content-backdrop-contrast-0" href="#content-backdrop-contrast-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(0);
</pre>
<h4><a id="content-backdrop-contrast-50" href="#content-backdrop-contrast-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(0.5);
</pre>
<h4><a id="content-backdrop-contrast-75" href="#content-backdrop-contrast-75" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-75</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(0.75);
</pre>
<h4><a id="content-backdrop-contrast-100" href="#content-backdrop-contrast-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(1);
</pre>
<h4><a id="content-backdrop-contrast-125" href="#content-backdrop-contrast-125" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-125</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(1.25);
</pre>
<h4><a id="content-backdrop-contrast-150" href="#content-backdrop-contrast-150" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-150</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(1.5);
</pre>
<h4><a id="content-backdrop-contrast-200" href="#content-backdrop-contrast-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backdrop-contrast-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backdrop-filter</span>: <span class="hl-keyword">contrast</span>(2);
</pre>
<h4><a id="content-ease-linear" href="#content-ease-linear" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>ease-linear</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: linear;
</pre>
<h4><a id="content-ease-in" href="#content-ease-in" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>ease-in</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 1, 1);
</pre>
<h4><a id="content-ease-out" href="#content-ease-out" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>ease-out</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0, 0, 0.2, 1);
</pre>
<h4><a id="content-ease-in-out" href="#content-ease-in-out" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>ease-in-out</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);
</pre>
<h4><a id="content-timing-linear" href="#content-timing-linear" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>timing-linear</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: linear;
</pre>
<h4><a id="content-timing-in" href="#content-timing-in" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>timing-in</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 1, 1);
</pre>
<h4><a id="content-timing-out" href="#content-timing-out" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>timing-out</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0, 0, 0.2, 1);
</pre>
<h4><a id="content-timing-in-out" href="#content-timing-in-out" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>timing-in-out</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);
</pre>
<h4><a id="content-transition-colors" href="#content-transition-colors" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transition-colors</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-property</span>: color, background-color, border-color, text-decoration-color, fill, stroke;<span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);<span class="hl-property">transition-duration</span>: 150ms;
</pre>
<h4><a id="content-transition-opacity" href="#content-transition-opacity" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transition-opacity</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-property</span>: opacity;<span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);<span class="hl-property">transition-duration</span>: 150ms;
</pre>
<h4><a id="content-transition-all" href="#content-transition-all" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transition-all</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-property</span>: all;<span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);<span class="hl-property">transition-duration</span>: 150ms;
</pre>
<h4><a id="content-transition-shadow" href="#content-transition-shadow" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transition-shadow</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-property</span>: shadow;<span class="hl-property">transition-timing-function</span>: <span class="hl-keyword">cubic-bezier</span>(0.4, 0, 0.2, 1);<span class="hl-property">transition-duration</span>: 150ms;
</pre>
<h4><a id="content-transition-none" href="#content-transition-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transition-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transition-property</span>: none;
</pre>
<h4><a id="content-float-start" href="#content-float-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>float-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">float</span>: start;
</pre>
<h4><a id="content-float-end" href="#content-float-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>float-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">float</span>: end;
</pre>
<h4><a id="content-float-right" href="#content-float-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>float-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">float</span>: right;
</pre>
<h4><a id="content-float-left" href="#content-float-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>float-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">float</span>: left;
</pre>
<h4><a id="content-float-none" href="#content-float-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>float-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">float</span>: none;
</pre>
<h4><a id="content-clear-start" href="#content-clear-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: start;
</pre>
<h4><a id="content-clear-end" href="#content-clear-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: end;
</pre>
<h4><a id="content-clear-right" href="#content-clear-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: right;
</pre>
<h4><a id="content-clear-left" href="#content-clear-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: left;
</pre>
<h4><a id="content-clear-both" href="#content-clear-both" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-both</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: both;
</pre>
<h4><a id="content-clear-none" href="#content-clear-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>clear-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">clear</span>: none;
</pre>
<h4><a id="content-inline-block" href="#content-inline-block" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inline-block</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: inline-block;
</pre>
<h4><a id="content-inline-flex" href="#content-inline-flex" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inline-flex</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: inline-flex;
</pre>
<h4><a id="content-inline-table" href="#content-inline-table" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inline-table</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: inline-table;
</pre>
<h4><a id="content-block" href="#content-block" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>block</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: block;
</pre>
<h4><a id="content-inline" href="#content-inline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: inline;
</pre>
<h4><a id="content-hidden" href="#content-hidden" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>hidden</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: none;
</pre>
<h4><a id="content-table" href="#content-table" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table;
</pre>
<h4><a id="content-table-caption" href="#content-table-caption" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-caption</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-caption;
</pre>
<h4><a id="content-table-cell" href="#content-table-cell" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-cell</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-cell;
</pre>
<h4><a id="content-table-column" href="#content-table-column" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-column</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-column;
</pre>
<h4><a id="content-table-column-group" href="#content-table-column-group" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-column-group</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-column-group;
</pre>
<h4><a id="content-table-footer-group" href="#content-table-footer-group" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-footer-group</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-footer-group;
</pre>
<h4><a id="content-table-header-group" href="#content-table-header-group" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-header-group</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-header-group;
</pre>
<h4><a id="content-table-row-group" href="#content-table-row-group" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-row-group</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-row-group;
</pre>
<h4><a id="content-table-row" href="#content-table-row" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-row</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: table-row;
</pre>
<h4><a id="content-flow-root" href="#content-flow-root" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flow-root</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: flow-root;
</pre>
<h4><a id="content-grid" href="#content-grid" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: grid;
</pre>
<h4><a id="content-inline-grid" href="#content-inline-grid" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inline-grid</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: inline-grid;
</pre>
<h4><a id="content-contents" href="#content-contents" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contents</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: contents;
</pre>
<h4><a id="content-list-item" href="#content-list-item" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-item</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">display</span>: list-item;
</pre>
<h4><a id="content-bg-inherit" href="#content-bg-inherit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-inherit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-color</span>: inherit;
</pre>
<h4><a id="content-bg-transparent" href="#content-bg-transparent" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-transparent</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-color</span>: transparent;
</pre>
<h4><a id="content-bg-auto" href="#content-bg-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-size</span>: auto;
</pre>
<h4><a id="content-bg-cover" href="#content-bg-cover" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-cover</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-size</span>: cover;
</pre>
<h4><a id="content-bg-contain" href="#content-bg-contain" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-contain</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-size</span>: contain;
</pre>
<h4><a id="content-bg-fixed" href="#content-bg-fixed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-fixed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-attachment</span>: fixed;
</pre>
<h4><a id="content-bg-local" href="#content-bg-local" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-local</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-attachment</span>: local;
</pre>
<h4><a id="content-bg-scroll" href="#content-bg-scroll" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-scroll</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-attachment</span>: scroll;
</pre>
<h4><a id="content-bg-center" href="#content-bg-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: center;
</pre>
<h4><a id="content-bg-top" href="#content-bg-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: top;
</pre>
<h4><a id="content-bg-right-top" href="#content-bg-right-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-right-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: right-top;
</pre>
<h4><a id="content-bg-right" href="#content-bg-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: right;
</pre>
<h4><a id="content-bg-right-bottom" href="#content-bg-right-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-right-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: right-bottom;
</pre>
<h4><a id="content-bg-bottom" href="#content-bg-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: bottom;
</pre>
<h4><a id="content-bg-left-bottom" href="#content-bg-left-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-left-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: left-bottom;
</pre>
<h4><a id="content-bg-left" href="#content-bg-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: left;
</pre>
<h4><a id="content-bg-left-top" href="#content-bg-left-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-left-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-position</span>: left-top;
</pre>
<h4><a id="content-bg-repeat" href="#content-bg-repeat" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-repeat</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: repeat;
</pre>
<h4><a id="content-bg-no-repeat" href="#content-bg-no-repeat" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-no-repeat</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: no-repeat;
</pre>
<h4><a id="content-bg-repeat-x" href="#content-bg-repeat-x" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-repeat-x</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: repeat-x;
</pre>
<h4><a id="content-bg-repeat-y" href="#content-bg-repeat-y" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-repeat-y</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: repeat-y;
</pre>
<h4><a id="content-bg-round" href="#content-bg-round" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-round</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: round;
</pre>
<h4><a id="content-bg-space" href="#content-bg-space" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-space</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-repeat</span>: space;
</pre>
<h4><a id="content-bg-none" href="#content-bg-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-image</span>: none;
</pre>
<h4><a id="content-pointer-events-none" href="#content-pointer-events-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>pointer-events-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">pointer-events</span>: none;
</pre>
<h4><a id="content-pointer-events-auto" href="#content-pointer-events-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>pointer-events-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">pointer-events</span>: auto;
</pre>
<h4><a id="content-place-content-center" href="#content-place-content-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: center;
</pre>
<h4><a id="content-place-content-start" href="#content-place-content-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: start;
</pre>
<h4><a id="content-place-content-end" href="#content-place-content-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: end;
</pre>
<h4><a id="content-place-content-between" href="#content-place-content-between" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-between</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: between;
</pre>
<h4><a id="content-place-content-around" href="#content-place-content-around" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-around</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: around;
</pre>
<h4><a id="content-place-content-evenly" href="#content-place-content-evenly" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-evenly</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: evenly;
</pre>
<h4><a id="content-place-content-baseline" href="#content-place-content-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: baseline;
</pre>
<h4><a id="content-place-content-stretch" href="#content-place-content-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-content-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-content</span>: stretch;
</pre>
<h4><a id="content-place-items-center" href="#content-place-items-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-items-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-items</span>: center;
</pre>
<h4><a id="content-place-items-start" href="#content-place-items-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-items-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-items</span>: start;
</pre>
<h4><a id="content-place-items-end" href="#content-place-items-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-items-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-items</span>: end;
</pre>
<h4><a id="content-place-items-baseline" href="#content-place-items-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-items-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-items</span>: baseline;
</pre>
<h4><a id="content-place-items-stretch" href="#content-place-items-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-items-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-items</span>: stretch;
</pre>
<h4><a id="content-inset-auto" href="#content-inset-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>inset-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">inset</span>: auto;
</pre>
<h4><a id="content-start-auto" href="#content-start-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>start-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">inset-inline-start</span>: auto;
</pre>
<h4><a id="content-end-auto" href="#content-end-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>end-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">inset-inline-end</span>: auto;
</pre>
<h4><a id="content-top-auto" href="#content-top-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>top-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">top</span>: auto;
</pre>
<h4><a id="content-right-auto" href="#content-right-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>right-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">right</span>: auto;
</pre>
<h4><a id="content-bottom-auto" href="#content-bottom-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bottom-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">bottom</span>: auto;
</pre>
<h4><a id="content-left-auto" href="#content-left-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>left-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">left</span>: auto;
</pre>
<h4><a id="content-isolate" href="#content-isolate" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>isolate</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">isolation</span>: isolate;
</pre>
<h4><a id="content-isolation-auto" href="#content-isolation-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>isolation-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">isolation</span>: auto;
</pre>
<h4><a id="content-z-auto" href="#content-z-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>z-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">z-index</span>: auto;
</pre>
<h4><a id="content-order-first" href="#content-order-first" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>order-first</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">order</span>: <span class="hl-keyword">calc</span>(-infinity);
</pre>
<h4><a id="content-order-last" href="#content-order-last" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>order-last</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">order</span>: <span class="hl-keyword">calc</span>(infinity);
</pre>
<h4><a id="content-order-none" href="#content-order-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>order-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">order</span>: 0;
</pre>
<h4><a id="content-col-auto" href="#content-col-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>col-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-column</span>: auto;
</pre>
<h4><a id="content-col-span-full" href="#content-col-span-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>col-span-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-column</span>: 1 / -1;
</pre>
<h4><a id="content-col-start-auto" href="#content-col-start-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>col-start-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-column-start</span>: auto;
</pre>
<h4><a id="content-col-end-auto" href="#content-col-end-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>col-end-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-column-end</span>: auto;
</pre>
<h4><a id="content-row-auto" href="#content-row-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>row-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-row</span>: auto;
</pre>
<h4><a id="content-row-span-full" href="#content-row-span-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>row-span-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-row</span>: 1 / -1;
</pre>
<h4><a id="content-row-start-auto" href="#content-row-start-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>row-start-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-row-start</span>: auto;
</pre>
<h4><a id="content-row-end-auto" href="#content-row-end-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>row-end-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-row-end</span>: auto;
</pre>
<h4><a id="content-box-border" href="#content-box-border" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>box-border</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">box-sizing</span>: border-box;
</pre>
<h4><a id="content-box-content" href="#content-box-content" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>box-content</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">box-sizing</span>: content-box;
</pre>
<h4><a id="content-aspect-auto" href="#content-aspect-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>aspect-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">aspect-ratio</span>: auto;
</pre>
<h4><a id="content-aspect-square" href="#content-aspect-square" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>aspect-square</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">aspect-ratio</span>: 1 / 1;
</pre>
<h4><a id="content-aspect-video" href="#content-aspect-video" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>aspect-video</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">aspect-ratio</span>: 16 / 9;
</pre>
<h4><a id="content-flex-auto" href="#content-flex-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex</span>: auto;
</pre>
<h4><a id="content-flex-initial" href="#content-flex-initial" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-initial</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex</span>: 0 auto;
</pre>
<h4><a id="content-flex-none" href="#content-flex-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex</span>: none;
</pre>
<h4><a id="content-basis-auto" href="#content-basis-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>basis-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-basis</span>: auto;
</pre>
<h4><a id="content-basis-full" href="#content-basis-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>basis-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-basis</span>: 100%;
</pre>
<h4><a id="content-table-auto" href="#content-table-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">table-layout</span>: auto;
</pre>
<h4><a id="content-table-fixed" href="#content-table-fixed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>table-fixed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">table-layout</span>: fixed;
</pre>
<h4><a id="content-caption-top" href="#content-caption-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>caption-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">caption-side</span>: top;
</pre>
<h4><a id="content-caption-bottom" href="#content-caption-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>caption-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">caption-side</span>: bottom;
</pre>
<h4><a id="content-border-collapse" href="#content-border-collapse" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-collapse</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-collapse</span>: collapse;
</pre>
<h4><a id="content-border-separate" href="#content-border-separate" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-separate</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-collapse</span>: separate;
</pre>
<h4><a id="content-origin-center" href="#content-origin-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: center;
</pre>
<h4><a id="content-origin-top" href="#content-origin-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: top;
</pre>
<h4><a id="content-origin-top-right" href="#content-origin-top-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-top-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: top right;
</pre>
<h4><a id="content-origin-right" href="#content-origin-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: right;
</pre>
<h4><a id="content-origin-bottom-right" href="#content-origin-bottom-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-bottom-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: bottom right;
</pre>
<h4><a id="content-origin-bottom" href="#content-origin-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: bottom;
</pre>
<h4><a id="content-origin-bottom-left" href="#content-origin-bottom-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-bottom-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: bottom left;
</pre>
<h4><a id="content-origin-left" href="#content-origin-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: left;
</pre>
<h4><a id="content-origin-top-left" href="#content-origin-top-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>origin-top-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-origin</span>: top left;
</pre>
<h4><a id="content-perspective-origin-center" href="#content-perspective-origin-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: center;
</pre>
<h4><a id="content-perspective-origin-top" href="#content-perspective-origin-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: top;
</pre>
<h4><a id="content-perspective-origin-top-right" href="#content-perspective-origin-top-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-top-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: top right;
</pre>
<h4><a id="content-perspective-origin-right" href="#content-perspective-origin-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: right;
</pre>
<h4><a id="content-perspective-origin-bottom-right" href="#content-perspective-origin-bottom-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-bottom-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: bottom right;
</pre>
<h4><a id="content-perspective-origin-bottom" href="#content-perspective-origin-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: bottom;
</pre>
<h4><a id="content-perspective-origin-bottom-left" href="#content-perspective-origin-bottom-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-bottom-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: bottom left;
</pre>
<h4><a id="content-perspective-origin-left" href="#content-perspective-origin-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: left;
</pre>
<h4><a id="content-perspective-origin-top-left" href="#content-perspective-origin-top-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-origin-top-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective-origin</span>: top left;
</pre>
<h4><a id="content-perspective-none" href="#content-perspective-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>perspective-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">perspective</span>: none;
</pre>
<h4><a id="content-translate-none" href="#content-translate-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>translate-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">translate</span>: none;
</pre>
<h4><a id="content-transform-none" href="#content-transform-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform</span>: none;
</pre>
<h4><a id="content-transform-flat" href="#content-transform-flat" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-flat</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-style</span>: flat;
</pre>
<h4><a id="content-transform-3d" href="#content-transform-3d" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-3d</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-style</span>: preserve-3d;
</pre>
<h4><a id="content-transform-content" href="#content-transform-content" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-content</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-box</span>: content-box;
</pre>
<h4><a id="content-transform-border" href="#content-transform-border" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-border</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-box</span>: border-box;
</pre>
<h4><a id="content-transform-fill" href="#content-transform-fill" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-fill</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-box</span>: fill-box;
</pre>
<h4><a id="content-transform-stroke" href="#content-transform-stroke" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-stroke</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-box</span>: stroke-box;
</pre>
<h4><a id="content-transform-view" href="#content-transform-view" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>transform-view</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">transform-box</span>: view-box;
</pre>
<h4><a id="content-backface-visible" href="#content-backface-visible" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backface-visible</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backface-visibility</span>: visible;
</pre>
<h4><a id="content-backface-hidden" href="#content-backface-hidden" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>backface-hidden</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">backface-visibility</span>: hidden;
</pre>
<h4><a id="content-resize-none" href="#content-resize-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>resize-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">resize</span>: none;
</pre>
<h4><a id="content-resize-both" href="#content-resize-both" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>resize-both</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">resize</span>: both;
</pre>
<h4><a id="content-resize-x" href="#content-resize-x" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>resize-x</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">resize</span>: horizontal;
</pre>
<h4><a id="content-resize-y" href="#content-resize-y" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>resize-y</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">resize</span>: vertical;
</pre>
<h4><a id="content-snap-none" href="#content-snap-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-type</span>: none;
</pre>
<h4><a id="content-snap-align-none" href="#content-snap-align-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-align-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-align</span>: none;
</pre>
<h4><a id="content-snap-start" href="#content-snap-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-align</span>: start;
</pre>
<h4><a id="content-snap-end" href="#content-snap-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-align</span>: end;
</pre>
<h4><a id="content-snap-center" href="#content-snap-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-align</span>: center;
</pre>
<h4><a id="content-snap-normal" href="#content-snap-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-stop</span>: normal;
</pre>
<h4><a id="content-snap-always" href="#content-snap-always" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>snap-always</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-snap-stop</span>: always;
</pre>
<h4><a id="content-list-inside" href="#content-list-inside" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-inside</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-position</span>: inside;
</pre>
<h4><a id="content-list-outside" href="#content-list-outside" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-outside</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-position</span>: outside;
</pre>
<h4><a id="content-list-none" href="#content-list-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-type</span>: none;
</pre>
<h4><a id="content-list-disc" href="#content-list-disc" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-disc</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-type</span>: disc;
</pre>
<h4><a id="content-list-decimal" href="#content-list-decimal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-decimal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-type</span>: decimal;
</pre>
<h4><a id="content-list-image-none" href="#content-list-image-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>list-image-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">list-style-image</span>: none;
</pre>
<h4><a id="content-appearance-none" href="#content-appearance-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>appearance-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">appearance</span>: none;
</pre>
<h4><a id="content-appearance-auto" href="#content-appearance-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>appearance-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">appearance</span>: auto;
</pre>
<h4><a id="content-columns-auto" href="#content-columns-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>columns-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">columns</span>: auto;
</pre>
<h4><a id="content-grid-flow-row" href="#content-grid-flow-row" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-flow-row</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-flow</span>: row;
</pre>
<h4><a id="content-grid-flow-col" href="#content-grid-flow-col" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-flow-col</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-flow</span>: column;
</pre>
<h4><a id="content-grid-flow-dense" href="#content-grid-flow-dense" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-flow-dense</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-flow</span>: dense;
</pre>
<h4><a id="content-grid-flow-row-dense" href="#content-grid-flow-row-dense" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-flow-row-dense</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-flow</span>: row dense;
</pre>
<h4><a id="content-grid-flow-col-dense" href="#content-grid-flow-col-dense" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-flow-col-dense</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-flow</span>: column dense;
</pre>
<h4><a id="content-auto-cols-auto" href="#content-auto-cols-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-cols-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-columns</span>: auto;
</pre>
<h4><a id="content-auto-cols-min" href="#content-auto-cols-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-cols-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-columns</span>: min-content;
</pre>
<h4><a id="content-auto-cols-max" href="#content-auto-cols-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-cols-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-columns</span>: max-content;
</pre>
<h4><a id="content-auto-cols-fr" href="#content-auto-cols-fr" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-cols-fr</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-columns</span>: <span class="hl-keyword">minmax</span>(0, 1fr);
</pre>
<h4><a id="content-auto-rows-auto" href="#content-auto-rows-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-rows-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-rows</span>: auto;
</pre>
<h4><a id="content-auto-rows-min" href="#content-auto-rows-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-rows-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-rows</span>: min-content;
</pre>
<h4><a id="content-auto-rows-max" href="#content-auto-rows-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-rows-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-rows</span>: max-content;
</pre>
<h4><a id="content-auto-rows-fr" href="#content-auto-rows-fr" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>auto-rows-fr</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-auto-rows</span>: <span class="hl-keyword">minmax</span>(0, 1fr);
</pre>
<h4><a id="content-grid-cols-none" href="#content-grid-cols-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-cols-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-template-columns</span>: none;
</pre>
<h4><a id="content-grid-cols-subgrid" href="#content-grid-cols-subgrid" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-cols-subgrid</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-template-columns</span>: subgrid;
</pre>
<h4><a id="content-grid-rows-none" href="#content-grid-rows-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-rows-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-template-rows</span>: none;
</pre>
<h4><a id="content-grid-rows-subgrid" href="#content-grid-rows-subgrid" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>grid-rows-subgrid</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">grid-template-rows</span>: subgrid;
</pre>
<h4><a id="content-flex-row" href="#content-flex-row" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-row</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-direction</span>: row;
</pre>
<h4><a id="content-flex-row-reverse" href="#content-flex-row-reverse" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-row-reverse</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-direction</span>: row-reverse;
</pre>
<h4><a id="content-flex-col" href="#content-flex-col" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-col</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-direction</span>: column;
</pre>
<h4><a id="content-flex-col-reverse" href="#content-flex-col-reverse" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-col-reverse</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-direction</span>: column-reverse;
</pre>
<h4><a id="content-flex-wrap" href="#content-flex-wrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-wrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-wrap</span>: wrap;
</pre>
<h4><a id="content-flex-nowrap" href="#content-flex-nowrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-nowrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-wrap</span>: nowrap;
</pre>
<h4><a id="content-flex-wrap-reverse" href="#content-flex-wrap-reverse" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>flex-wrap-reverse</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">flex-wrap</span>: wrap-reverse;
</pre>
<h4><a id="content-content-normal" href="#content-content-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: normal;
</pre>
<h4><a id="content-content-center" href="#content-content-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: center;
</pre>
<h4><a id="content-content-start" href="#content-content-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: flex-start;
</pre>
<h4><a id="content-content-end" href="#content-content-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: flex-end;
</pre>
<h4><a id="content-content-between" href="#content-content-between" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-between</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: space-between;
</pre>
<h4><a id="content-content-around" href="#content-content-around" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-around</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: space-around;
</pre>
<h4><a id="content-content-evenly" href="#content-content-evenly" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-evenly</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: space-evenly;
</pre>
<h4><a id="content-content-baseline" href="#content-content-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: baseline;
</pre>
<h4><a id="content-content-stretch" href="#content-content-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>content-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-content</span>: stretch;
</pre>
<h4><a id="content-items-center" href="#content-items-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>items-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-items</span>: center;
</pre>
<h4><a id="content-items-start" href="#content-items-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>items-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-items</span>: flex-start;
</pre>
<h4><a id="content-items-end" href="#content-items-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>items-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-items</span>: flex-end;
</pre>
<h4><a id="content-items-baseline" href="#content-items-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>items-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-items</span>: baseline;
</pre>
<h4><a id="content-items-stretch" href="#content-items-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>items-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-items</span>: stretch;
</pre>
<h4><a id="content-justify-normal" href="#content-justify-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: normal;
</pre>
<h4><a id="content-justify-center" href="#content-justify-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: center;
</pre>
<h4><a id="content-justify-start" href="#content-justify-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: flex-start;
</pre>
<h4><a id="content-justify-end" href="#content-justify-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: flex-end;
</pre>
<h4><a id="content-justify-between" href="#content-justify-between" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-between</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: space-between;
</pre>
<h4><a id="content-justify-around" href="#content-justify-around" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-around</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: space-around;
</pre>
<h4><a id="content-justify-evenly" href="#content-justify-evenly" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-evenly</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: space-evenly;
</pre>
<h4><a id="content-justify-baseline" href="#content-justify-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: baseline;
</pre>
<h4><a id="content-justify-stretch" href="#content-justify-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-content</span>: stretch;
</pre>
<h4><a id="content-justify-items-normal" href="#content-justify-items-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-items-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-items</span>: normal;
</pre>
<h4><a id="content-justify-items-center" href="#content-justify-items-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-items-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-items</span>: center;
</pre>
<h4><a id="content-justify-items-start" href="#content-justify-items-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-items-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-items</span>: start;
</pre>
<h4><a id="content-justify-items-end" href="#content-justify-items-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-items-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-items</span>: end;
</pre>
<h4><a id="content-justify-items-stretch" href="#content-justify-items-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-items-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-items</span>: stretch;
</pre>
<h4><a id="content-place-self-auto" href="#content-place-self-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-self-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-self</span>: auto;
</pre>
<h4><a id="content-place-self-start" href="#content-place-self-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-self-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-self</span>: start;
</pre>
<h4><a id="content-place-self-end" href="#content-place-self-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-self-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-self</span>: end;
</pre>
<h4><a id="content-place-self-center" href="#content-place-self-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-self-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-self</span>: center;
</pre>
<h4><a id="content-place-self-stretch" href="#content-place-self-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>place-self-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">place-self</span>: stretch;
</pre>
<h4><a id="content-self-auto" href="#content-self-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: auto;
</pre>
<h4><a id="content-self-start" href="#content-self-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: flex-start;
</pre>
<h4><a id="content-self-end" href="#content-self-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: flex-end;
</pre>
<h4><a id="content-self-center" href="#content-self-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: center;
</pre>
<h4><a id="content-self-stretch" href="#content-self-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: stretch;
</pre>
<h4><a id="content-self-baseline" href="#content-self-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>self-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">align-self</span>: baseline;
</pre>
<h4><a id="content-justify-self-auto" href="#content-justify-self-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-self-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-self</span>: auto;
</pre>
<h4><a id="content-justify-self-start" href="#content-justify-self-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-self-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-self</span>: flex-start;
</pre>
<h4><a id="content-justify-self-end" href="#content-justify-self-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-self-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-self</span>: flex-end;
</pre>
<h4><a id="content-justify-self-center" href="#content-justify-self-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-self-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-self</span>: center;
</pre>
<h4><a id="content-justify-self-stretch" href="#content-justify-self-stretch" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>justify-self-stretch</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">justify-self</span>: stretch;
</pre>
<h4><a id="content-scroll-auto" href="#content-scroll-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>scroll-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-behavior</span>: auto;
</pre>
<h4><a id="content-scroll-smooth" href="#content-scroll-smooth" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>scroll-smooth</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">scroll-behavior</span>: smooth;
</pre>
<h4><a id="content-text-ellipsis" href="#content-text-ellipsis" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-ellipsis</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-overflow</span>: ellipsis;
</pre>
<h4><a id="content-text-clip" href="#content-text-clip" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-clip</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-overflow</span>: clip;
</pre>
<h4><a id="content-whitespace-normal" href="#content-whitespace-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: normal;
</pre>
<h4><a id="content-whitespace-nowrap" href="#content-whitespace-nowrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-nowrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: nowrap;
</pre>
<h4><a id="content-whitespace-pre" href="#content-whitespace-pre" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-pre</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: pre;
</pre>
<h4><a id="content-whitespace-pre-line" href="#content-whitespace-pre-line" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-pre-line</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: pre-line;
</pre>
<h4><a id="content-whitespace-pre-wrap" href="#content-whitespace-pre-wrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-pre-wrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: pre-wrap;
</pre>
<h4><a id="content-whitespace-break-spaces" href="#content-whitespace-break-spaces" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>whitespace-break-spaces</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">white-space</span>: break-spaces;
</pre>
<h4><a id="content-text-wrap" href="#content-text-wrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-wrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-wrap</span>: wrap;
</pre>
<h4><a id="content-text-nowrap" href="#content-text-nowrap" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-nowrap</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-wrap</span>: nowrap;
</pre>
<h4><a id="content-text-balance" href="#content-text-balance" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-balance</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-wrap</span>: balance;
</pre>
<h4><a id="content-text-pretty" href="#content-text-pretty" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-pretty</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-wrap</span>: pretty;
</pre>
<h4><a id="content-break-words" href="#content-break-words" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>break-words</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">overflow-wrap</span>: break-word;
</pre>
<h4><a id="content-break-all" href="#content-break-all" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>break-all</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">word-break</span>: break-all;
</pre>
<h4><a id="content-break-keep" href="#content-break-keep" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>break-keep</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">word-break</span>: break-keep;
</pre>
<h4><a id="content-via-none" href="#content-via-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>via-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">--tw-gradient-via-stops</span>: initial;
</pre>
<h4><a id="content-bg-clip-text" href="#content-bg-clip-text" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-clip-text</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-clip</span>: text;
</pre>
<h4><a id="content-bg-clip-border" href="#content-bg-clip-border" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-clip-border</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-clip</span>: border-box;
</pre>
<h4><a id="content-bg-clip-padding" href="#content-bg-clip-padding" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-clip-padding</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-clip</span>: padding-box;
</pre>
<h4><a id="content-bg-clip-content" href="#content-bg-clip-content" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-clip-content</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-clip</span>: content-box;
</pre>
<h4><a id="content-bg-origin-border" href="#content-bg-origin-border" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-origin-border</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-origin</span>: border-box;
</pre>
<h4><a id="content-bg-origin-padding" href="#content-bg-origin-padding" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-origin-padding</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-origin</span>: padding-box;
</pre>
<h4><a id="content-bg-origin-content" href="#content-bg-origin-content" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>bg-origin-content</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">background-origin</span>: content-box;
</pre>
<h4><a id="content-mix-blend-plus-darker" href="#content-mix-blend-plus-darker" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>mix-blend-plus-darker</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">mix-blend-mode</span>: plus-darker;
</pre>
<h4><a id="content-mix-blend-plus-lighter" href="#content-mix-blend-plus-lighter" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>mix-blend-plus-lighter</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">mix-blend-mode</span>: plus-lighter;
</pre>
<h4><a id="content-stroke-none" href="#content-stroke-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>stroke-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">stroke</span>: none;
</pre>
<h4><a id="content-object-contain" href="#content-object-contain" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-contain</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-fit</span>: contain;
</pre>
<h4><a id="content-object-cover" href="#content-object-cover" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-cover</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-fit</span>: cover;
</pre>
<h4><a id="content-object-fill" href="#content-object-fill" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-fill</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-fit</span>: fill;
</pre>
<h4><a id="content-object-none" href="#content-object-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-fit</span>: none;
</pre>
<h4><a id="content-object-scale-down" href="#content-object-scale-down" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-scale-down</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-fit</span>: scale-down;
</pre>
<h4><a id="content-object-bottom" href="#content-object-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: bottom;
</pre>
<h4><a id="content-object-center" href="#content-object-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: center;
</pre>
<h4><a id="content-object-left" href="#content-object-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: left;
</pre>
<h4><a id="content-object-left-bottom" href="#content-object-left-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-left-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: left bottom;
</pre>
<h4><a id="content-object-left-top" href="#content-object-left-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-left-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: left top;
</pre>
<h4><a id="content-object-right" href="#content-object-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: right;
</pre>
<h4><a id="content-object-right-bottom" href="#content-object-right-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-right-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: right bottom;
</pre>
<h4><a id="content-object-right-top" href="#content-object-right-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-right-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: right top;
</pre>
<h4><a id="content-object-top" href="#content-object-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>object-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">object-position</span>: top;
</pre>
<h4><a id="content-text-left" href="#content-text-left" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-left</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: left;
</pre>
<h4><a id="content-text-center" href="#content-text-center" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-center</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: center;
</pre>
<h4><a id="content-text-right" href="#content-text-right" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-right</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: right;
</pre>
<h4><a id="content-text-justify" href="#content-text-justify" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-justify</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: justify;
</pre>
<h4><a id="content-text-start" href="#content-text-start" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-start</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: start;
</pre>
<h4><a id="content-text-end" href="#content-text-end" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>text-end</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-align</span>: end;
</pre>
<h4><a id="content-align-baseline" href="#content-align-baseline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-baseline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: baseline;
</pre>
<h4><a id="content-align-top" href="#content-align-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: top;
</pre>
<h4><a id="content-align-middle" href="#content-align-middle" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-middle</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: middle;
</pre>
<h4><a id="content-align-bottom" href="#content-align-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: bottom;
</pre>
<h4><a id="content-align-text-top" href="#content-align-text-top" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-text-top</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: text-top;
</pre>
<h4><a id="content-align-text-bottom" href="#content-align-text-bottom" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-text-bottom</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: text-bottom;
</pre>
<h4><a id="content-align-sub" href="#content-align-sub" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-sub</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: sub;
</pre>
<h4><a id="content-align-super" href="#content-align-super" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>align-super</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">vertical-align</span>: super;
</pre>
<h4><a id="content-uppercase" href="#content-uppercase" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>uppercase</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-transform</span>: uppercase;
</pre>
<h4><a id="content-lowercase" href="#content-lowercase" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>lowercase</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-transform</span>: lowercase;
</pre>
<h4><a id="content-capitalize" href="#content-capitalize" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>capitalize</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-transform</span>: capitalize;
</pre>
<h4><a id="content-normal-case" href="#content-normal-case" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>normal-case</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-transform</span>: none;
</pre>
<h4><a id="content-italic" href="#content-italic" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>italic</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-style</span>: italic;
</pre>
<h4><a id="content-not-italic" href="#content-not-italic" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>not-italic</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-style</span>: normal;
</pre>
<h4><a id="content-underline" href="#content-underline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>underline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-line</span>: underline;
</pre>
<h4><a id="content-overline" href="#content-overline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>overline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-line</span>: overline;
</pre>
<h4><a id="content-line-through" href="#content-line-through" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>line-through</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-line</span>: line-through;
</pre>
<h4><a id="content-no-underline" href="#content-no-underline" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>no-underline</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-line</span>: none;
</pre>
<h4><a id="content-font-stretch-normal" href="#content-font-stretch-normal" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-normal</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: normal;
</pre>
<h4><a id="content-font-stretch-ultra-condensed" href="#content-font-stretch-ultra-condensed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-ultra-condensed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: ultra-condensed;
</pre>
<h4><a id="content-font-stretch-extra-condensed" href="#content-font-stretch-extra-condensed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-extra-condensed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: extra-condensed;
</pre>
<h4><a id="content-font-stretch-condensed" href="#content-font-stretch-condensed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-condensed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: condensed;
</pre>
<h4><a id="content-font-stretch-semi-condensed" href="#content-font-stretch-semi-condensed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-semi-condensed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: semi-condensed;
</pre>
<h4><a id="content-font-stretch-semi-expanded" href="#content-font-stretch-semi-expanded" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-semi-expanded</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: semi-expanded;
</pre>
<h4><a id="content-font-stretch-expanded" href="#content-font-stretch-expanded" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-expanded</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: expanded;
</pre>
<h4><a id="content-font-stretch-extra-expanded" href="#content-font-stretch-extra-expanded" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-extra-expanded</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: extra-expanded;
</pre>
<h4><a id="content-font-stretch-ultra-expanded" href="#content-font-stretch-ultra-expanded" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>font-stretch-ultra-expanded</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-stretch</span>: ultra-expanded;
</pre>
<h4><a id="content-decoration-solid" href="#content-decoration-solid" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-solid</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-style</span>: solid;
</pre>
<h4><a id="content-decoration-double" href="#content-decoration-double" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-double</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-style</span>: double;
</pre>
<h4><a id="content-decoration-dotted" href="#content-decoration-dotted" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-dotted</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-style</span>: dotted;
</pre>
<h4><a id="content-decoration-dashed" href="#content-decoration-dashed" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-dashed</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-style</span>: dashed;
</pre>
<h4><a id="content-decoration-wavy" href="#content-decoration-wavy" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-wavy</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-style</span>: wavy;
</pre>
<h4><a id="content-decoration-auto" href="#content-decoration-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-thickness</span>: auto;
</pre>
<h4><a id="content-decoration-from-font" href="#content-decoration-from-font" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>decoration-from-font</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-decoration-thickness</span>: from-font;
</pre>
<h4><a id="content-animate-none" href="#content-animate-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>animate-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">animation</span>: none;
</pre>
<h4><a id="content-will-change-auto" href="#content-will-change-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>will-change-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">will-change</span>: auto;
</pre>
<h4><a id="content-will-change-scroll" href="#content-will-change-scroll" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>will-change-scroll</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">will-change</span>: scroll-position;
</pre>
<h4><a id="content-will-change-contents" href="#content-will-change-contents" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>will-change-contents</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">will-change</span>: contents;
</pre>
<h4><a id="content-will-change-transform" href="#content-will-change-transform" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>will-change-transform</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">will-change</span>: transform;
</pre>
<h4><a id="content-contain-none" href="#content-contain-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contain-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">contain</span>: none;
</pre>
<h4><a id="content-contain-content" href="#content-contain-content" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contain-content</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">contain</span>: content;
</pre>
<h4><a id="content-contain-strict" href="#content-contain-strict" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>contain-strict</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">contain</span>: strict;
</pre>
<h4><a id="content-forced-color-adjust-none" href="#content-forced-color-adjust-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>forced-color-adjust-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">forced-color-adjust</span>: none;
</pre>
<h4><a id="content-forced-color-adjust-auto" href="#content-forced-color-adjust-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>forced-color-adjust-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">forced-color-adjust</span>: auto;
</pre>
<h4><a id="content-normal-nums" href="#content-normal-nums" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>normal-nums</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">font-variant-numeric</span>: normal;
</pre>
<h4><a id="content-underline-offset-auto" href="#content-underline-offset-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>underline-offset-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">text-underline-offset</span>: auto;
</pre>
<h4><a id="content-touch-none" href="#content-touch-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>touch-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">touch-action</span>: none;
</pre>
<h4><a id="content-touch-auto" href="#content-touch-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>touch-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">touch-action</span>: auto;
</pre>
<h4><a id="content-touch-pan-x" href="#content-touch-pan-x" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>touch-pan-x</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">touch-action</span>: pan-x;
</pre>
<h4><a id="content-cursor-auto" href="#content-cursor-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>cursor-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">cursor</span>: auto;
</pre>
<h4><a id="content-cursor-default" href="#content-cursor-default" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>cursor-default</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">cursor</span>: default;
</pre>
<h4><a id="content-select-none" href="#content-select-none" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>select-none</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">-webkit-user-select</span>: none;<span class="hl-property">user-select</span>: none;
</pre>
<h4><a id="content-select-text" href="#content-select-text" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>select-text</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">-webkit-user-select</span>: text;<span class="hl-property">user-select</span>: text;
</pre>
<h4><a id="content-rotate-0" href="#content-rotate-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>rotate-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">rotate</span>: 0deg;
</pre>
<h4><a id="content-rotate-90" href="#content-rotate-90" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>rotate-90</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">rotate</span>: 90deg;
</pre>
<h4><a id="content-border-inherit" href="#content-border-inherit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-inherit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: inherit;
</pre>
<h4><a id="content-border-current" href="#content-border-current" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-current</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: currentColor;
</pre>
<h4><a id="content-border-transparent" href="#content-border-transparent" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-transparent</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: transparent;
</pre>
<h4><a id="content-border-x-black" href="#content-border-x-black" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-x-black</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-left-color</span>: <span class="hl-keyword">rgb</span>(0 0 0); <span class="hl-property">border-right-color</span>: <span class="hl-keyword">rgb</span>(0 0 0);
</pre>
<h4><a id="content-border-black" href="#content-border-black" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-black</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(0 0 0);
</pre>
<h4><a id="content-border-white" href="#content-border-white" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-white</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 255 255);
</pre>
<h4><a id="content-border-slate-50" href="#content-border-slate-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(248 250 252);
</pre>
<h4><a id="content-border-slate-100" href="#content-border-slate-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(241 245 249);
</pre>
<h4><a id="content-border-slate-200" href="#content-border-slate-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(226 232 240);
</pre>
<h4><a id="content-border-slate-300" href="#content-border-slate-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(203 213 225);
</pre>
<h4><a id="content-border-slate-400" href="#content-border-slate-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(148 163 184);
</pre>
<h4><a id="content-border-slate-500" href="#content-border-slate-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(100 116 139);
</pre>
<h4><a id="content-border-slate-600" href="#content-border-slate-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(71 85 105);
</pre>
<h4><a id="content-border-slate-700" href="#content-border-slate-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(51 65 85);
</pre>
<h4><a id="content-border-slate-800" href="#content-border-slate-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(30 41 59);
</pre>
<h4><a id="content-border-slate-900" href="#content-border-slate-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(15 23 42);
</pre>
<h4><a id="content-border-slate-950" href="#content-border-slate-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-slate-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(2 6 23);
</pre>
<h4><a id="content-border-gray-50" href="#content-border-gray-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(249 250 251);
</pre>
<h4><a id="content-border-gray-100" href="#content-border-gray-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(243 244 246);
</pre>
<h4><a id="content-border-gray-200" href="#content-border-gray-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(229 231 235);
</pre>
<h4><a id="content-border-gray-300" href="#content-border-gray-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(209 213 219);
</pre>
<h4><a id="content-border-gray-400" href="#content-border-gray-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(156 163 175);
</pre>
<h4><a id="content-border-gray-500" href="#content-border-gray-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(107 114 128);
</pre>
<h4><a id="content-border-gray-600" href="#content-border-gray-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(75 85 99);
</pre>
<h4><a id="content-border-gray-700" href="#content-border-gray-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(55 65 81);
</pre>
<h4><a id="content-border-gray-800" href="#content-border-gray-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(31 41 55);
</pre>
<h4><a id="content-border-gray-900" href="#content-border-gray-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(17 24 39);
</pre>
<h4><a id="content-border-gray-950" href="#content-border-gray-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-gray-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(3 7 18);
</pre>
<h4><a id="content-border-zinc-50" href="#content-border-zinc-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 250 250);
</pre>
<h4><a id="content-border-zinc-100" href="#content-border-zinc-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(244 244 245);
</pre>
<h4><a id="content-border-zinc-200" href="#content-border-zinc-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(228 228 231);
</pre>
<h4><a id="content-border-zinc-300" href="#content-border-zinc-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(212 212 216);
</pre>
<h4><a id="content-border-zinc-400" href="#content-border-zinc-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(161 161 170);
</pre>
<h4><a id="content-border-zinc-500" href="#content-border-zinc-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(113 113 122);
</pre>
<h4><a id="content-border-zinc-600" href="#content-border-zinc-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(82 82 91);
</pre>
<h4><a id="content-border-zinc-700" href="#content-border-zinc-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(63 63 70);
</pre>
<h4><a id="content-border-zinc-800" href="#content-border-zinc-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(39 39 42);
</pre>
<h4><a id="content-border-zinc-900" href="#content-border-zinc-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(24 24 27);
</pre>
<h4><a id="content-border-zinc-950" href="#content-border-zinc-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-zinc-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(9 9 11);
</pre>
<h4><a id="content-border-neutral-50" href="#content-border-neutral-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 250 250);
</pre>
<h4><a id="content-border-neutral-100" href="#content-border-neutral-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(245 245 245);
</pre>
<h4><a id="content-border-neutral-200" href="#content-border-neutral-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(229 229 229);
</pre>
<h4><a id="content-border-neutral-300" href="#content-border-neutral-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(212 212 212);
</pre>
<h4><a id="content-border-neutral-400" href="#content-border-neutral-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(163 163 163);
</pre>
<h4><a id="content-border-neutral-500" href="#content-border-neutral-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(115 115 115);
</pre>
<h4><a id="content-border-neutral-600" href="#content-border-neutral-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(82 82 82);
</pre>
<h4><a id="content-border-neutral-700" href="#content-border-neutral-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(64 64 64);
</pre>
<h4><a id="content-border-neutral-800" href="#content-border-neutral-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(38 38 38);
</pre>
<h4><a id="content-border-neutral-900" href="#content-border-neutral-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(23 23 23);
</pre>
<h4><a id="content-border-neutral-950" href="#content-border-neutral-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-neutral-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(10 10 10);
</pre>
<h4><a id="content-border-stone-50" href="#content-border-stone-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 250 249);
</pre>
<h4><a id="content-border-stone-100" href="#content-border-stone-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(245 245 244);
</pre>
<h4><a id="content-border-stone-200" href="#content-border-stone-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(231 229 228);
</pre>
<h4><a id="content-border-stone-300" href="#content-border-stone-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(214 211 209);
</pre>
<h4><a id="content-border-stone-400" href="#content-border-stone-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(168 162 158);
</pre>
<h4><a id="content-border-stone-500" href="#content-border-stone-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(120 113 108);
</pre>
<h4><a id="content-border-stone-600" href="#content-border-stone-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(87 83 78);
</pre>
<h4><a id="content-border-stone-700" href="#content-border-stone-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(68 64 60);
</pre>
<h4><a id="content-border-stone-800" href="#content-border-stone-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(41 37 36);
</pre>
<h4><a id="content-border-stone-900" href="#content-border-stone-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(28 25 23);
</pre>
<h4><a id="content-border-stone-950" href="#content-border-stone-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-stone-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(12 10 9);
</pre>
<h4><a id="content-border-red-50" href="#content-border-red-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 242 242);
</pre>
<h4><a id="content-border-red-100" href="#content-border-red-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 226 226);
</pre>
<h4><a id="content-border-red-200" href="#content-border-red-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 202 202);
</pre>
<h4><a id="content-border-red-300" href="#content-border-red-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(252 165 165);
</pre>
<h4><a id="content-border-red-400" href="#content-border-red-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(248 113 113);
</pre>
<h4><a id="content-border-red-500" href="#content-border-red-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(239 68 68);
</pre>
<h4><a id="content-border-red-600" href="#content-border-red-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(220 38 38);
</pre>
<h4><a id="content-border-red-700" href="#content-border-red-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(185 28 28);
</pre>
<h4><a id="content-border-red-800" href="#content-border-red-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(153 27 27);
</pre>
<h4><a id="content-border-red-900" href="#content-border-red-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(127 29 29);
</pre>
<h4><a id="content-border-red-950" href="#content-border-red-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-red-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(69 10 10);
</pre>
<h4><a id="content-border-orange-50" href="#content-border-orange-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 247 237);
</pre>
<h4><a id="content-border-orange-100" href="#content-border-orange-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 237 213);
</pre>
<h4><a id="content-border-orange-200" href="#content-border-orange-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 215 170);
</pre>
<h4><a id="content-border-orange-300" href="#content-border-orange-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 186 116);
</pre>
<h4><a id="content-border-orange-400" href="#content-border-orange-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(251 146 60);
</pre>
<h4><a id="content-border-orange-500" href="#content-border-orange-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(249 115 22);
</pre>
<h4><a id="content-border-orange-600" href="#content-border-orange-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(234 88 12);
</pre>
<h4><a id="content-border-orange-700" href="#content-border-orange-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(194 65 12);
</pre>
<h4><a id="content-border-orange-800" href="#content-border-orange-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(154 52 18);
</pre>
<h4><a id="content-border-orange-900" href="#content-border-orange-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(124 45 18);
</pre>
<h4><a id="content-border-orange-950" href="#content-border-orange-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-orange-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(67 20 7);
</pre>
<h4><a id="content-border-amber-50" href="#content-border-amber-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 251 235);
</pre>
<h4><a id="content-border-amber-100" href="#content-border-amber-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 243 199);
</pre>
<h4><a id="content-border-amber-200" href="#content-border-amber-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 230 138);
</pre>
<h4><a id="content-border-amber-300" href="#content-border-amber-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(252 211 77);
</pre>
<h4><a id="content-border-amber-400" href="#content-border-amber-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(251 191 36);
</pre>
<h4><a id="content-border-amber-500" href="#content-border-amber-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(245 158 11);
</pre>
<h4><a id="content-border-amber-600" href="#content-border-amber-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(217 119 6);
</pre>
<h4><a id="content-border-amber-700" href="#content-border-amber-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(180 83 9);
</pre>
<h4><a id="content-border-amber-800" href="#content-border-amber-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(146 64 14);
</pre>
<h4><a id="content-border-amber-900" href="#content-border-amber-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(120 53 15);
</pre>
<h4><a id="content-border-amber-950" href="#content-border-amber-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-amber-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(69 26 3);
</pre>
<h4><a id="content-border-yellow-50" href="#content-border-yellow-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 252 232);
</pre>
<h4><a id="content-border-yellow-100" href="#content-border-yellow-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 249 195);
</pre>
<h4><a id="content-border-yellow-200" href="#content-border-yellow-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 240 138);
</pre>
<h4><a id="content-border-yellow-300" href="#content-border-yellow-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 224 71);
</pre>
<h4><a id="content-border-yellow-400" href="#content-border-yellow-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 204 21);
</pre>
<h4><a id="content-border-yellow-500" href="#content-border-yellow-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(234 179 8);
</pre>
<h4><a id="content-border-yellow-600" href="#content-border-yellow-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(202 138 4);
</pre>
<h4><a id="content-border-yellow-700" href="#content-border-yellow-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(161 98 7);
</pre>
<h4><a id="content-border-yellow-800" href="#content-border-yellow-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(133 77 14);
</pre>
<h4><a id="content-border-yellow-900" href="#content-border-yellow-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(113 63 18);
</pre>
<h4><a id="content-border-yellow-950" href="#content-border-yellow-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-yellow-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(66 32 6);
</pre>
<h4><a id="content-border-lime-50" href="#content-border-lime-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(247 254 231);
</pre>
<h4><a id="content-border-lime-100" href="#content-border-lime-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(236 252 203);
</pre>
<h4><a id="content-border-lime-200" href="#content-border-lime-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(217 249 157);
</pre>
<h4><a id="content-border-lime-300" href="#content-border-lime-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(190 242 100);
</pre>
<h4><a id="content-border-lime-400" href="#content-border-lime-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(163 230 53);
</pre>
<h4><a id="content-border-lime-500" href="#content-border-lime-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(132 204 22);
</pre>
<h4><a id="content-border-lime-600" href="#content-border-lime-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(101 163 13);
</pre>
<h4><a id="content-border-lime-700" href="#content-border-lime-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(77 124 15);
</pre>
<h4><a id="content-border-lime-800" href="#content-border-lime-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(63 98 18);
</pre>
<h4><a id="content-border-lime-900" href="#content-border-lime-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(54 83 20);
</pre>
<h4><a id="content-border-lime-950" href="#content-border-lime-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-lime-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(26 46 5);
</pre>
<h4><a id="content-border-green-50" href="#content-border-green-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(240 253 244);
</pre>
<h4><a id="content-border-green-100" href="#content-border-green-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(220 252 231);
</pre>
<h4><a id="content-border-green-200" href="#content-border-green-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(187 247 208);
</pre>
<h4><a id="content-border-green-300" href="#content-border-green-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(134 239 172);
</pre>
<h4><a id="content-border-green-400" href="#content-border-green-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(74 222 128);
</pre>
<h4><a id="content-border-green-500" href="#content-border-green-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(34 197 94);
</pre>
<h4><a id="content-border-green-600" href="#content-border-green-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(22 163 74);
</pre>
<h4><a id="content-border-green-700" href="#content-border-green-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(21 128 61);
</pre>
<h4><a id="content-border-green-800" href="#content-border-green-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(22 101 52);
</pre>
<h4><a id="content-border-green-900" href="#content-border-green-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(20 83 45);
</pre>
<h4><a id="content-border-green-950" href="#content-border-green-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-green-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(5 46 22);
</pre>
<h4><a id="content-border-emerald-50" href="#content-border-emerald-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(236 253 245);
</pre>
<h4><a id="content-border-emerald-100" href="#content-border-emerald-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(209 250 229);
</pre>
<h4><a id="content-border-emerald-200" href="#content-border-emerald-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(167 243 208);
</pre>
<h4><a id="content-border-emerald-300" href="#content-border-emerald-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(110 231 183);
</pre>
<h4><a id="content-border-emerald-400" href="#content-border-emerald-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(52 211 153);
</pre>
<h4><a id="content-border-emerald-500" href="#content-border-emerald-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(16 185 129);
</pre>
<h4><a id="content-border-emerald-600" href="#content-border-emerald-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(5 150 105);
</pre>
<h4><a id="content-border-emerald-700" href="#content-border-emerald-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(4 120 87);
</pre>
<h4><a id="content-border-emerald-800" href="#content-border-emerald-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(6 95 70);
</pre>
<h4><a id="content-border-emerald-900" href="#content-border-emerald-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(6 78 59);
</pre>
<h4><a id="content-border-emerald-950" href="#content-border-emerald-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-emerald-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(2 44 34);
</pre>
<h4><a id="content-border-teal-50" href="#content-border-teal-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(240 253 250);
</pre>
<h4><a id="content-border-teal-100" href="#content-border-teal-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(204 251 241);
</pre>
<h4><a id="content-border-teal-200" href="#content-border-teal-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(153 246 228);
</pre>
<h4><a id="content-border-teal-300" href="#content-border-teal-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(94 234 212);
</pre>
<h4><a id="content-border-teal-400" href="#content-border-teal-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(45 212 191);
</pre>
<h4><a id="content-border-teal-500" href="#content-border-teal-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(20 184 166);
</pre>
<h4><a id="content-border-teal-600" href="#content-border-teal-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(13 148 136);
</pre>
<h4><a id="content-border-teal-700" href="#content-border-teal-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(15 118 110);
</pre>
<h4><a id="content-border-teal-800" href="#content-border-teal-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(17 94 89);
</pre>
<h4><a id="content-border-teal-900" href="#content-border-teal-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(19 78 74);
</pre>
<h4><a id="content-border-teal-950" href="#content-border-teal-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-teal-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(4 47 46);
</pre>
<h4><a id="content-border-cyan-50" href="#content-border-cyan-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(236 254 255);
</pre>
<h4><a id="content-border-cyan-100" href="#content-border-cyan-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(207 250 254);
</pre>
<h4><a id="content-border-cyan-200" href="#content-border-cyan-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(165 243 252);
</pre>
<h4><a id="content-border-cyan-300" href="#content-border-cyan-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(103 232 249);
</pre>
<h4><a id="content-border-cyan-400" href="#content-border-cyan-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(34 211 238);
</pre>
<h4><a id="content-border-cyan-500" href="#content-border-cyan-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(6 182 212);
</pre>
<h4><a id="content-border-cyan-600" href="#content-border-cyan-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(8 145 178);
</pre>
<h4><a id="content-border-cyan-700" href="#content-border-cyan-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(14 116 144);
</pre>
<h4><a id="content-border-cyan-800" href="#content-border-cyan-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(21 94 117);
</pre>
<h4><a id="content-border-cyan-900" href="#content-border-cyan-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(22 78 99);
</pre>
<h4><a id="content-border-cyan-950" href="#content-border-cyan-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-cyan-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(8 51 68);
</pre>
<h4><a id="content-border-sky-50" href="#content-border-sky-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(240 249 255);
</pre>
<h4><a id="content-border-sky-100" href="#content-border-sky-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(224 242 254);
</pre>
<h4><a id="content-border-sky-200" href="#content-border-sky-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(186 230 253);
</pre>
<h4><a id="content-border-sky-300" href="#content-border-sky-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(125 211 252);
</pre>
<h4><a id="content-border-sky-400" href="#content-border-sky-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(56 189 248);
</pre>
<h4><a id="content-border-sky-500" href="#content-border-sky-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(14 165 233);
</pre>
<h4><a id="content-border-sky-600" href="#content-border-sky-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(2 132 199);
</pre>
<h4><a id="content-border-sky-700" href="#content-border-sky-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(3 105 161);
</pre>
<h4><a id="content-border-sky-800" href="#content-border-sky-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(7 89 133);
</pre>
<h4><a id="content-border-sky-900" href="#content-border-sky-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(12 74 110);
</pre>
<h4><a id="content-border-sky-950" href="#content-border-sky-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-sky-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(8 47 73);
</pre>
<h4><a id="content-border-blue-50" href="#content-border-blue-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(239 246 255);
</pre>
<h4><a id="content-border-blue-100" href="#content-border-blue-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(219 234 254);
</pre>
<h4><a id="content-border-blue-200" href="#content-border-blue-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(191 219 254);
</pre>
<h4><a id="content-border-blue-300" href="#content-border-blue-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(147 197 253);
</pre>
<h4><a id="content-border-blue-400" href="#content-border-blue-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(96 165 250);
</pre>
<h4><a id="content-border-blue-500" href="#content-border-blue-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(59 130 246);
</pre>
<h4><a id="content-border-blue-600" href="#content-border-blue-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(37 99 235);
</pre>
<h4><a id="content-border-blue-700" href="#content-border-blue-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(29 78 216);
</pre>
<h4><a id="content-border-blue-800" href="#content-border-blue-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(30 64 175);
</pre>
<h4><a id="content-border-blue-900" href="#content-border-blue-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(30 58 138);
</pre>
<h4><a id="content-border-blue-950" href="#content-border-blue-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-blue-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(23 37 84);
</pre>
<h4><a id="content-border-indigo-50" href="#content-border-indigo-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(238 242 255);
</pre>
<h4><a id="content-border-indigo-100" href="#content-border-indigo-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(224 231 255);
</pre>
<h4><a id="content-border-indigo-200" href="#content-border-indigo-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(199 210 254);
</pre>
<h4><a id="content-border-indigo-300" href="#content-border-indigo-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(165 180 252);
</pre>
<h4><a id="content-border-indigo-400" href="#content-border-indigo-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(129 140 248);
</pre>
<h4><a id="content-border-indigo-500" href="#content-border-indigo-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(99 102 241);
</pre>
<h4><a id="content-border-indigo-600" href="#content-border-indigo-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(79 70 229);
</pre>
<h4><a id="content-border-indigo-700" href="#content-border-indigo-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(67 56 202);
</pre>
<h4><a id="content-border-indigo-800" href="#content-border-indigo-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(55 48 163);
</pre>
<h4><a id="content-border-indigo-900" href="#content-border-indigo-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(49 46 129);
</pre>
<h4><a id="content-border-indigo-950" href="#content-border-indigo-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-indigo-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(30 27 75);
</pre>
<h4><a id="content-border-violet-50" href="#content-border-violet-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(245 243 255);
</pre>
<h4><a id="content-border-violet-100" href="#content-border-violet-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(237 233 254);
</pre>
<h4><a id="content-border-violet-200" href="#content-border-violet-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(221 214 254);
</pre>
<h4><a id="content-border-violet-300" href="#content-border-violet-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(196 181 253);
</pre>
<h4><a id="content-border-violet-400" href="#content-border-violet-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(167 139 250);
</pre>
<h4><a id="content-border-violet-500" href="#content-border-violet-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(139 92 246);
</pre>
<h4><a id="content-border-violet-600" href="#content-border-violet-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(124 58 237);
</pre>
<h4><a id="content-border-violet-700" href="#content-border-violet-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(109 40 217);
</pre>
<h4><a id="content-border-violet-800" href="#content-border-violet-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(91 33 182);
</pre>
<h4><a id="content-border-violet-900" href="#content-border-violet-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(76 29 149);
</pre>
<h4><a id="content-border-violet-950" href="#content-border-violet-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-violet-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(46 16 101);
</pre>
<h4><a id="content-border-purple-50" href="#content-border-purple-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 245 255);
</pre>
<h4><a id="content-border-purple-100" href="#content-border-purple-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(243 232 255);
</pre>
<h4><a id="content-border-purple-200" href="#content-border-purple-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(233 213 255);
</pre>
<h4><a id="content-border-purple-300" href="#content-border-purple-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(216 180 254);
</pre>
<h4><a id="content-border-purple-400" href="#content-border-purple-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(192 132 252);
</pre>
<h4><a id="content-border-purple-500" href="#content-border-purple-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(168 85 247);
</pre>
<h4><a id="content-border-purple-600" href="#content-border-purple-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(147 51 234);
</pre>
<h4><a id="content-border-purple-700" href="#content-border-purple-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(126 34 206);
</pre>
<h4><a id="content-border-purple-800" href="#content-border-purple-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(107 33 168);
</pre>
<h4><a id="content-border-purple-900" href="#content-border-purple-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(88 28 135);
</pre>
<h4><a id="content-border-purple-950" href="#content-border-purple-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-purple-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(59 7 100);
</pre>
<h4><a id="content-border-fuchsia-50" href="#content-border-fuchsia-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 244 255);
</pre>
<h4><a id="content-border-fuchsia-100" href="#content-border-fuchsia-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(250 232 255);
</pre>
<h4><a id="content-border-fuchsia-200" href="#content-border-fuchsia-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(245 208 254);
</pre>
<h4><a id="content-border-fuchsia-300" href="#content-border-fuchsia-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(240 171 252);
</pre>
<h4><a id="content-border-fuchsia-400" href="#content-border-fuchsia-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(232 121 249);
</pre>
<h4><a id="content-border-fuchsia-500" href="#content-border-fuchsia-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(217 70 239);
</pre>
<h4><a id="content-border-fuchsia-600" href="#content-border-fuchsia-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(192 38 211);
</pre>
<h4><a id="content-border-fuchsia-700" href="#content-border-fuchsia-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(162 28 175);
</pre>
<h4><a id="content-border-fuchsia-800" href="#content-border-fuchsia-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(134 25 143);
</pre>
<h4><a id="content-border-fuchsia-900" href="#content-border-fuchsia-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(112 26 117);
</pre>
<h4><a id="content-border-fuchsia-950" href="#content-border-fuchsia-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-fuchsia-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(74 4 78);
</pre>
<h4><a id="content-border-pink-50" href="#content-border-pink-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 242 248);
</pre>
<h4><a id="content-border-pink-100" href="#content-border-pink-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(252 231 243);
</pre>
<h4><a id="content-border-pink-200" href="#content-border-pink-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(251 207 232);
</pre>
<h4><a id="content-border-pink-300" href="#content-border-pink-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(249 168 212);
</pre>
<h4><a id="content-border-pink-400" href="#content-border-pink-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(244 114 182);
</pre>
<h4><a id="content-border-pink-500" href="#content-border-pink-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(236 72 153);
</pre>
<h4><a id="content-border-pink-600" href="#content-border-pink-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(219 39 119);
</pre>
<h4><a id="content-border-pink-700" href="#content-border-pink-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(190 24 93);
</pre>
<h4><a id="content-border-pink-800" href="#content-border-pink-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(157 23 77);
</pre>
<h4><a id="content-border-pink-900" href="#content-border-pink-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(131 24 67);
</pre>
<h4><a id="content-border-pink-950" href="#content-border-pink-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-pink-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(80 7 36);
</pre>
<h4><a id="content-border-rose-50" href="#content-border-rose-50" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-50</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 241 242);
</pre>
<h4><a id="content-border-rose-100" href="#content-border-rose-100" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-100</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(255 228 230);
</pre>
<h4><a id="content-border-rose-200" href="#content-border-rose-200" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-200</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(254 205 211);
</pre>
<h4><a id="content-border-rose-300" href="#content-border-rose-300" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-300</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(253 164 175);
</pre>
<h4><a id="content-border-rose-400" href="#content-border-rose-400" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-400</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(251 113 133);
</pre>
<h4><a id="content-border-rose-500" href="#content-border-rose-500" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-500</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(244 63 94);
</pre>
<h4><a id="content-border-rose-600" href="#content-border-rose-600" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-600</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(225 29 72);
</pre>
<h4><a id="content-border-rose-700" href="#content-border-rose-700" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-700</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(190 18 60);
</pre>
<h4><a id="content-border-rose-800" href="#content-border-rose-800" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-800</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(159 18 57);
</pre>
<h4><a id="content-border-rose-900" href="#content-border-rose-900" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-900</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(136 19 55);
</pre>
<h4><a id="content-border-rose-950" href="#content-border-rose-950" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>border-rose-950</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">border-color</span>: <span class="hl-keyword">rgb</span>(76 5 25);
</pre>
<h4><a id="content-w-0" href="#content-w-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0px;
</pre>
<h4><a id="content-w-px" href="#content-w-px" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-px</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1px;
</pre>
<h4><a id="content-w-05" href="#content-w-05" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-0.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.125rem;
</pre>
<h4><a id="content-w-1" href="#content-w-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.25rem;
</pre>
<h4><a id="content-w-15" href="#content-w-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.375rem;
</pre>
<h4><a id="content-w-2" href="#content-w-2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.5rem;
</pre>
<h4><a id="content-w-25" href="#content-w-25" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.625rem;
</pre>
<h4><a id="content-w-3" href="#content-w-3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.75rem;
</pre>
<h4><a id="content-w-35" href="#content-w-35" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.875rem;
</pre>
<h4><a id="content-w-4" href="#content-w-4" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1rem;
</pre>
<h4><a id="content-w-5" href="#content-w-5" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.25rem;
</pre>
<h4><a id="content-w-6" href="#content-w-6" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.5rem;
</pre>
<h4><a id="content-w-7" href="#content-w-7" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-7</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.75rem;
</pre>
<h4><a id="content-w-8" href="#content-w-8" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-8</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2rem;
</pre>
<h4><a id="content-w-9" href="#content-w-9" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-9</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.25rem;
</pre>
<h4><a id="content-w-10" href="#content-w-10" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-10</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.5rem;
</pre>
<h4><a id="content-w-11" href="#content-w-11" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-11</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.75rem;
</pre>
<h4><a id="content-w-12" href="#content-w-12" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 3rem;
</pre>
<h4><a id="content-w-14" href="#content-w-14" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-14</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 3.5rem;
</pre>
<h4><a id="content-w-16" href="#content-w-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 4rem;
</pre>
<h4><a id="content-w-20" href="#content-w-20" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-20</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 5rem;
</pre>
<h4><a id="content-w-24" href="#content-w-24" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-24</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 6rem;
</pre>
<h4><a id="content-w-28" href="#content-w-28" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-28</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 7rem;
</pre>
<h4><a id="content-w-32" href="#content-w-32" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-32</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 8rem;
</pre>
<h4><a id="content-w-36" href="#content-w-36" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-36</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 9rem;
</pre>
<h4><a id="content-w-40" href="#content-w-40" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-40</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 10rem;
</pre>
<h4><a id="content-w-44" href="#content-w-44" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-44</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 11rem;
</pre>
<h4><a id="content-w-48" href="#content-w-48" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-48</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 12rem;
</pre>
<h4><a id="content-w-52" href="#content-w-52" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-52</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 13rem;
</pre>
<h4><a id="content-w-56" href="#content-w-56" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-56</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 14rem;
</pre>
<h4><a id="content-w-60" href="#content-w-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 15rem;
</pre>
<h4><a id="content-w-64" href="#content-w-64" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-64</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16rem;
</pre>
<h4><a id="content-w-72" href="#content-w-72" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-72</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 18rem;
</pre>
<h4><a id="content-w-80" href="#content-w-80" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-80</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 20rem;
</pre>
<h4><a id="content-w-96" href="#content-w-96" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-96</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 24rem;
</pre>
<h4><a id="content-w-auto" href="#content-w-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: auto;
</pre>
<h4><a id="content-w-12-1" href="#content-w-12-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%;
</pre>
<h4><a id="content-w-13" href="#content-w-13" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%;
</pre>
<h4><a id="content-w-23" href="#content-w-23" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%;
</pre>
<h4><a id="content-w-14-1" href="#content-w-14-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 25%;
</pre>
<h4><a id="content-w-24-1" href="#content-w-24-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%;
</pre>
<h4><a id="content-w-34" href="#content-w-34" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 75%;
</pre>
<h4><a id="content-w-15-1" href="#content-w-15-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 20%;
</pre>
<h4><a id="content-w-25-1" href="#content-w-25-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 40%;
</pre>
<h4><a id="content-w-35-1" href="#content-w-35-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 60%;
</pre>
<h4><a id="content-w-45" href="#content-w-45" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-4/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 80%;
</pre>
<h4><a id="content-w-16-1" href="#content-w-16-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16.666667%;
</pre>
<h4><a id="content-w-26" href="#content-w-26" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%;
</pre>
<h4><a id="content-w-36-1" href="#content-w-36-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%;
</pre>
<h4><a id="content-w-46" href="#content-w-46" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-4/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%;
</pre>
<h4><a id="content-w-56-1" href="#content-w-56-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-5/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 83.333333%;
</pre>
<h4><a id="content-w-112" href="#content-w-112" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-1/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 8.333333%;
</pre>
<h4><a id="content-w-212" href="#content-w-212" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-2/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16.666667%;
</pre>
<h4><a id="content-w-312" href="#content-w-312" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-3/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 25%;
</pre>
<h4><a id="content-w-412" href="#content-w-412" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-4/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%;
</pre>
<h4><a id="content-w-512" href="#content-w-512" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-5/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 41.666667%;
</pre>
<h4><a id="content-w-612" href="#content-w-612" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-6/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%;
</pre>
<h4><a id="content-w-712" href="#content-w-712" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-7/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 58.333333%;
</pre>
<h4><a id="content-w-812" href="#content-w-812" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-8/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%;
</pre>
<h4><a id="content-w-912" href="#content-w-912" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-9/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 75%;
</pre>
<h4><a id="content-w-1012" href="#content-w-1012" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-10/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 83.333333%;
</pre>
<h4><a id="content-w-1112" href="#content-w-1112" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-11/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 91.666667%;
</pre>
<h4><a id="content-w-full" href="#content-w-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100%;
</pre>
<h4><a id="content-w-screen" href="#content-w-screen" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-screen</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100vw;
</pre>
<h4><a id="content-w-svw" href="#content-w-svw" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-svw</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100svw;
</pre>
<h4><a id="content-w-lvw" href="#content-w-lvw" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-lvw</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100lvw;
</pre>
<h4><a id="content-w-dvw" href="#content-w-dvw" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-dvw</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100dvw;
</pre>
<h4><a id="content-w-min" href="#content-w-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: min-content;
</pre>
<h4><a id="content-w-max" href="#content-w-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: max-content;
</pre>
<h4><a id="content-w-fit" href="#content-w-fit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>w-fit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: fit-content;
</pre>
<h4><a id="content-h-0" href="#content-h-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0px;
</pre>
<h4><a id="content-h-px" href="#content-h-px" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-px</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 1px;
</pre>
<h4><a id="content-h-05" href="#content-h-05" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-0.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.125rem;
</pre>
<h4><a id="content-h-1" href="#content-h-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.25rem;
</pre>
<h4><a id="content-h-15" href="#content-h-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.375rem;
</pre>
<h4><a id="content-h-2" href="#content-h-2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.5rem;
</pre>
<h4><a id="content-h-25" href="#content-h-25" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.625rem;
</pre>
<h4><a id="content-h-3" href="#content-h-3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.75rem;
</pre>
<h4><a id="content-h-35" href="#content-h-35" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-3.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 0.875rem;
</pre>
<h4><a id="content-h-4" href="#content-h-4" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 1rem;
</pre>
<h4><a id="content-h-5" href="#content-h-5" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 1.25rem;
</pre>
<h4><a id="content-h-6" href="#content-h-6" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 1.5rem;
</pre>
<h4><a id="content-h-7" href="#content-h-7" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-7</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 1.75rem;
</pre>
<h4><a id="content-h-8" href="#content-h-8" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-8</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 2rem;
</pre>
<h4><a id="content-h-9" href="#content-h-9" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-9</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 2.25rem;
</pre>
<h4><a id="content-h-10" href="#content-h-10" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-10</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 2.5rem;
</pre>
<h4><a id="content-h-11" href="#content-h-11" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-11</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 2.75rem;
</pre>
<h4><a id="content-h-12" href="#content-h-12" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 3rem;
</pre>
<h4><a id="content-h-14" href="#content-h-14" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-14</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 3.5rem;
</pre>
<h4><a id="content-h-16" href="#content-h-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 4rem;
</pre>
<h4><a id="content-h-20" href="#content-h-20" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-20</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 5rem;
</pre>
<h4><a id="content-h-24" href="#content-h-24" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-24</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 6rem;
</pre>
<h4><a id="content-h-28" href="#content-h-28" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-28</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 7rem;
</pre>
<h4><a id="content-h-32" href="#content-h-32" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-32</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 8rem;
</pre>
<h4><a id="content-h-36" href="#content-h-36" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-36</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 9rem;
</pre>
<h4><a id="content-h-40" href="#content-h-40" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-40</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 10rem;
</pre>
<h4><a id="content-h-44" href="#content-h-44" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-44</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 11rem;
</pre>
<h4><a id="content-h-48" href="#content-h-48" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-48</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 12rem;
</pre>
<h4><a id="content-h-52" href="#content-h-52" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-52</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 13rem;
</pre>
<h4><a id="content-h-56" href="#content-h-56" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-56</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 14rem;
</pre>
<h4><a id="content-h-60" href="#content-h-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 15rem;
</pre>
<h4><a id="content-h-64" href="#content-h-64" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-64</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 16rem;
</pre>
<h4><a id="content-h-72" href="#content-h-72" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-72</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 18rem;
</pre>
<h4><a id="content-h-80" href="#content-h-80" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-80</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 20rem;
</pre>
<h4><a id="content-h-96" href="#content-h-96" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-96</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 24rem;
</pre>
<h4><a id="content-h-auto" href="#content-h-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: auto;
</pre>
<h4><a id="content-h-12-1" href="#content-h-12-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1/2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-h-13" href="#content-h-13" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 33.333333%;
</pre>
<h4><a id="content-h-23" href="#content-h-23" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 66.666667%;
</pre>
<h4><a id="content-h-14-1" href="#content-h-14-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 25%;
</pre>
<h4><a id="content-h-24-1" href="#content-h-24-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-h-34" href="#content-h-34" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-3/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 75%;
</pre>
<h4><a id="content-h-15-1" href="#content-h-15-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 20%;
</pre>
<h4><a id="content-h-25-1" href="#content-h-25-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 40%;
</pre>
<h4><a id="content-h-35-1" href="#content-h-35-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-3/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 60%;
</pre>
<h4><a id="content-h-45" href="#content-h-45" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-4/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 80%;
</pre>
<h4><a id="content-h-16-1" href="#content-h-16-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-1/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 16.666667%;
</pre>
<h4><a id="content-h-26" href="#content-h-26" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-2/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 33.333333%;
</pre>
<h4><a id="content-h-36-1" href="#content-h-36-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-3/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-h-46" href="#content-h-46" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-4/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 66.666667%;
</pre>
<h4><a id="content-h-56-1" href="#content-h-56-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-5/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 83.333333%;
</pre>
<h4><a id="content-h-full" href="#content-h-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 100%;
</pre>
<h4><a id="content-h-screen" href="#content-h-screen" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-screen</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 100vh;
</pre>
<h4><a id="content-h-svh" href="#content-h-svh" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-svh</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 100svh;
</pre>
<h4><a id="content-h-lvh" href="#content-h-lvh" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-lvh</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 100lvh;
</pre>
<h4><a id="content-h-dvh" href="#content-h-dvh" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-dvh</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: 100dvh;
</pre>
<h4><a id="content-h-min" href="#content-h-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: min-content;
</pre>
<h4><a id="content-h-max" href="#content-h-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: max-content;
</pre>
<h4><a id="content-h-fit" href="#content-h-fit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>h-fit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">height</span>: fit-content;
</pre>
<h4><a id="content-min-w-0" href="#content-min-w-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0px;
</pre>
<h4><a id="content-min-w-1" href="#content-min-w-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-1</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.25rem;
</pre>
<h4><a id="content-min-w-2" href="#content-min-w-2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.5rem;
</pre>
<h4><a id="content-min-w-3" href="#content-min-w-3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.75rem;
</pre>
<h4><a id="content-min-w-4" href="#content-min-w-4" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 1rem;
</pre>
<h4><a id="content-min-w-5" href="#content-min-w-5" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 1.25rem;
</pre>
<h4><a id="content-min-w-6" href="#content-min-w-6" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 1.5rem;
</pre>
<h4><a id="content-min-w-7" href="#content-min-w-7" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-7</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 1.75rem;
</pre>
<h4><a id="content-min-w-8" href="#content-min-w-8" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-8</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 2rem;
</pre>
<h4><a id="content-min-w-9" href="#content-min-w-9" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-9</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 2.25rem;
</pre>
<h4><a id="content-min-w-10" href="#content-min-w-10" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-10</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 2.5rem;
</pre>
<h4><a id="content-min-w-11" href="#content-min-w-11" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-11</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 2.75rem;
</pre>
<h4><a id="content-min-w-12" href="#content-min-w-12" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 3rem;
</pre>
<h4><a id="content-min-w-14" href="#content-min-w-14" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-14</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 3.5rem;
</pre>
<h4><a id="content-min-w-16" href="#content-min-w-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 4rem;
</pre>
<h4><a id="content-min-w-20" href="#content-min-w-20" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-20</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 5rem;
</pre>
<h4><a id="content-min-w-24" href="#content-min-w-24" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-24</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 6rem;
</pre>
<h4><a id="content-min-w-28" href="#content-min-w-28" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-28</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 7rem;
</pre>
<h4><a id="content-min-w-32" href="#content-min-w-32" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-32</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 8rem;
</pre>
<h4><a id="content-min-w-36" href="#content-min-w-36" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-36</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 9rem;
</pre>
<h4><a id="content-min-w-40" href="#content-min-w-40" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-40</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 10rem;
</pre>
<h4><a id="content-min-w-44" href="#content-min-w-44" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-44</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 11rem;
</pre>
<h4><a id="content-min-w-48" href="#content-min-w-48" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-48</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 12rem;
</pre>
<h4><a id="content-min-w-52" href="#content-min-w-52" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-52</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 13rem;
</pre>
<h4><a id="content-min-w-56" href="#content-min-w-56" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-56</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 14rem;
</pre>
<h4><a id="content-min-w-60" href="#content-min-w-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 15rem;
</pre>
<h4><a id="content-min-w-64" href="#content-min-w-64" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-64</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 16rem;
</pre>
<h4><a id="content-min-w-72" href="#content-min-w-72" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-72</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 18rem;
</pre>
<h4><a id="content-min-w-80" href="#content-min-w-80" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-80</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 20rem;
</pre>
<h4><a id="content-min-w-96" href="#content-min-w-96" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-96</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 24rem;
</pre>
<h4><a id="content-min-w-px" href="#content-min-w-px" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-px</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 1px;
</pre>
<h4><a id="content-min-w-05" href="#content-min-w-05" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-0.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.125rem;
</pre>
<h4><a id="content-min-w-15" href="#content-min-w-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-1.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.375rem;
</pre>
<h4><a id="content-min-w-25" href="#content-min-w-25" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-2.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.625rem;
</pre>
<h4><a id="content-min-w-35" href="#content-min-w-35" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-3.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 0.875rem;
</pre>
<h4><a id="content-min-w-full" href="#content-min-w-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: 100%;
</pre>
<h4><a id="content-min-w-min" href="#content-min-w-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: min-content;
</pre>
<h4><a id="content-min-w-max" href="#content-min-w-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: max-content;
</pre>
<h4><a id="content-min-w-fit" href="#content-min-w-fit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>min-w-fit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">min-width</span>: fit-content;
</pre>
<h4><a id="content-max-w-0" href="#content-max-w-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0px;
</pre>
<h4><a id="content-max-w-1" href="#content-max-w-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-1</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.25rem;
</pre>
<h4><a id="content-max-w-2" href="#content-max-w-2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.5rem;
</pre>
<h4><a id="content-max-w-3" href="#content-max-w-3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.75rem;
</pre>
<h4><a id="content-max-w-4" href="#content-max-w-4" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 1rem;
</pre>
<h4><a id="content-max-w-5" href="#content-max-w-5" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 1.25rem;
</pre>
<h4><a id="content-max-w-6" href="#content-max-w-6" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 1.5rem;
</pre>
<h4><a id="content-max-w-7" href="#content-max-w-7" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-7</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 1.75rem;
</pre>
<h4><a id="content-max-w-8" href="#content-max-w-8" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-8</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 2rem;
</pre>
<h4><a id="content-max-w-9" href="#content-max-w-9" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-9</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 2.25rem;
</pre>
<h4><a id="content-max-w-10" href="#content-max-w-10" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-10</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 2.5rem;
</pre>
<h4><a id="content-max-w-11" href="#content-max-w-11" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-11</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 2.75rem;
</pre>
<h4><a id="content-max-w-12" href="#content-max-w-12" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 3rem;
</pre>
<h4><a id="content-max-w-14" href="#content-max-w-14" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-14</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 3.5rem;
</pre>
<h4><a id="content-max-w-16" href="#content-max-w-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 4rem;
</pre>
<h4><a id="content-max-w-20" href="#content-max-w-20" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-20</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 5rem;
</pre>
<h4><a id="content-max-w-24" href="#content-max-w-24" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-24</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 6rem;
</pre>
<h4><a id="content-max-w-28" href="#content-max-w-28" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-28</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 7rem;
</pre>
<h4><a id="content-max-w-32" href="#content-max-w-32" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-32</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 8rem;
</pre>
<h4><a id="content-max-w-36" href="#content-max-w-36" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-36</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 9rem;
</pre>
<h4><a id="content-max-w-40" href="#content-max-w-40" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-40</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 10rem;
</pre>
<h4><a id="content-max-w-44" href="#content-max-w-44" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-44</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 11rem;
</pre>
<h4><a id="content-max-w-48" href="#content-max-w-48" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-48</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 12rem;
</pre>
<h4><a id="content-max-w-52" href="#content-max-w-52" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-52</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 13rem;
</pre>
<h4><a id="content-max-w-56" href="#content-max-w-56" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-56</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 14rem;
</pre>
<h4><a id="content-max-w-60" href="#content-max-w-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 15rem;
</pre>
<h4><a id="content-max-w-64" href="#content-max-w-64" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-64</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 16rem;
</pre>
<h4><a id="content-max-w-72" href="#content-max-w-72" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-72</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 18rem;
</pre>
<h4><a id="content-max-w-80" href="#content-max-w-80" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-80</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 20rem;
</pre>
<h4><a id="content-max-w-96" href="#content-max-w-96" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-96</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 24rem;
</pre>
<h4><a id="content-max-w-px" href="#content-max-w-px" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-px</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 1px;
</pre>
<h4><a id="content-max-w-05" href="#content-max-w-05" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-0.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.125rem;
</pre>
<h4><a id="content-max-w-15" href="#content-max-w-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-1.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.375rem;
</pre>
<h4><a id="content-max-w-25" href="#content-max-w-25" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-2.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.625rem;
</pre>
<h4><a id="content-max-w-35" href="#content-max-w-35" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-3.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 0.875rem;
</pre>
<h4><a id="content-max-w-full" href="#content-max-w-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: 100%;
</pre>
<h4><a id="content-max-w-max" href="#content-max-w-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: max-content;
</pre>
<h4><a id="content-max-w-min" href="#content-max-w-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: min-content;
</pre>
<h4><a id="content-max-w-fit" href="#content-max-w-fit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>max-w-fit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">max-width</span>: fit-content;
</pre>
<h4><a id="content-size-0" href="#content-size-0" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-0</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0px; <span class="hl-property">height</span>: 0px;
</pre>
<h4><a id="content-size-px" href="#content-size-px" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-px</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1px; <span class="hl-property">height</span>: 1px;
</pre>
<h4><a id="content-size-05" href="#content-size-05" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-0.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.125rem; <span class="hl-property">height</span>: 0.125rem;
</pre>
<h4><a id="content-size-1" href="#content-size-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.25rem; <span class="hl-property">height</span>: 0.25rem;
</pre>
<h4><a id="content-size-15" href="#content-size-15" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.375rem; <span class="hl-property">height</span>: 0.375rem;
</pre>
<h4><a id="content-size-2" href="#content-size-2" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.5rem; <span class="hl-property">height</span>: 0.5rem;
</pre>
<h4><a id="content-size-25" href="#content-size-25" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.625rem; <span class="hl-property">height</span>: 0.625rem;
</pre>
<h4><a id="content-size-3" href="#content-size-3" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.75rem; <span class="hl-property">height</span>: 0.75rem;
</pre>
<h4><a id="content-size-35" href="#content-size-35" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3.5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 0.875rem; <span class="hl-property">height</span>: 0.875rem;
</pre>
<h4><a id="content-size-4" href="#content-size-4" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1rem; <span class="hl-property">height</span>: 1rem;
</pre>
<h4><a id="content-size-5" href="#content-size-5" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.25rem; <span class="hl-property">height</span>: 1.25rem;
</pre>
<h4><a id="content-size-6" href="#content-size-6" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.5rem; <span class="hl-property">height</span>: 1.5rem;
</pre>
<h4><a id="content-size-7" href="#content-size-7" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-7</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 1.75rem; <span class="hl-property">height</span>: 1.75rem;
</pre>
<h4><a id="content-size-8" href="#content-size-8" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-8</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2rem; <span class="hl-property">height</span>: 2rem;
</pre>
<h4><a id="content-size-9" href="#content-size-9" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-9</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.25rem; <span class="hl-property">height</span>: 2.25rem;
</pre>
<h4><a id="content-size-10" href="#content-size-10" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-10</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.5rem; <span class="hl-property">height</span>: 2.5rem;
</pre>
<h4><a id="content-size-11" href="#content-size-11" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-11</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 2.75rem; <span class="hl-property">height</span>: 2.75rem;
</pre>
<h4><a id="content-size-12" href="#content-size-12" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 3rem; <span class="hl-property">height</span>: 3rem;
</pre>
<h4><a id="content-size-14" href="#content-size-14" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-14</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 3.5rem; <span class="hl-property">height</span>: 3.5rem;
</pre>
<h4><a id="content-size-16" href="#content-size-16" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-16</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 4rem; <span class="hl-property">height</span>: 4rem;
</pre>
<h4><a id="content-size-20" href="#content-size-20" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-20</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 5rem; <span class="hl-property">height</span>: 5rem;
</pre>
<h4><a id="content-size-24" href="#content-size-24" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-24</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 6rem; <span class="hl-property">height</span>: 6rem;
</pre>
<h4><a id="content-size-28" href="#content-size-28" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-28</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 7rem; <span class="hl-property">height</span>: 7rem;
</pre>
<h4><a id="content-size-32" href="#content-size-32" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-32</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 8rem; <span class="hl-property">height</span>: 8rem;
</pre>
<h4><a id="content-size-36" href="#content-size-36" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-36</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 9rem; <span class="hl-property">height</span>: 9rem;
</pre>
<h4><a id="content-size-40" href="#content-size-40" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-40</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 10rem; <span class="hl-property">height</span>: 10rem;
</pre>
<h4><a id="content-size-44" href="#content-size-44" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-44</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 11rem; <span class="hl-property">height</span>: 11rem;
</pre>
<h4><a id="content-size-48" href="#content-size-48" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-48</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 12rem; <span class="hl-property">height</span>: 12rem;
</pre>
<h4><a id="content-size-52" href="#content-size-52" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-52</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 13rem; <span class="hl-property">height</span>: 13rem;
</pre>
<h4><a id="content-size-56" href="#content-size-56" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-56</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 14rem; <span class="hl-property">height</span>: 14rem;
</pre>
<h4><a id="content-size-60" href="#content-size-60" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-60</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 15rem; <span class="hl-property">height</span>: 15rem;
</pre>
<h4><a id="content-size-64" href="#content-size-64" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-64</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16rem; <span class="hl-property">height</span>: 16rem;
</pre>
<h4><a id="content-size-72" href="#content-size-72" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-72</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 18rem; <span class="hl-property">height</span>: 18rem;
</pre>
<h4><a id="content-size-80" href="#content-size-80" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-80</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 20rem; <span class="hl-property">height</span>: 20rem;
</pre>
<h4><a id="content-size-96" href="#content-size-96" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-96</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 24rem; <span class="hl-property">height</span>: 24rem;
</pre>
<h4><a id="content-size-auto" href="#content-size-auto" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-auto</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: auto; <span class="hl-property">height</span>: auto;
</pre>
<h4><a id="content-size-12-1" href="#content-size-12-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/2</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%; <span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-size-13" href="#content-size-13" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%; <span class="hl-property">height</span>: 33.333333%;
</pre>
<h4><a id="content-size-23" href="#content-size-23" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2/3</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%; <span class="hl-property">height</span>: 66.666667%;
</pre>
<h4><a id="content-size-14-1" href="#content-size-14-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 25%; <span class="hl-property">height</span>: 25%;
</pre>
<h4><a id="content-size-24-1" href="#content-size-24-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%; <span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-size-34" href="#content-size-34" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3/4</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 75%; <span class="hl-property">height</span>: 75%;
</pre>
<h4><a id="content-size-15-1" href="#content-size-15-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 20%; <span class="hl-property">height</span>: 20%;
</pre>
<h4><a id="content-size-25-1" href="#content-size-25-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 40%; <span class="hl-property">height</span>: 40%;
</pre>
<h4><a id="content-size-35-1" href="#content-size-35-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 60%; <span class="hl-property">height</span>: 60%;
</pre>
<h4><a id="content-size-45" href="#content-size-45" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-4/5</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 80%; <span class="hl-property">height</span>: 80%;
</pre>
<h4><a id="content-size-16-1" href="#content-size-16-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16.666667%; <span class="hl-property">height</span>: 16.666667%;
</pre>
<h4><a id="content-size-26" href="#content-size-26" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%; <span class="hl-property">height</span>: 33.333333%;
</pre>
<h4><a id="content-size-36-1" href="#content-size-36-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%; <span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-size-46" href="#content-size-46" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-4/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%; <span class="hl-property">height</span>: 66.666667%;
</pre>
<h4><a id="content-size-56-1" href="#content-size-56-1" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-5/6</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 83.333333%; <span class="hl-property">height</span>: 83.333333%;
</pre>
<h4><a id="content-size-112" href="#content-size-112" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-1/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 8.333333%; <span class="hl-property">height</span>: 8.333333%;
</pre>
<h4><a id="content-size-212" href="#content-size-212" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-2/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 16.666667%; <span class="hl-property">height</span>: 16.666667%;
</pre>
<h4><a id="content-size-312" href="#content-size-312" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-3/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 25%; <span class="hl-property">height</span>: 25%;
</pre>
<h4><a id="content-size-412" href="#content-size-412" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-4/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 33.333333%; <span class="hl-property">height</span>: 33.333333%;
</pre>
<h4><a id="content-size-512" href="#content-size-512" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-5/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 41.666667%; <span class="hl-property">height</span>: 41.666667%;
</pre>
<h4><a id="content-size-612" href="#content-size-612" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-6/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 50%; <span class="hl-property">height</span>: 50%;
</pre>
<h4><a id="content-size-712" href="#content-size-712" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-7/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 58.333333%; <span class="hl-property">height</span>: 58.333333%;
</pre>
<h4><a id="content-size-812" href="#content-size-812" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-8/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 66.666667%; <span class="hl-property">height</span>: 66.666667%;
</pre>
<h4><a id="content-size-912" href="#content-size-912" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-9/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 75%; <span class="hl-property">height</span>: 75%;
</pre>
<h4><a id="content-size-1012" href="#content-size-1012" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-10/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 83.333333%; <span class="hl-property">height</span>: 83.333333%;
</pre>
<h4><a id="content-size-1112" href="#content-size-1112" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-11/12</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 91.666667%; <span class="hl-property">height</span>: 91.666667%;
</pre>
<h4><a id="content-size-full" href="#content-size-full" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-full</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: 100%; <span class="hl-property">height</span>: 100%;
</pre>
<h4><a id="content-size-min" href="#content-size-min" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-min</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: min-content; <span class="hl-property">height</span>: min-content;
</pre>
<h4><a id="content-size-max" href="#content-size-max" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-max</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: max-content; <span class="hl-property">height</span>: max-content;
</pre>
<h4><a id="content-size-fit" href="#content-size-fit" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a><code>size-fit</code></h4>
<pre data-lang="css" class="notranslate"><span class="hl-property">width</span>: fit-content; <span class="hl-property">height</span>: fit-content;
</pre>
</details>
<h2><a id="content-colors" href="#content-colors" class="heading-permalink" aria-hidden="true" title="Permalink">¶</a>Colors</h2>
<details>
  <summary>View Colors</summary>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>inherit</h4>
            <div style="background-color: inherit; width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>current</h4>
            <div style="background-color: currentColor; width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>transparent</h4>
            <div style="background-color: transparent; width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>black</h4>
            <div style="background-color: rgb(0 0 0); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>white</h4>
            <div style="background-color: rgb(255 255 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-50</h4>
            <div style="background-color: rgb(248 250 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-100</h4>
            <div style="background-color: rgb(241 245 249); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-200</h4>
            <div style="background-color: rgb(226 232 240); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-300</h4>
            <div style="background-color: rgb(203 213 225); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-400</h4>
            <div style="background-color: rgb(148 163 184); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-500</h4>
            <div style="background-color: rgb(100 116 139); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-600</h4>
            <div style="background-color: rgb(71 85 105); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-700</h4>
            <div style="background-color: rgb(51 65 85); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-800</h4>
            <div style="background-color: rgb(30 41 59); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-900</h4>
            <div style="background-color: rgb(15 23 42); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>slate-950</h4>
            <div style="background-color: rgb(2 6 23); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-50</h4>
            <div style="background-color: rgb(249 250 251); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-100</h4>
            <div style="background-color: rgb(243 244 246); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-200</h4>
            <div style="background-color: rgb(229 231 235); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-300</h4>
            <div style="background-color: rgb(209 213 219); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-400</h4>
            <div style="background-color: rgb(156 163 175); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-500</h4>
            <div style="background-color: rgb(107 114 128); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-600</h4>
            <div style="background-color: rgb(75 85 99); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-700</h4>
            <div style="background-color: rgb(55 65 81); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-800</h4>
            <div style="background-color: rgb(31 41 55); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-900</h4>
            <div style="background-color: rgb(17 24 39); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>gray-950</h4>
            <div style="background-color: rgb(3 7 18); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-50</h4>
            <div style="background-color: rgb(250 250 250); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-100</h4>
            <div style="background-color: rgb(244 244 245); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-200</h4>
            <div style="background-color: rgb(228 228 231); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-300</h4>
            <div style="background-color: rgb(212 212 216); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-400</h4>
            <div style="background-color: rgb(161 161 170); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-500</h4>
            <div style="background-color: rgb(113 113 122); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-600</h4>
            <div style="background-color: rgb(82 82 91); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-700</h4>
            <div style="background-color: rgb(63 63 70); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-800</h4>
            <div style="background-color: rgb(39 39 42); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-900</h4>
            <div style="background-color: rgb(24 24 27); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>zinc-950</h4>
            <div style="background-color: rgb(9 9 11); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-50</h4>
            <div style="background-color: rgb(250 250 250); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-100</h4>
            <div style="background-color: rgb(245 245 245); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-200</h4>
            <div style="background-color: rgb(229 229 229); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-300</h4>
            <div style="background-color: rgb(212 212 212); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-400</h4>
            <div style="background-color: rgb(163 163 163); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-500</h4>
            <div style="background-color: rgb(115 115 115); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-600</h4>
            <div style="background-color: rgb(82 82 82); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-700</h4>
            <div style="background-color: rgb(64 64 64); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-800</h4>
            <div style="background-color: rgb(38 38 38); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-900</h4>
            <div style="background-color: rgb(23 23 23); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>neutral-950</h4>
            <div style="background-color: rgb(10 10 10); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-50</h4>
            <div style="background-color: rgb(250 250 249); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-100</h4>
            <div style="background-color: rgb(245 245 244); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-200</h4>
            <div style="background-color: rgb(231 229 228); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-300</h4>
            <div style="background-color: rgb(214 211 209); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-400</h4>
            <div style="background-color: rgb(168 162 158); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-500</h4>
            <div style="background-color: rgb(120 113 108); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-600</h4>
            <div style="background-color: rgb(87 83 78); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-700</h4>
            <div style="background-color: rgb(68 64 60); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-800</h4>
            <div style="background-color: rgb(41 37 36); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-900</h4>
            <div style="background-color: rgb(28 25 23); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>stone-950</h4>
            <div style="background-color: rgb(12 10 9); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-50</h4>
            <div style="background-color: rgb(254 242 242); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-100</h4>
            <div style="background-color: rgb(254 226 226); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-200</h4>
            <div style="background-color: rgb(254 202 202); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-300</h4>
            <div style="background-color: rgb(252 165 165); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-400</h4>
            <div style="background-color: rgb(248 113 113); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-500</h4>
            <div style="background-color: rgb(239 68 68); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-600</h4>
            <div style="background-color: rgb(220 38 38); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-700</h4>
            <div style="background-color: rgb(185 28 28); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-800</h4>
            <div style="background-color: rgb(153 27 27); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-900</h4>
            <div style="background-color: rgb(127 29 29); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>red-950</h4>
            <div style="background-color: rgb(69 10 10); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-50</h4>
            <div style="background-color: rgb(255 247 237); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-100</h4>
            <div style="background-color: rgb(255 237 213); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-200</h4>
            <div style="background-color: rgb(254 215 170); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-300</h4>
            <div style="background-color: rgb(253 186 116); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-400</h4>
            <div style="background-color: rgb(251 146 60); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-500</h4>
            <div style="background-color: rgb(249 115 22); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-600</h4>
            <div style="background-color: rgb(234 88 12); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-700</h4>
            <div style="background-color: rgb(194 65 12); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-800</h4>
            <div style="background-color: rgb(154 52 18); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-900</h4>
            <div style="background-color: rgb(124 45 18); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>orange-950</h4>
            <div style="background-color: rgb(67 20 7); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-50</h4>
            <div style="background-color: rgb(255 251 235); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-100</h4>
            <div style="background-color: rgb(254 243 199); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-200</h4>
            <div style="background-color: rgb(253 230 138); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-300</h4>
            <div style="background-color: rgb(252 211 77); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-400</h4>
            <div style="background-color: rgb(251 191 36); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-500</h4>
            <div style="background-color: rgb(245 158 11); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-600</h4>
            <div style="background-color: rgb(217 119 6); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-700</h4>
            <div style="background-color: rgb(180 83 9); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-800</h4>
            <div style="background-color: rgb(146 64 14); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-900</h4>
            <div style="background-color: rgb(120 53 15); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>amber-950</h4>
            <div style="background-color: rgb(69 26 3); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-50</h4>
            <div style="background-color: rgb(254 252 232); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-100</h4>
            <div style="background-color: rgb(254 249 195); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-200</h4>
            <div style="background-color: rgb(254 240 138); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-300</h4>
            <div style="background-color: rgb(253 224 71); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-400</h4>
            <div style="background-color: rgb(250 204 21); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-500</h4>
            <div style="background-color: rgb(234 179 8); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-600</h4>
            <div style="background-color: rgb(202 138 4); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-700</h4>
            <div style="background-color: rgb(161 98 7); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-800</h4>
            <div style="background-color: rgb(133 77 14); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-900</h4>
            <div style="background-color: rgb(113 63 18); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>yellow-950</h4>
            <div style="background-color: rgb(66 32 6); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-50</h4>
            <div style="background-color: rgb(247 254 231); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-100</h4>
            <div style="background-color: rgb(236 252 203); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-200</h4>
            <div style="background-color: rgb(217 249 157); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-300</h4>
            <div style="background-color: rgb(190 242 100); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-400</h4>
            <div style="background-color: rgb(163 230 53); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-500</h4>
            <div style="background-color: rgb(132 204 22); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-600</h4>
            <div style="background-color: rgb(101 163 13); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-700</h4>
            <div style="background-color: rgb(77 124 15); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-800</h4>
            <div style="background-color: rgb(63 98 18); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-900</h4>
            <div style="background-color: rgb(54 83 20); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>lime-950</h4>
            <div style="background-color: rgb(26 46 5); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-50</h4>
            <div style="background-color: rgb(240 253 244); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-100</h4>
            <div style="background-color: rgb(220 252 231); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-200</h4>
            <div style="background-color: rgb(187 247 208); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-300</h4>
            <div style="background-color: rgb(134 239 172); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-400</h4>
            <div style="background-color: rgb(74 222 128); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-500</h4>
            <div style="background-color: rgb(34 197 94); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-600</h4>
            <div style="background-color: rgb(22 163 74); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-700</h4>
            <div style="background-color: rgb(21 128 61); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-800</h4>
            <div style="background-color: rgb(22 101 52); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-900</h4>
            <div style="background-color: rgb(20 83 45); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>green-950</h4>
            <div style="background-color: rgb(5 46 22); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-50</h4>
            <div style="background-color: rgb(236 253 245); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-100</h4>
            <div style="background-color: rgb(209 250 229); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-200</h4>
            <div style="background-color: rgb(167 243 208); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-300</h4>
            <div style="background-color: rgb(110 231 183); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-400</h4>
            <div style="background-color: rgb(52 211 153); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-500</h4>
            <div style="background-color: rgb(16 185 129); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-600</h4>
            <div style="background-color: rgb(5 150 105); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-700</h4>
            <div style="background-color: rgb(4 120 87); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-800</h4>
            <div style="background-color: rgb(6 95 70); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-900</h4>
            <div style="background-color: rgb(6 78 59); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>emerald-950</h4>
            <div style="background-color: rgb(2 44 34); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-50</h4>
            <div style="background-color: rgb(240 253 250); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-100</h4>
            <div style="background-color: rgb(204 251 241); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-200</h4>
            <div style="background-color: rgb(153 246 228); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-300</h4>
            <div style="background-color: rgb(94 234 212); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-400</h4>
            <div style="background-color: rgb(45 212 191); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-500</h4>
            <div style="background-color: rgb(20 184 166); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-600</h4>
            <div style="background-color: rgb(13 148 136); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-700</h4>
            <div style="background-color: rgb(15 118 110); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-800</h4>
            <div style="background-color: rgb(17 94 89); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-900</h4>
            <div style="background-color: rgb(19 78 74); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>teal-950</h4>
            <div style="background-color: rgb(4 47 46); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-50</h4>
            <div style="background-color: rgb(236 254 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-100</h4>
            <div style="background-color: rgb(207 250 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-200</h4>
            <div style="background-color: rgb(165 243 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-300</h4>
            <div style="background-color: rgb(103 232 249); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-400</h4>
            <div style="background-color: rgb(34 211 238); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-500</h4>
            <div style="background-color: rgb(6 182 212); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-600</h4>
            <div style="background-color: rgb(8 145 178); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-700</h4>
            <div style="background-color: rgb(14 116 144); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-800</h4>
            <div style="background-color: rgb(21 94 117); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-900</h4>
            <div style="background-color: rgb(22 78 99); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>cyan-950</h4>
            <div style="background-color: rgb(8 51 68); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-50</h4>
            <div style="background-color: rgb(240 249 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-100</h4>
            <div style="background-color: rgb(224 242 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-200</h4>
            <div style="background-color: rgb(186 230 253); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-300</h4>
            <div style="background-color: rgb(125 211 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-400</h4>
            <div style="background-color: rgb(56 189 248); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-500</h4>
            <div style="background-color: rgb(14 165 233); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-600</h4>
            <div style="background-color: rgb(2 132 199); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-700</h4>
            <div style="background-color: rgb(3 105 161); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-800</h4>
            <div style="background-color: rgb(7 89 133); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-900</h4>
            <div style="background-color: rgb(12 74 110); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>sky-950</h4>
            <div style="background-color: rgb(8 47 73); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-50</h4>
            <div style="background-color: rgb(239 246 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-100</h4>
            <div style="background-color: rgb(219 234 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-200</h4>
            <div style="background-color: rgb(191 219 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-300</h4>
            <div style="background-color: rgb(147 197 253); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-400</h4>
            <div style="background-color: rgb(96 165 250); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-500</h4>
            <div style="background-color: rgb(59 130 246); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-600</h4>
            <div style="background-color: rgb(37 99 235); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-700</h4>
            <div style="background-color: rgb(29 78 216); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-800</h4>
            <div style="background-color: rgb(30 64 175); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-900</h4>
            <div style="background-color: rgb(30 58 138); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>blue-950</h4>
            <div style="background-color: rgb(23 37 84); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-50</h4>
            <div style="background-color: rgb(238 242 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-100</h4>
            <div style="background-color: rgb(224 231 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-200</h4>
            <div style="background-color: rgb(199 210 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-300</h4>
            <div style="background-color: rgb(165 180 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-400</h4>
            <div style="background-color: rgb(129 140 248); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-500</h4>
            <div style="background-color: rgb(99 102 241); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-600</h4>
            <div style="background-color: rgb(79 70 229); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-700</h4>
            <div style="background-color: rgb(67 56 202); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-800</h4>
            <div style="background-color: rgb(55 48 163); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-900</h4>
            <div style="background-color: rgb(49 46 129); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>indigo-950</h4>
            <div style="background-color: rgb(30 27 75); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-50</h4>
            <div style="background-color: rgb(245 243 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-100</h4>
            <div style="background-color: rgb(237 233 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-200</h4>
            <div style="background-color: rgb(221 214 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-300</h4>
            <div style="background-color: rgb(196 181 253); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-400</h4>
            <div style="background-color: rgb(167 139 250); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-500</h4>
            <div style="background-color: rgb(139 92 246); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-600</h4>
            <div style="background-color: rgb(124 58 237); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-700</h4>
            <div style="background-color: rgb(109 40 217); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-800</h4>
            <div style="background-color: rgb(91 33 182); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-900</h4>
            <div style="background-color: rgb(76 29 149); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>violet-950</h4>
            <div style="background-color: rgb(46 16 101); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-50</h4>
            <div style="background-color: rgb(250 245 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-100</h4>
            <div style="background-color: rgb(243 232 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-200</h4>
            <div style="background-color: rgb(233 213 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-300</h4>
            <div style="background-color: rgb(216 180 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-400</h4>
            <div style="background-color: rgb(192 132 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-500</h4>
            <div style="background-color: rgb(168 85 247); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-600</h4>
            <div style="background-color: rgb(147 51 234); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-700</h4>
            <div style="background-color: rgb(126 34 206); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-800</h4>
            <div style="background-color: rgb(107 33 168); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-900</h4>
            <div style="background-color: rgb(88 28 135); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>purple-950</h4>
            <div style="background-color: rgb(59 7 100); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-50</h4>
            <div style="background-color: rgb(253 244 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-100</h4>
            <div style="background-color: rgb(250 232 255); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-200</h4>
            <div style="background-color: rgb(245 208 254); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-300</h4>
            <div style="background-color: rgb(240 171 252); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-400</h4>
            <div style="background-color: rgb(232 121 249); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-500</h4>
            <div style="background-color: rgb(217 70 239); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-600</h4>
            <div style="background-color: rgb(192 38 211); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-700</h4>
            <div style="background-color: rgb(162 28 175); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-800</h4>
            <div style="background-color: rgb(134 25 143); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-900</h4>
            <div style="background-color: rgb(112 26 117); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>fuchsia-950</h4>
            <div style="background-color: rgb(74 4 78); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-50</h4>
            <div style="background-color: rgb(253 242 248); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-100</h4>
            <div style="background-color: rgb(252 231 243); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-200</h4>
            <div style="background-color: rgb(251 207 232); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-300</h4>
            <div style="background-color: rgb(249 168 212); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-400</h4>
            <div style="background-color: rgb(244 114 182); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-500</h4>
            <div style="background-color: rgb(236 72 153); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-600</h4>
            <div style="background-color: rgb(219 39 119); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-700</h4>
            <div style="background-color: rgb(190 24 93); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-800</h4>
            <div style="background-color: rgb(157 23 77); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-900</h4>
            <div style="background-color: rgb(131 24 67); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>pink-950</h4>
            <div style="background-color: rgb(80 7 36); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-50</h4>
            <div style="background-color: rgb(255 241 242); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-100</h4>
            <div style="background-color: rgb(255 228 230); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-200</h4>
            <div style="background-color: rgb(254 205 211); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-300</h4>
            <div style="background-color: rgb(253 164 175); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-400</h4>
            <div style="background-color: rgb(251 113 133); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-500</h4>
            <div style="background-color: rgb(244 63 94); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-600</h4>
            <div style="background-color: rgb(225 29 72); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-700</h4>
            <div style="background-color: rgb(190 18 60); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-800</h4>
            <div style="background-color: rgb(159 18 57); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-900</h4>
            <div style="background-color: rgb(136 19 55); width: 100px; height: 50px;"></div>
            </div>
<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
            <h4>rose-950</h4>
            <div style="background-color: rgb(76 5 25); width: 100px; height: 50px;"></div>
            </div>
</details>

@endsection