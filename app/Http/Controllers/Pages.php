<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
   public function index()
   {
      $title = "Home";
      return view("index", compact("title"));
   }

   public function about()
   {
      $title = "About Us";
      return view("about_us", compact("title"));
   }
   
   public function product()
   {
      $title = "Our Products";
      return view("/Our Products", compact("title"));
   }
   public function services($service_page)
   {
      $title = $service_page;
      return view("services/$service_page", compact("title"));
   }
   public function products($product_page)
   {
      $title = $product_page;
      return view("products/$product_page", compact("title"));
   }
}
