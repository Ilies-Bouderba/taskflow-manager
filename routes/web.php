<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function() {
    return view('navbar.dashboard');
})->name('dashboard');

Route::get('/projects', function () {
    return view('navbar.projects');
})->name('projects');

Route::get('/tasks', function () {
    return view('navbar.tasks');
})->name('tasks');

Route::get('/notification', function () {
    return view('navbar.notification');
})->name('notifications');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'PostLogin');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/signup', 'register')->name('register');
    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});


Route::get('/project/view/', function () {
    return view ('project.index');
});

Route::get('/task/view/', function () {
    return view ('task.index');
});
