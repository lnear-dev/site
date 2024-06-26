@extends('layouts.main')
@section('head')
<title>Lnear Docs</title>
@vite('resources/css/docs.css')
@vite('resources/ts/docs.ts')
@endsection
@section('content')
{!! \Domain::header() !!}
<div id="docs">
    @if(isset($current))
    <aside class="sidebar">
        <nav>
            <ul>
                @foreach($packages as $pack)
                <li>
                    <a href="/{{ $pack }}" class="{{ $pack === $current ? 'active' : '' }}">{{ ucfirst($pack) }}</a></li>
                @endforeach
            </ul>
        </nav>
    </aside>
    @endif
    <div class="container">
        @yield('doc')
    </div>
    <aside>
        @yield('toc')
    </aside>
</div>
{!! \Domain::footer() !!}
@endsection
