<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', fn() => view('about'));
// Route::get('/contact', fn() => view('contact'));
// Route::get('/clients', [HomeController::class, 'clients']);


// Route::get('/', function () {return view('index');});
// Route::get('/about', function () {return view('about');});
// Route::get('/contact', function () {return view('contact');});
// Route::get('/service', function () {return view('service');});
// Route::get('/team', function () {return view('team');});
// Route::get('/testimonial', function () {return view('testimonial');});

