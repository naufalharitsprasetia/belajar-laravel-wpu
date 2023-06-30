<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Naufal Harits",
        "email" => "naufalharisprasetia@gmail.com",
        "image" => "mine.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);


// Halaman Single Post
Route::get('blog/{slug}', [PostController::class, 'show']);
