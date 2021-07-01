<?php

namespace App\Http\Controllers;

use App\Models\HYAcademy;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin Panel";
        return view('admin.admin', compact("title"));
    }
    public function hyacademy()
    {
        return view('admin.harvestyield-academy.index', [
            'title' => "Harvestyield Academy",
            'students' => HYAcademy::with('user')->paginate(6),
        ]);
    }
}
