<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iniController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ShuttleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/sign-in', function () {
    return view('signIn');
});

Route::get('/home', function () {
    return view('home2');
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

Route::get('/seeCertificate', function () {
    return view('sharetificate.seeCertificate');
});

Route::get('/clickandsit/empty', function () {
    return view('clickandsit.clickandsit-empty');
});

// Route::get('/clickandsit/fill', function () {
//     return view('clickandsit.clickandsit-fill');
// });

Route::get('/createTemplate', function () {
    return view('clickandsit.createTemplate');
});

Route::get('/history', function () {
    return view('clickandsit.history');
});

Route::post('/clickandsit/fill', [ShuttleController::class,"savedata"]);

Route::get('/Sele', [ShuttleController::class,'routingawal']);
// Route::get('/Sele', [iniController::class,'routingawal']);

Route::resource('/events', EventController::class);
Route::get('/ajax', [EventController::class,'ajax']);
Route::get('/downloadAll', [EventController::class, 'downloadAll']);
Route::get('/nyobapython',[ShuttleController::class,'cobapython']);
