<?php

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
})->name('notification');

Route::get('/login', function () {
    return view ('session.login');
})->name('login');

Route::get('/signup', function () {
    return view ('session.signup');
})->name('signup');


Route::get('/project/view/', function () {
    return view ('project.index');
});

Route::get('/task/view/', function () {
    return view ('task.index');
});
