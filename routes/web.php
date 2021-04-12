<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\MailController;


Route::get('/', [Pages::class, 'index']);
Route::get('/about_us', [Pages::class, 'about']);
Route::get('/Our Products', [Pages::class, 'product'])->name('product');
Route::get('/products/{product_page}', [Pages::class, 'products'])->where('product_page', 'Agricourt Products|Harvestyield Products');
Route::get('/services/{service_page}', [Pages::class, 'services'])->where('service_page', 'Agricourt Ventures|Harvestyield Farm|Agro-Input');

// Mail Controller Routes
Route::get('/contact_us', [MailController::class, 'contact']);

Route::post('/contact_us/sendmail', [MailController::class, 'contactMail'])->name('contactmail');

Route::post('/newsletter', [MailController::class, 'newsLetter'])->name('newsletter');

// Fallback route
Route::fallback(function () {
   return view('errors.404');
});
