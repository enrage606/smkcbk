<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardRegController;


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
    return view('home', [
        "title" => "Home"
    ]);
});




Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
        "name" => "Andreas Putra",
        "email" => "andreas@email.com",
        "img" => "test.png"
    ]);
});

Route::get('/regis', function () {
    return view('regis', [
        "title" => "Registrasi"
    ]);
});

Route::get('/info', function () {
    return view('info', [
        "title" => "Info",
        "post" => Post::all()

    ]);
});
Route::get('/dashboard/posts/print', function () {
    return view('regis', [
        "title" => "Registrasi"
    ]);
});
Route::get('/dashboard/posts/search', function () {
    return view('/dashboard/posts/search', [
        "title" => "Registrasi"
    ]);
});


Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/user', [UserController::class, 'index'])->middleware('guest');
Route::post('/user', [UserController::class, 'store']);
Route::get('/dashboard', function(){return view('dashboard.index');})->middleware('auth');
Route::resource('/dashboard/posts', DashboardRegController::class)->middleware('auth');
Route::get('/dashboard/posts/print', [\App\Http\Controllers\DashboardRegController::class, 'print']);
Route::get('/dashboard/posts/search', [\App\Http\Controllers\DashboardRegController::class, 'search']);
