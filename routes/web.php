<?php

use App\Http\Controllers\PostsController;
use App\Models\Blog\PostModel;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    $data['title'] = "Home";
    return view('home',$data);
});


Route::get('/about', function () {
    $data = [
        "nama" => "ivan",
        "image" => "doraemon .jpg",
        "title" => "About"
    ];
    return view('about',$data);
});


Route::get('/posts', [PostsController::class,'index']);

//halaman single post
Route::get('posts/{post:slug}',[PostsController::class,'show']);


