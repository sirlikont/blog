<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PublicController extends Controller
{
    public function index()
    {

        $posts = Post::simplePaginate();
        //$posts = Post::paginate();
        return view('index', compact('posts'));
    }
    public function about()
    {
        return view('about');
    }
}
