@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks </title>
@endsection


@section('content')
    <div class="page-content container mt-5">
        <div class="row">
            <div class="col-12 py-3">
                @include('components.searchbar')
                <div id="statistic" class="mt-4"></div>
            </div>
        </div>
    </div>

@endsection
