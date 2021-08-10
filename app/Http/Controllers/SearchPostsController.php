<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class SearchPostsController extends Controller
{
    //

    public function index(Request $request)
    {
        $request->validate([
            'query' => 'required',
        ]);

        $query = $request->input('query');
        $posts = WinkPost::where('title','like','%$query%')->orWhere('body','like','%$query%')->paginate(6);
        return view('/searched-results',compact($posts));
    }
}
