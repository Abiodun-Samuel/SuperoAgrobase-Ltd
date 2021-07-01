<?php

namespace App\Http\Controllers;

use App\Models\LatestUpdate;
use Illuminate\Http\Request;
use Image;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class LatestUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = "Latest Updates";

        $latestUpdates = LatestUpdate::with('user')->orderBy('updated_at', 'DESC')->paginate(4);
        $prevUpdates = LatestUpdate::with('user')->oldest()->limit(5)->get();

        return view('/admin.latestupdate.index', [
            'latestUpdates' => $latestUpdates,
            'prevUpdates' => $prevUpdates,
            'title' => $title,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Post Latest Update";
        return view("/admin/latestupdate/create", ['title' => $title]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);
        $image = $request->image;
        $filename = $request->title . '-' . uniqid() . '.' . $request->image->extension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(300, 300, function ($const) {
            $const->aspectRatio();
        });
        // $image_resize->save(storage_path('app/public/images/latestupdates/' . $filename));
        $image_resize->save('storage/images/latestupdates/' . $filename);


        LatestUpdate::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(LatestUpdate::class, 'slug', $request->title),
            'image_path' => $filename,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('latestupdate.index')->with("status", 'Your latest update has been posted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $latestUpdate = LatestUpdate::where('slug', $slug)->first();
        $moreUpdates = LatestUpdate::with('user')->oldest()->limit(5)->get();
        return view('admin.latestupdate.show', compact('latestUpdate', 'moreUpdates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $latestUpdate = LatestUpdate::where('slug', $slug)->first();
        return view('/admin.latestupdate.edit', [
            'latestUpdate' => $latestUpdate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'mimes:jpg,jpeg,png,svg|max:2048',
        ]);
        if ($request->image !== null) {
            $image = $request->image;
            $filename = $request->title . '-' . uniqid() . '.' . $request->image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300, function ($const) {
                $const->aspectRatio();
            });
            // $image_resize->save(storage_path('app/public/images/latestupdates/' . $filename));
            $image_resize->save('storage/images/latestupdates/' . $filename);

            LatestUpdate::where('slug', $slug)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(LatestUpdate::class, 'slug', $request->title),
                'image_path' => $filename,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            LatestUpdate::where('slug', $slug)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(LatestUpdate::class, 'slug', $request->title),
                // 'image_path' => $filename,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect()->route('latestupdate.index')->with("status", 'Your post has been edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        LatestUpdate::where('slug', $slug)->delete();
        return back()->with('status', 'Your post has been deleted successfully');
    }
}
