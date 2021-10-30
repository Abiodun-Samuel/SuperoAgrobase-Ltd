<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $title = "Blog";
        $blogs = Blog::with('user')->orderBy('updated_at', 'DESC')->paginate(6);
        return view('admin.blog.index', compact("title", "blogs"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Blog";
        return view('admin.blog.create', compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate input
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ]);
        // process image and store
        $image = $request->image;
        $filename = $request->title . '-' . uniqid() . '.' . $request->image->extension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(300, 300, function ($const) {
            $const->aspectRatio();
        });
        // save image
        $image_resize->save(public_path('/images/blogs/' . $filename, 80));

        // store blog in database
        Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => Str::slug($request->title),
            'image_path' => $filename,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin')->with("status", 'Your blog has been uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $title = $slug;
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blog.show', compact('title', 'moreBlogs', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $title = $slug;
        $blog = Blog::where('slug', $slug)->first();
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $string
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

            $image_resize->save(public_path('/images/blogs/' . $filename, 80));

            Blog::where('slug', $slug)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => Str::slug($request->title),
                'image_path' => $filename,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            Blog::where('slug', $slug)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => Str::slug($request->title),
                'user_id' => auth()->user()->id,
            ]);
        }
        return redirect()->route('admin')->with("status", 'Your blog has been edited successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Blog::where('slug', $slug)->delete();
        return back()->with('status', 'Your post has been deleted successfully');
    }
}
