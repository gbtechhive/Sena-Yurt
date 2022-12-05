<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yurtController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\yurt1_controller;
use App\Http\Controllers\yurt2Controller;
use App\Http\Controllers\yurt3Controller;
use App\Http\Controllers\yurt4Controller;
use App\Http\Controllers\yurt5Controller;
use App\Http\Controllers\yurt6Controller;
use App\Http\Controllers\see_moreController;
use App\Http\Controllers\seeMoreLatestProduct;
use App\Http\Controllers\seeMoreHotProduct;
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
    return view('Home');
});

Route::get('yurt', [yurtController::class, 'showYurt']);
Route::get('AboutUs', [AboutUsController::class, 'showAboutUs']);
Route::get('indux', [Home1Controller::class, 'showHome']);
Route::get('contact', [ContactUs::class, 'ContactShow']);
Route::get('yurt1', [yurt1_controller::class, 'showYurt1']);
Route::get('yurt2', [yurt2Controller::class, 'showYurt2']);
Route::get('yurt3', [yurt3Controller::class, 'showYurt3']);
Route::get('yurt4', [yurt4Controller::class, 'showYurt4']);
Route::get('yurt5', [yurt5Controller::class, 'showYurt5']);
Route::get('yurt6', [yurt6Controller::class, 'showYurt6']);
Route::get('seeMore', [see_moreController::class, 'show_seeMore']);
Route::get('see_LatestProduct', [seeMoreLatestProduct::class, 'show_latestProduct']);
Route::get('see_HotProduct', [seeMoreHotProduct::class, 'show_HotProduct']);
