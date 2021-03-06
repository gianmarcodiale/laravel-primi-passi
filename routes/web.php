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
    $msg = 'Hello World';
    return view('home', compact('msg'));
});

Route::get('/about', function () {
    $name = 'Gianmarco';
    $surname = 'Di Alessandro';
    $job = 'Student';
    $interests = ['Videogames', 'Programming', 'Manga', 'Ski', 'Football'];
    return view('about', compact( 'name', 'surname', 'job', 'interests'));
});
