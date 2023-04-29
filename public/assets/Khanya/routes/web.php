<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('index');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/cisco', function () {
    return view('cisco');
});

Route::get('/splunk', function () {
    return view('splunk');
});

Route::get('/coursera', function () {
    return view('coursera');
});

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
