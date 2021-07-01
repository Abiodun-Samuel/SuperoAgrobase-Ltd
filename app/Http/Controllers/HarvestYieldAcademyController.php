<?php

namespace App\Http\Controllers;

use App\Mail\HYAcademyMail;
use App\Models\HYAcademy;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HarvestYieldAcademyController extends Controller
{
    public function index()
    {
        $title = 'HarvestYield Academy';
        return view('HYAcademy.form', compact('title'));
    }
    public function store(Request $request)
    {
        // validate input
        $request->validate([
            'name' => 'required|string|unique:h_y_academies',
            'phone' => 'required|digits:11|unique:h_y_academies',
            'gender' => 'required|string',
            'state' => 'required|string',
            'lga' => 'required|string',
            'education' => 'required|string',
            'media' => 'required|string',
        ]);

        // Generate admission no
        $year = \Carbon\Carbon::now()->format('Y');
        $year = Str::of($year)->substr(2, 2);
        $admission_no = "HYA/" . Str::limit(Str::upper(auth()->user()->name), 3, "/") . $year . "-" . Str::upper(Str::random(4));

        // store applicants
        $hyacademy = new HYAcademy();
        $hyacademy->name = $request->name;
        $hyacademy->phone = $request->phone;
        $hyacademy->gender = $request->gender;
        $hyacademy->address = $request->lga . " LGA, " . $request->state;
        $hyacademy->education = $request->education;
        $hyacademy->media = $request->media;
        $hyacademy->admission_no = $admission_no;
        $hyacademy->user_id = auth()->user()->id;
        $hyacademy->save();

        // generate addmission letter pdf and store
        $pdf = PDF::loadView('HYAcademy.admission-letter', $hyacademy);
        $pdf->save('storage/images/HYAcademy/' .$hyacademy->name . '.pdf');
        // $pdf->save(storage_path('app/public/images/HYAcademy/' . $hyacademy->name . '.pdf'));

        Mail::to(auth()->user()->email)->send(new HYAcademyMail($hyacademy));

        return redirect()->route('academy.home')->with('success', 'Your registration was successful, please proceed to your email to download your admission letter');
    }
    public function home()
    {
        $hyacademy = HYAcademy::with('user')->get();
        return view("HYAcademy.home", compact('hyacademy'));
    }
    public function students()
    {
        $hyacademy = HYAcademy::with('user')->get();
        return view("HYAcademy.students", compact('hyacademy'));
    }
}
