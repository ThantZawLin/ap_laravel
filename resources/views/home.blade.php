@extends('layout')
@section('title','Home')
@section('content')
<h1 class="text-center">Simle Blog Site</h1>
<div class="container ">
    @foreach($data as $post)
    <div class="card my-3">
        <div class="card-header">
            Content
        </div>

        <div class="card-body">
            <h5 class="card-title">{{$post->tilte}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <a href="#" class="btn btn-primary">More</a>
        </div>

    </div>
    @endforeach
</div>
@endsection