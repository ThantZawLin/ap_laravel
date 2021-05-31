@extends('layout')
@section('title','Create Post')
@section('content')
<h1 class="text-center">Simle Blog Site</h1>
<div class="container ">


    <div class="card my-3">
      
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif
        <div class="card-header">
            Create New Post
        </div>

        <div class="card-body">
            <form action="{{url('/posts')}}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control {{($errors->first('title') ? 'is-invalid' : '')}}" id="name" value="{{ old('title') }}">
                    <div class="invalid-feedback">
                       The title field is required.
                    </div>
                </div>
                
                <!-- <div class="form-group">
                    <label for="exampleFormCategory">Category</label>
                    <input type="text" name="category" class="form-control {{($errors->first('category') ? 'is-invalid' : '')}}" id="exampleFormCategory" value="{{ old('category') }}">
                    <div class="invalid-feedback">
                       The Category field is required.
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control {{($errors->first('description') ? 'is-invalid' : '')}}" value="{{ old('description') }}" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                    <div class="invalid-feedback">
                       The description field is required.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Post</button>
                <!-- <a href="{{url('/posts')}}" class="btn btn-success">Back</a> -->
                <a href="/Ap_laravel/blog/public/posts/" class="btn btn-success">Back</a>
            </form>
        </div>

    </div>

</div>
@endsection