<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Blog;
use App\Models\User;
use App\Models\HYAcademy;
use App\Models\LatestUpdate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin Panel";
        $users = User::count();
        $hyacademy = HYAcademy::count();
        $students = HYAcademy::paginate(5);
        $blogs = Blog::with('user')->paginate(5);
        $updates = LatestUpdate::with('user')->paginate(5);


        return view('admin.admin', compact("title", "users", 'blogs', 'updates', 'hyacademy','students'));
    }
    public function hyacademy()
    {
        return view('admin.harvestyield-academy.index', [
            'title' => "Harvestyield Academy",
            'students' => HYAcademy::with('user')->get(),
        ]);
    }
}
