@extends('layouts.admin')

@section('title')
    <title> Games Stats | World Of Tanks Add News </title>
@endsection

@section('content')

    <form action="" method="post">
        <h1 class="m-0 my-3">Create New One</h1>
        <div class="input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text">News Content</span>
            </div>
            <textarea id="newsContent" name="newsContent" rows="7" class="form-control" aria-label="News Content"></textarea>
        </div>

        <div class="input-group my-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">News Title</span>
            </div>
            <input type="text" class="form-control"  aria-describedby="basic-addon3">
        </div>

        <div class="input-group my-3" >
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">Upload Image</span>
            </div>
            <input type="file" class="form-control" id="main_image" aria-describedby="basic-addon3">
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <img style="width:100px;height: 100px;" id="image_preview" src="#" alt="your image" />
        </div>
        <div class="input-group my-3">
            <button type="submit" class="btn btn-outline-warning btn-lg btn-block">Add News</button>
        </div>
    </form>


@endsection