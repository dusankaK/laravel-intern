<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {   
        //$posts = Post::all();
        $posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);

        //deleting
        // $posts = Post::find(1);
        //$posts->delete();
       
        return $posts;
        
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);

        return $posts;
    }

    public function store(Request $request) 
    {   
        $posts = new Post;
        $posts->content = $request->content;
        $posts->title = $request->title;
        $posts->user_id = $request->user_id;

        $posts->save();
    }

    public function update($id)
    {
        $posts = Post::find(5);
        $posts->title = 'New title';
        $posts->save();
    }
}
