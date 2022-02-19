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

//FRONTEND INTEGRATION

        Route::get('/',[DevelopersWorkTechController::class,'index'])->name('MainHome');
        Route::get('/about/Developers-Work-Tech',[DevelopersWorkTechController::class,'about'])->name('About');
        Route::get('/Contact/Developers-Work-Tech',[DevelopersWorkTechController::class,'contact'])->name('Contact');
        Route::get('/software-developement',[DevelopersWorkTechController::class,'software_development'])->name('software-development');
        Route::get('/web-developement',[DevelopersWorkTechController::class,'website_development'])->name('web-development');
        Route::get('/analytic-solutions',[DevelopersWorkTechController::class,'analytics_solutions'])->name('analytics_solutions');
        Route::get('/cloud-and-devOps',[DevelopersWorkTechController::class,'cloud_and_devop'])->name('cloud_and_devop');
        Route::get('/product-design',[DevelopersWorkTechController::class,'product_design'])->name('product_design');
        Route::get('/data-center',[DevelopersWorkTechController::class,'data_center'])->name('datacenter');
        Route::get('/services',[DevelopersWorkTechController::class,'services'])->name('services');
        Route::get('/our-team',[DevelopersWorkTechController::class,'our_team'])->name('our_team');
        Route::get('/single-team',[DevelopersWorkTechController::class,'single_team'])->name('single_team');
        Route::get('/case-studies',[DevelopersWorkTechController::class,'case_studies'])->name('case_studies');
        Route::get('/our-pricing',[DevelopersWorkTechController::class,'our_pricing'])->name('our_pricing');
        Route::get('/faq',[DevelopersWorkTechController::class,'faq'])->name('faq');
        Route::get('/packages/all',[DevelopersWorkTechController::class,'Packages'])->name('packages');
        Route::get('/404',[DevelopersWorkTechController::class,'fourzerofour'])->name('404');

//FRONT END INTEGRATION


