<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    //
    public function index (){
       $title = "Home";
       return view("index", compact("title"));
    }
    public function contact (){
       $title = "Contact Us";
       return view("contact_us",compact("title"));
    }
    public function about (){
       $title = "About Us";
       return view("about_us", compact("title"));
    }
    public function services ($serv,$servname){

       if ($servname == "agro_input"){
          $title = "Agro-Input";
      return view($serv.'/'.$servname, compact("title"));

       } else if( $servname === "agricourt_ventures" ){
          $title = "Agricourt Ventures";
      return view($serv.'/'.$servname, compact("title"));

       } else if ($servname === "harvestyield_farm"){
          $title = "Harvestyield Farm";
      return view($serv.'/'.$servname, compact("title"));

      } else if ($servname === "harvestyield_farm"){
          $title = "Harvestyield Farm";
      return view($serv.'/'.$servname, compact("title"));

      } else if ($servname === "harvestyield_products"){
          $title = "Harvestyield Products";
      return view($serv.'/'.$servname, compact("title"));

      } else if ($servname === "agricourt_products"){
          $title = "Agricourt Products";
      return view($serv.'/'.$servname, compact("title"));

      }
   }
      
}