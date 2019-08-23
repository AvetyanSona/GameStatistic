@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks Add News </title>
@endsection

@section('content')

    <form  action="{{route('wot.news.store')}}" method="post">
        @csrf
        <h1 class="m-0 my-3">Create New One</h1>
        <div id="success" class="alert alert-success" role="alert">
            You've done your best
        </div>
        <div id="danger" class="alert alert-danger" role="alert">
            You must fill all fields
        </div>
        <div class="input-group my-3  summernote" >
            <div class="input-group-prepend">
                <span class="input-group-text">News Content</span>
            </div>
            <textarea id="summernote" name="summernote" rows="7" class="form-control " aria-label="News Content"></textarea>
        </div>
        @if ($errors->has('content'))
            <div class="error text-danger">{{ $errors->first('content') }}</div>
        @endif
        <div class="input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">News Title</span>
            </div>
            <input id="title" name="title" type="text"  class="form-control"  aria-describedby="basic-addon3">

        </div>
        @if ($errors->has('title'))
            <div class="error text-danger">{{ $errors->first('title') }}</div>
        @endif
        <div class="input-group my-3" >
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Upload Image</span>
            </div>
            <input type="file" name="main_picture" class="form-control " id="main_image" aria-describedby="basic-addon3">

        </div>
        @if ($errors->has('main_picture'))
            <div class="error text-danger">{{ $errors->first('main_picture') }}</div>
        @endif
        <div class="d-flex justify-content-center align-items-center">
            <img style="width:100px;height: 100px;" id="image_preview" src="#" alt="your image" />
        </div>
        <div class="input-group my-3">
            <button type="submit"  id="addNews" class="btn btn-outline-warning btn-lg btn-block">Add News</button>
        </div>
    </form>
@endsection