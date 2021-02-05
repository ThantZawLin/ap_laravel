<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('home', ['data' => $data]);
    }
    public function about()
    {

        return view('about');
    }
    public function contact()
    {

        return view('contact');
    }
}
