<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iniController;
use App\Http\Controllers\EventController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('profile.profile');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/profile/delete', function () {
    return view('profile.profile-delete');
});

Route::get('/profile/change', function () {
    return view('profile.profile-change');
});

Route::get('/addEvent', function () {
    return view('sharetificate.addEvent');
});

Route::get('/createEvent', function () {
    return view('sharetificate.createEvent');
});

Route::get('/generatedCertificate', function () {
    return view('sharetificate.generatedCertificate');
});

Route::get('/seeCertificate', function () {
    return view('sharetificate.seeCertificate');
});

Route::get('/seeCertificate/download', function () {
    return view('sharetificate.seeCertificate-download');
});

Route::get('/clickandsit/empty', function () {
    return view('clickandsit.clickandsit-empty');
});

Route::get('/clickandsit/fill', function () {
    return view('clickandsit.clickandsit-fill');
});

Route::get('/history', function () {
    return view('clickandsit.history');
});

Route::get('/createTemplate', function () {
    return view('clickandsit.createTemplate');
});


Route::get('/eventList', function () {
    return view('sharetificate.eventList');
});

Route::get('/Sele',[iniController::class,'routingawal']);

Route::resource('/events', EventController::class);
Route::get('/ajax', [EventController::class,'ajax']);
