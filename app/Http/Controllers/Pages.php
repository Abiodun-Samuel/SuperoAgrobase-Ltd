<?php

namespace App\Http\Controllers;

use App\Models\LatestUpdate;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;

class Pages extends Controller
{
    public function index(Request $request)
    {
        $api_key = config('app.weather_api_key');
        // $ip = '197.210.28.74';
        $ip = $request->ip();
        if (($city = Location::get($ip)) == false) {
            $city = 'lagos';
        } else {
            $city = $city->cityName;
        };

        $news = Http::get('api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&appid=' . $api_key);

        $title = "Home";
        $posts = Post::latest()->with('user', 'likes')->paginate(4);
        $latestUpdates = LatestUpdate::with('user')->orderBy('updated_at', 'DESC')->paginate(2);
        $products = Product::select('name')->get();

        return view("index", [
            'title' => $title,
            'latestUpdates' => $latestUpdates,
            'posts' => $posts,
            'news' => $news,
            'products' => $products,
        ]);
    }
    public function about()
    {
        $title = "About Us";
        return view("/about_us", compact("title"));
    }
    public function product()
    {
        $title = "Our Products";
        return view("/shop", compact("title"));
    }
    public function services($service_page)
    {
        $title = $service_page;
        return view("services/$service_page", compact("title"));
    }
}
