<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home');
})->name('route_home');

Route::get('/about', function () {
    return view('about');
})->name('route_about');

Route::get('/people', function () {
    return view('people');
})->name('route_people');

Route::get('/social', function () {
    return view('social');
})->name('route_social');

Route::get('/store', function () {
    return view('store');
})->name('route_store');

Route::get('/contacts', function () {
    return view('contacts');
})->name('route_contacts');

