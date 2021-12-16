<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/user/cadastrados', [UserController::class, 'cadastrados']);
Route::resource('/user', UserController::class);


// painel de controle para qualquer usuário
// Route::get('/dashboard', function () {
//     return view('usuarios.dashboard');
// })->middleware(['auth']);

// Route::get('/meusposts', function () {
//     return view('meus-posts');
// });

// painel de controle usuário admin
Route::get('/admin', function () {
    return view('usuarios.admin');
})->middleware(['auth']);

// Route::get('/publicados', function () {
//     return view('posts.post-publicado');
// });

// Route::get('/verpost', function () {
//     return view('posts.ver-post');
// });


//Route::get('/login',[UsersController::class,'login'])->name('login');
//Route::get('/register',[UsersController::class,'register'])->name('register');
//Route::post('/store', [UsersController::class,'store'])->name('store');

require __DIR__ . '/auth.php';