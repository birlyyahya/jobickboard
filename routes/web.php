<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'index');
})->name('homepage');

// About Us
Route::get('/about-us', function () {
    return view('pages.about.index');
})->name('about-us');

// Pricing
Route::get('/pricing', function () {
    return view(view: 'pages.pricing.index');
})->name('pricing');

// Contact Us
Route::get('/contact-us', function () {
    return view(view: 'pages.contact.index');
})->name('contact-us');

// Route with Prefix

// Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/list', function () {
        return view(view: 'pages.blog.list');
    })->name('blog-list');

    Route::get('/grid', function () {
        return view(view: 'pages.blog.grid');
    })->name('blog-grid');

    Route::get('/details', function () {
        return view(view: 'pages.blog.detail');
    })->name('blog-details');
});

// Jobs
Route::group(['prefix' => 'jobs'], function () {

    Route::get('/grid', function () {
        return view(view: 'pages.jobs.grid');
    })->name('jobs-grid');

    Route::get('/details', function () {
        return view(view: 'pages.jobs.detail');
    })->name('jobs-details');
});


// Register and Login
Route::get('/register', function () {
    return view(view: 'pages.register');
})->name('register');


Route::get('/login', function () {
    return view(view: 'login');
})->name('login');
