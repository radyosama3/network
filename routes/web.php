<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/cert', function () {
    return view('main.cert');
})->name('cert');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/cert_cert', function () {
    return view('main.formcert');
})->name('formcert');

Route::get('/cert-cert', function () {
    return view('main.formid');
})->name('formid');
