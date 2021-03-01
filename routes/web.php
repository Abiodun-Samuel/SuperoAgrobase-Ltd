<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user', 'PagesController@index');
Route::get('/', [Pages::class, 'index']);
Route::get('/contact_us', [Pages::class, 'contact']);
Route::get('/about_us', [Pages::class, 'about']);
Route::get('/{serv}/{servname}', [Pages::class, 'services']);
// Route::get('/', [Pages::class, 'index']);

