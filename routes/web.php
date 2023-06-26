<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\wargacontroller;
use App\Http\Controllers\Homecontroller;

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
    return view('welcome');
});


    Route::middleware(['auth'])->group(function(){
        route::get('/warga',[wargacontroller::class,'index']);
        route::get('/warga/create',[wargacontroller::class,'create']);
        route::post('/warga/store',[wargacontroller::class,'store']);
        route::get('/warga/{id}/edit',[wargacontroller::class,'edit']);
        route::put('/warga/{id}',[wargacontroller::class,'update']);
        route::delete('/warga/{id}',[wargacontroller::class,'destroy']);
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
