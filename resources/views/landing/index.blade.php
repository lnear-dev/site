@extends('layouts.main')
@section('head')
@vite('resources/css/landing.css')
@vite('resources/ts/app.ts')
@endsection
@section('content')
{!! \Domain::header() !!}
<main class="container">
    <section>
        <span>
            <span>
                <div>
                    <h1>Hi, my name is Lanre.</h1>
                    <p>
                        Software has been an integral part of my
                        professional journey for over a decade, during
                        which I've honed my skills through self-teaching
                        and dedicated practice. I am excited about the
                        opportunity to contribute to the ecosystem of
                        your company.
                    </p>
                </div>
            </span>
            @include('landing.stack-card')
        </span>
        @include('landing.packages-card')
        @include('landing.posts-card')
    </section>
</main>
{!! \Domain::footer() !!}
@endsection
