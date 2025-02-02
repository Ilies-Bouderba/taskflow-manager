<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Operation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware('auth')->controller(Operation::class)->group(function () {

    Route::get('/dashboard', 'showDashboard')->name('dashboard');
    Route::get('/projects', 'showProjects')->name('projects');
    Route::get('/project/view/{id}', 'ShowProject')->name('project.view');
    Route::get('/tasks', 'showTasks')->name('tasks');
    Route::get('/task/view/', 'ShowTask')->name('task.view');
    Route::get('/notificaiton', 'showNotification')->name('notification');

    Route::post('/projects/{project}/chat', [Operation::class, 'storeMessage'])
     ->name('projects.chat.store');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'PostLogin');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/signup', 'register')->name('register');
    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});


