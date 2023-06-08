<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\tamucontroller;
use App\Http\Controllers\layoutcontroller;
use App\Http\Controllers\SessionController;

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
// Route::get('/mahasiswa/{id}/{nama}', function ($id,$nama) {
//     return ("<h1> Saya Mahasiswa STMIK Mardira Indonesia Dengan Nim $id & Nama $nama </h1>");
// })->where(['id', '[0-9]+','nama'=>'[A-Za-z]+']);

//  Route::get('/', [SessionController::class, 'sesi/welcome']);


Route::resource('tamu', tamucontroller::class)->Middleware('isLogin');
// Route::resource('sesi', SessionController::class);
Route::controller(layoutcontroller::class)->group(function(){
    Route::get('layout/home', 'home');
    Route::get('layout/index', 'index');
    Route::get('layout/frontend', 'frontend');
});

//route resource

Route::resource('/posts', Postcontroller::class);

Route::get('/tentang',[HalamanController::class,'tentang']);
Route::get('/kontak',[HalamanController::class,'kontak']);

Route::get('/sesi',[SessionController::class, 'index'])->Middleware('isTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->Middleware('isTamu');
Route::get('/sesi/logout', [ SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->Middleware('isTamu');
Route::post('/sesi/create',[SessionController::class, 'create'])->Middleware('isTamu');

Route::get('/', function () {return view('layout/frontend');})->middleware('isTamu');




