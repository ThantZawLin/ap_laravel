@extends('layout')
@section('title','Home')
@section('content')
<h1 class="text-center">Simle Blog Site</h1>
<div class="container ">
   
    
    <div class="card my-3">
       

        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
          
            <a href="{{url('/posts')}}" class="btn btn-success">Back</a>
        </div>

    </div>
   
</div>
@endsection