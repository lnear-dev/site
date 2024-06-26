@extends('layouts.main')
@section('head')
<title>Lnear @yield('title')</title>
@vite('resources/css/docs.css')
@vite('resources/ts/docs.ts')
@endsection
@section('content')
<main class="error-page">
    <a class="card" href="/">
        <h2>@yield('code'): @yield('message')</h2>
        <h2 style="color:var(--blue);">Go back to the home page</h2>
    </a>
</main>
@endsection
