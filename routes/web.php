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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/post-list','App\Http\Controllers\PostsController@postList')->name('post.list');
Route::post('/like-post/{id}','App\Http\Controllers\PostsController@likePost')->name('like.post');
Route::post('/unlike-post/{id}','App\Http\Controllers\PostsController@unlikePost')->name('unlike.post');
