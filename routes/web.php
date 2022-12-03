<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RecordController;

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



Route::get('/posts/index', [PostController::class, 'index']);
Route::get('/', [RecordController::class, 'history']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/add', [RecordController::class, 'add']);
Route::post('/posts/save', [RecordController::class, 'save']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/posts/{post}/reply', [PostController::class, 'reply']);
Route::post('/posts', [PostController::class, 'store']);
Route::post('/comment/{post}', [CommentController::class, 'comment']);
