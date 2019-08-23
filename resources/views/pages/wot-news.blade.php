@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks News </title>
@endsection

@section('content')

<div class="container" >
    <h1 class="m-0 mt-3">News Feed</h1>>
    @if(auth()->user()->role_id == 3 )
        <div class="d-flex justify-content-center mb-5">
            <button class="btn btn-light"><a class="text-muted" href="{{route('wot.news.create')}}">Add New</a></button>
        </div>
    @endif
    @foreach ($news as $news_item)
        <div id="newsContainer"  class="card mb-3 bg-transparent text-white " style="max-width: 1070px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset($news_item->main_picture)}}" class="card-img" alt="news_photo">
                </div>
                <div class="col-md-8">
                    <div class="card-body" >
                        <h2 class="card-title text-center text-light text-justify">{{$news_item->title}}</h2>
                        <div class="card-text" >{!! $news_item->content !!}</div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-light" type="submit"><a class="text-dark" href="{{ route('wot.news.show',$news_item->id) }}">Read More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


    <div id="pagination" class="d-flex justify-content-center align-items-center bg-transparent">{{ $news->links() }}</div>


@endsection