@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks </title>
@endsection

{{--@php dd(isActiveRoute('wot-search')) @endphp--}}

@section('content')
    <h1 style="color:white"> World of tanks </h1>
{{--    @if(isActiveRoute('wot-search') == 'active')--}}
        @include('components.searchbar')
{{--    @endif--}}
@endsection
