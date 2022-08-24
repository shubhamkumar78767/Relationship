<?php

use App\Http\Controllers\TestController;
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

Route::get('/hasone',[TestController::class,'hasone']);
Route::get('/belongstoone',[TestController::class,'belongsToOne']);
Route::get('/hasmany',[TestController::class,'hasmany']);
Route::get('/belongstomany',[TestController::class,'belongsToMany']);
Route::get('/many-to-many-category',[TestController::class,'ManyToManyCategory']);
Route::get('/many-to-many-post',[TestController::class,'ManyToManyPost']);
