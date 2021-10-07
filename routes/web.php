<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublikasiController;



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
    return view ('beranda' , [
        "title" => "beranda",
        'active' => "beranda"
    ]);
});

Route::get('/profil', function () {
    return view ('profil' , [
        "title" => "profil",
        'active' => "profil",
        "header" => "Assalamualaikum wr.wb",
        "keterangan" => "Pada kesempatan ini marilah kita ucapkan puji syukur kehadirat Allah SWT, karena atas rahmat dan karunianya, kita telah mengembangkan dan mengelola website Dinas Komunikasi dan Informatika Kabupaten Wonosobo." ,
        "image" => "ganjar.jpg",
        "name" => "Ganjar Pranowo"
    ]);
});



Route::get('/lampiran', function () {
    return view ('lampiran', [
        "title" => "lampiran",
        'active' => "lampiran",
    ]);
});

Route::get('/dokumen', [PublikasiController::class, 'index']);

Route::get('publikasi/{publikasi}',[PublikasiController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => "categories",
        'categories' =>Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');
