@extends('layouts.main')
@section('head')
@vite('resources/css/app.css')
@vite('resources/ts/app.ts')
@yield('head-slot')
@endsection
@section('content')
<main class="container" id="main">
    @yield('main')
</main>
@endsection
