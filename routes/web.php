<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', function () {
    return view('pages.auth.login');
});
Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::get('/logs-activity', function () {
    return view('pages.logs.index');
})->name('logs');

Route::prefix('users')->group(function () {
    Route::get('/', function () {
        return view('pages.users.index');
    })->name('users');

    Route::get('/list', function () {
        return view('pages.users.list');
    })->name('users.list');

    Route::get('/create', function () {
        return view('pages.users.add');
    })->name('users.create');

    Route::get('/{id}', function ($id) {
        return view('pages.users.show', ['id' => $id]);
    })->name('users.show');

    Route::get('/{id}/edit', function ($id) {
        return view('pages.users.edit', ['id' => $id]);
    })->name('users.edit');
});
