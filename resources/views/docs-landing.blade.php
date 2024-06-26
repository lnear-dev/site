@extends('landing.__layout')
@section('main')
{!! \Domain::header() !!}
<div class="card-list">
    <h1>Lnear Docs</h1>
    <p>Welcome to the Lnear documentation. Here you can find all the information related to all my packages.</p>
    <span>
        {!! \Docs\Domain::allCards() !!}
    </span>
</div>
@endsection
{!! \Domain::footer() !!}
