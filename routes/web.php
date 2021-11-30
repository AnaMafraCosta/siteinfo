<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('dashboard');
});

Route::get('/meusposts', function () {
    return view('meus-posts');
});

Route::get('/admin', function () {
    return view('dashboard-admin');
});

Route::get('/editar', function () {
    return view('perfil-editar');
});

Route::get('/perfil', function () {
    return view('perfil-usuario');
});

Route::get('/publicados', function () {
    return view('post-publicado');
});

Route::get('/verpost', function () {
    return view('ver-post');
});

Route::get('/inicio', function () {
    return view('welcome');
});

//Route::get('/login',[UsersController::class,'login'])->name('login');
//Route::get('/register',[UsersController::class,'register'])->name('register');
//Route::post('/store', [UsersController::class,'store'])->name('store');

require __DIR__ . '/auth.php';