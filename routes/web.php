<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iniController;



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

Route::get('/addEvent', function () {
    return view('sharetificate.addEvent');
});

Route::get('/createEvent', function () {
    return view('sharetificate.createEvent');
});

Route::get('/clickandsit', function () {
    return view('clickandsit.clickandsit');
});

Route::get('/createTemplate', function () {
    return view('clickandsit.createTemplate');
});

Route::get('/Sele',[iniController::class,'routingAwal']);
