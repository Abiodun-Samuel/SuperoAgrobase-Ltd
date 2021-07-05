<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HarvestYieldAcademyController;
use App\Http\Controllers\LatestUpdateController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Pages;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

// Auth
require __DIR__ . '/auth.php';

// google socialite
Route::get('/login/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleController::class, 'handleCallback']);

// facebook
Route::get('/login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [FacebookController::class, 'handleCallback']);

// Admin page
Route::get('/admin/', [AdminController::class, 'index'])->name('admin')->middleware('auth', 'is_admin');
Route::get('/admin/harvestyield-academy', [AdminController::class, 'hyacademy'])->name('admin.hyacademy')->middleware('auth', 'is_admin');

// Admin Latest Update
Route::get('/Lastest Updates', [LatestUpdateController::class, 'index'])->name('latestupdate.index');
Route::get('/admin/latestupdate/create', [LatestUpdateController::class, 'create'])->name('latestupdate.create')->middleware('auth', 'is_admin');
Route::post('/admin/latestupdate/store', [LatestUpdateController::class, 'store'])->name('latestupdate.store')->middleware('auth', 'is_admin');
Route::get('/Lastest Updates/{latestupdate:slug}', [LatestUpdateController::class, 'show'])->name('latestupdate.show');
Route::get('/admin/latestupdate/{latestUpdate:slug}/edit', [LatestUpdateController::class, 'edit'])->name('latestupdate.edit')->middleware('auth', 'is_admin');
Route::put('admin/latestupdate/{latestUpdate:slug}', [LatestUpdateController::class, 'update'])->name('latestupdate.update')->middleware('auth', 'is_admin');
Route::delete('admin/latestupdate/{latestUpdate:slug}', [LatestUpdateController::class, 'destroy'])->name('latestupdate.destroy')->middleware('auth', 'is_admin');

// Admin Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth', 'is_admin');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/admin/blog/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth', 'is_admin');
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth', 'is_admin');
Route::put('/admin/blog/{blog:slug}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth', 'is_admin');
Route::delete('admin/blog/{blog:slug}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth', 'is_admin');

// Page Routes
Route::get('/', [Pages::class, 'index'])->name('home');
Route::get('/about_us', [Pages::class, 'about'])->name('about');
Route::get('/Our Products', [Pages::class, 'product'])->name('product');
Route::get('/services/{service_page}', [Pages::class, 'services'])->where('service_page', 'Agricourt Ventures|Harvestyield Farm|Agro-Input');

// Harvestyield academy
Route::get('/hya', [HarvestYieldAcademyController::class, 'home'])->name('academy.home');
Route::get('/hyacademy-form', [HarvestYieldAcademyController::class, 'index'])->name('academy.register')->middleware('auth');
Route::get('/hyacademy/students', [HarvestYieldAcademyController::class, 'students'])->name('academy.student')->middleware('auth');
Route::post('/harvestyield-academy', [HarvestYieldAcademyController::class, 'store'])->name('academy.store');
Route::post('/hyacademy/students/message', [HarvestYieldAcademyController::class, 'sendMessage'])->name('academy.message');
Route::post('/hyacademy/students/assignment', [HarvestYieldAcademyController::class, 'submitAssignmanet'])->name('academy.assignment');

// Mail Controller Routes
Route::get('/contact_us', [MailController::class, 'contact'])->name('contact');
Route::post('/contact_us/sendmail', [MailController::class, 'contactMail'])->name('contactmail');
Route::post('/newsletter', [MailController::class, 'newsLetter'])->name('newsletter');
// Post comment
Route::post('/blog', [PostController::class, 'store'])->name('post.blog')->middleware('auth');
// like post
Route::post('/blog/{post}/likes', [PostLikeController::class, 'store'])->name('post.like');
Route::delete('/blog/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.unlike');
// User post
Route::get('/users/{user:name}/posts', [UserPostController::class, 'index'])->name('user.post');

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});
