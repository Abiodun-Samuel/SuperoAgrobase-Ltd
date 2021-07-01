<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $title = $user->name;
        $posts = $user->posts()->with('user', 'likes')->paginate(5);
        // dd($posts);
        return view('users', [
            'user' => $user,
            'title' => $title,
            "posts" => $posts,
        ]);
    }
}
