<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;

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

Route::get("/posts/{id}", [EmployeeController::class, "showOne"])->where("id", "[0-9]+");
Route::get("/posts", [EmployeeController::class, "showAll"]);
Route::get("product/{category_id}/{product_id}", [ProductController::class, 'showProduct']);
Route::get("/product/{category}", [ProductController::class, "showCategory"]);
Route::get("/categories", [ProductController::class, "showCategoryList"]);
Route::get("test/result", [EmployeeController::class, "result"])->name("result");
Route::match(["post", "get"], "/test", [EmployeeController::class, "form"]);
