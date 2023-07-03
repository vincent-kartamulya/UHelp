<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\iniController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ShuttleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/login', function () {
    return view('signIn');
})->middleware('guest')->name('login');

Route::get('/home', function () {
    return view('home2');
});

Route::get('/profile', [UserController::class,'openprofile']);

Route::get('/profile/delete', function () {
    return view('profile.profile-delete');
});

Route::get('/profile/change', function () {
    return view('profile.profile-change');
});

Route::get('/seeCertificate', function () {
    return view('sharetificate.seeCertificate');
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

Route::resource('/events', EventController::class)->middleware('auth');
Route::get('/ajax', [EventController::class,'ajax']);
Route::get('/certificateAjax', [EventController::class,'certificateAjax']);
Route::get('/downloadAll', [EventController::class, 'downloadAll']);
Route::get('/clickandsit',[ShuttleController::class,'starting'])->middleware('auth');
Route::get('/edit/{id}',[ShuttleController::class,'ngedit']);
Route::get('/nyobapython/{id}',[ShuttleController::class,'cobapython']);
Route::get('/clickandsit/delete/{id}',[ShuttleController::class,'delete']);
Route::delete('/deleteCertificate', [EventController::class, 'deleteCertificate']);
Route::put('/updateCertificate', [EventController::class, 'updateCertificate']);
Route::post('/SignUp/Verif', [UserController::class,'SignUp']);
Route::get('/sendEmail', [MailController::class, 'sendMail']);
Route::post('/LogIn/verif', [UserController::class,'authentication']);
Route::post('/LogOut', [UserController::class,'Loggingout']);
Route::post('/update/profile', [UserController::class,'profileedit']);
