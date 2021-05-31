@extends('layout')
@section('title','Home')
@section('content')

<h1 class="text-center">Simle Blog Site</h1>
<div class="container">
 
    @if(session('Delete'))
    <div class="alert alert-success" role="alert">
            {{session('Delete')}}
        </div>
    @endif
    <a href="posts/create" class="btn btn-success">Add Post</a>
    
    @foreach($data as $post)
    <div class="card my-3">
        <div class="card-header">
            Content
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                
           
             <form action="/Ap_laravel/blog/public/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                    <a href="posts/{{$post->id}}" class="btn btn-primary">View</a>
                    <a href="posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger ">Delete</button>
             </form>
        </div>
    </div>
    @endforeach
</div>
@endsection