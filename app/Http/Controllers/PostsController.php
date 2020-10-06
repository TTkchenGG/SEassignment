<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PostsController extends Controller
{

    public function index(){

        $posts = Post::All()->sortByDesc('created_at');

        return view('posts.index', compact('posts'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){

        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'title' => 'required',
            'information' => 'required'
        ]);


        auth()->user()->posts()->create([
            'title' => $data['title'],
            'information' => $data['information']
        ]);

        return redirect('/info');
    }

    public function show(\App\Post $post){
        return view('posts.show', compact('post'));
    }
}
