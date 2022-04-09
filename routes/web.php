<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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

Route::get('/',[MainController::class, 'index'] );
Route::get('/contact',[MainController::class, 'contact'] );
Route::get('/about',[MainController::class, 'about'] );
Route::get('/gallary',[MainController::class, 'gallary'] );
Route::get('/faqs',[MainController::class, 'faqs'] );


Route::get('/posts',[PostController::class, 'index'] );
Route::get('/post',[PostController::class, 'view_posts'] );
Route::get('/post-delete',[PostController::class, 'delete_posts'] );
Route::get('/post-create',[PostController::class, 'create_post'] );
//Route::get('/about', function () {return view('about us page');});
////Route::get('/contact', function () {return view('contact us page');});
//Route::get('/gallary', function () {return view('gallary page;');});
//Route::get('/faqs', function () {return view('faqs page');});
//Route::get('/',[maincontroller::class,'index']);




