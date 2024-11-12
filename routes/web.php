<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/about', function () {
//     return '<p>NIM: 2241760120</p><p>Nama: Lentina Abrila Putri</p>';
// });

// Route::get('/user/{Lentina}', function ($name) {
//     return 'Nama saya: '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID " . $id;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return "Nama saya Lentina " . $name;
// });

// Route::get('/user/{name?}', function ($name='Lentina') { return 'Nama saya '.$name;
// });

// Route::get('/hello', [WelcomeController::class,'hello']);
// ;

// Route untuk halaman utama
Route::get('/', [PageController::class, 'index']);  

// Route untuk halaman '/about'
Route::get('/about', [PageController::class, 'about']);  

// Route untuk '/articles', menerima parameter 'id' untuk halaman artikel tertentu
Route::get('/articles/{id}', [PageController::class, 'articles']);  

Route::get('/home', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('articles/{id}', ArticleController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Lentina']);
    });

Route::get('/greeting', [WelcomeController::class, 'greeting']);