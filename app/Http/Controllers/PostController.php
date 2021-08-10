<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('author')->orderBy('created_at','desc')->paginate(8);
        return view('blog.index')->with('posts', $posts);
    }

    public function show(WinkPost $post)
    {
        return(view('blog.show')->with('post',$post));
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required',
        ]);

        $query = $request->input('query');
//        dd($query);
        $posts = WinkPost::where('title','like',"%$query%")->orWhere('body','like',"%$query%")->paginate(6);
        return view('blog.searched-results')->with('posts',$posts);
    }
}
