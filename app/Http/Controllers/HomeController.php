<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::orderBy('id','desc')->get();
       
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequest $request)
    {
        // dd($request->all());

        // Retrieve the validated input data...
        // $validated = $request->validated();

    //    $request->validate([
    //         'title' => 'required|unique:posts|max:255',
    //         'description' => 'required',
    //     ]);


        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();

        Post::create([
           'title' => $request->title,
           'description' => $request->description
        ]);
       
        return redirect('posts/create')->with('status','Post Create Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) // <-- Using Route Model Binding
    {
        // $post = Post::findOrFail($id);
        // dd($post->categories->name);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePostRequest $request, Post $post)
    {
        // $post = Post::findOrFail($id);
     
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();

        $post->create([
            'title' => $request->title,
            'description' => $request->description
         ]);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts')->with('Delete','Delete Successfully');
    }
}
