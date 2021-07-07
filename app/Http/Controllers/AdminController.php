<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\HYAcademy;
use App\Models\LatestUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin Panel";
        $users = User::count();
        $students = HYAcademy::count();
        $hyacademy = HYAcademy::with('user')->paginate(5);
        $blogs = Blog::with('user')->paginate(5);
        $updates = LatestUpdate::with('user')->paginate(5);
        return view('admin.admin', compact("title", "users", 'hyacademy', 'blogs', 'updates', 'students'));
    }
    public function hyacademy()
    {
        return view('admin.harvestyield-academy.index', [
            'title' => "Harvestyield Academy",
            'students' => HYAcademy::with('user')->paginate(6),
        ]);
    }
}
