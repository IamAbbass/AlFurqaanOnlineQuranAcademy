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
    return view('welcome');
})->name('index');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('courses', function () {
    return view('courses');
})->name('courses');

Route::get('elements', function () {
    return view('elements');
})->name('elements');

Route::get('course-details', function () {
    return view('courseDetails');
})->name('course.details');

Route::get('blog', function () {
    return view('blogHome');
})->name('blog.home');

Route::get('blog-details', function () {
    return view('blogDetails');
})->name('blog.details');

Route::get('contact', function () {
    return view('contact');
})->name('contact');