<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //     return view('blog', compact('title', "posts" ));
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|string',
        ]);
        $request->user()->posts()->create([
            'body' => $request->body,
        ]);

        return back();

    }
}
