
{{--@php dd($news_data) @endphp--}}
@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks News </title>
@endsection

@section('content')

<div class="card text-center bg-transparent text-white " >
    <div class="card-header d-flex justify-content-center align-items-center" >
        <img style="max-width: 300px;max-height: 225px;" src="{{$news_data->main_picture}}}" class="card-img" alt="news_photo">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$news_data->title}}</h5>
        <p class="card-text">{!! $news_data->content !!}</p>
    </div>
</div>

@endsection