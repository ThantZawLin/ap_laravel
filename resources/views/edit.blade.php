@extends('layout')
@section('title','Create Post')
@section('content')
<h1 class="text-center">Simle Blog Site</h1>
<div class="container ">


    <div class="card my-3">


        <div class="card-header">
            Edit Post
        </div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif
            <form action="/Ap_laravel/blog/public/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control {{($errors->first('title') ? 'is-invalid' : '')}}" id="name" value="{{ old('title', $post->title) }}">
                    <div class="invalid-feedback">
                        The title field is required.
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control {{($errors->first('description') ? 'is-invalid' : '')}}" id="exampleFormControlTextarea1" name="description" rows="3">{{ old('description', $post->description)}}</textarea>
                    <div class="invalid-feedback">
                        The description field is required.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <!-- <a href="{{url('/posts')}}" class="btn btn-success">Back</a> -->
                <a href="/Ap_laravel/blog/public/posts/" class="btn btn-success">Back</a>
            </form>
        </div>

    </div>

</div>
@endsection