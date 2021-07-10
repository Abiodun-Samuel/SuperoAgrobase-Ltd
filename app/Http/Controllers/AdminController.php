<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\HYAcademy;
use App\Models\HyacademyCourse;
use App\Models\HyacademyNews;
use App\Models\LatestUpdate;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

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

        return view('admin.admin', compact("title", "users", 'blogs', 'updates', 'hyacademy', 'students'));
    }
    public function hyacademy()
    {
        $students = HYAcademy::with('user')->get();
        $title = "Harvestyield Academy";
        // generate addmission letter pdf and store
        $pdf = PDF::loadView('admin.harvestyield-academy.harvestyield-students', ['students' => $students])->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->save(public_path('images/HYAcademy/Harvestyield-academy-students.pdf'));

        return view('admin.harvestyield-academy.index', compact('title', 'students'));
    }
    public function course(Request $request)
    {
        $request->validate([
            'week' => 'required|integer',
            'topic' => 'required|string|max:255',
            'material' => 'mimes:jpeg,jpg,png,docx,doc,pdf|max:2024',
        ]);
        if ($request->has('material')) {
            $image = $request->material;
            $filename = $request->topic . '.' . $request->material->extension();
            $image->move(public_path('images/HYAcademy/course'), $filename);
            HyacademyCourse::create([
                'week' => $request->week,
                'topic' => $request->topic,
                'material' => $filename,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            HyacademyCourse::create([
                'week' => $request->week,
                'topic' => $request->topic,
                'user_id' => auth()->user()->id,
            ]);
        }
        return back()->with('course', "Course Content has been Uploaded Successfully ");
    }
    public function news(Request $request)
    {
        $request->validate([
            'news' => 'required|string|max:255',
        ]);
        HyacademyNews::create([
            'news' => $request->news,
            'user_id' => auth()->user()->id,
        ]);
        return back()->with('news', "Notications/News have been sent successfully");

    }
}
