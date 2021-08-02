<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CommentController;

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

Route::post('/login', [AccountController::class, "login"]);
Route::post('/register', [AccountController::class, 'register']);
Route::get('/logout', [AccountController::class, 'logout']);

Route::get('/topics', [MainController::class, 'getTopics']);
Route::post('/addtopic', [MainController::class, 'setTopic']);
Route::post('/deletetopic', [MainController::class, 'deleteTopic']);

Route::post('/comments', [CommentController::class, 'getComments']);
Route::post('/addcomment', [CommentController::class, 'addComment']);
Route::post('/deletecomment', [CommentController::class, 'deleteComment']);


