<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */


Route::get('/',[SiteController::class,'welcome']);
Route::get('/article',[SiteController::class,'article']);
Route::get('/contact',[SiteController::class,'contact']);
Route::get('/list',[SiteController::class,'list']);










