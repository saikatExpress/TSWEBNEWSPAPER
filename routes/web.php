<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/category', 'category')->name('home.category');
    Route::get('/about', 'about')->name('home.about');
    Route::get('/latest-news', 'latestNews')->name('home.latest_news');
    Route::get('/contact', 'contact')->name('home.contact');
    Route::get('/elements', 'elements')->name('home.elements');
    Route::get('/blog', 'blog')->name('home.blog');
    Route::get('/blog/details', 'blogDetails')->name('home.blog.details');
    Route::get('/category/details', 'categoryDetails')->name('home.category.details');
});