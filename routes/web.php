<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevelopersWorkTechController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[DevelopersWorkTechController::class,'index'])->name('MainHome');
Route::get('/about/Developers-Work-Tech',[DevelopersWorkTechController::class,'about'])->name('About');
Route::get('/Contact/Developers-Work-Tech',[DevelopersWorkTechController::class,'contact'])->name('Contact');
Route::get('/software-developement',[DevelopersWorkTechController::class,'software-devlopment'])->name('software-development');

