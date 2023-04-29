<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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
Route::get('/students',
[App\Http\Controllers\StudentController::class, 'indeex']);
Route::get('/students/{id}',
[App\Http\Controllers\StudentController::class, 'show']);

Route::get('/students', function () {
    return view('students.indeex');
});
Route::get('/students', [StudentController::class, 'indeex'])->name('students');

Route::get('/students',
'\App\Http\Controllers\Students\StudentsController@indeex');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('index');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/admin-app', function () {
    return view('admin-app');
});

Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/splunk', function () {
    return view('splunk');
});

Route::get('/coursera', function () {
    return view('coursera');
});


Route::get('/student/portal/{id}', function ($id) {
    // Show the student portal for user with id = $id
});
Route::post('/login', 'AuthManager.php@authenticate')->name('login');
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/contact-us', [ContactsController::class, 'create'])->name('contacts.create');
Route::post('/contact-us', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/admin-app', 'DashboardController@index');


Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');