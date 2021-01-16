<?php

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
    return redirect('home') ;
});

Route::get('home',[\App\Http\Controllers\home::class,'index']);

Route::get('hello/{name?}',
[\App\Http\Controllers\HelloController::class,'index'])
->name('hello.index');

Route::get('home',[\App\Http\Controllers\post::class,
    'home'])->name('home');

Route::get('about',[\App\Http\Controllers\post::class,
    'about'])->name('about');

Route::get('post',[\App\Http\Controllers\post::class,
    'post'])->name('post');

Route::get('contact',[\App\Http\Controllers\post::class,
    'contact'])->name('contact');
