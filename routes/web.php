<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
