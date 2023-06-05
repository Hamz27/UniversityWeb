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
    return view('login');
});

Route::get('/home', function () {
    return view('home.index');
});
Route::get('/homelec', function () {
    return view('home.indexlecturer');
});
Route::get('/homeemp', function () {
    return view('home.indexemployee');
});

Route::get('/course', function () {
    return view('course.index');
});
Route::get('/homework', function () {
    return view('course.homework');
});
Route::get('/subject', function () {
    return view('course.subject');
});
Route::get('/courselec', function () {
    return view('course.indexlecturer');
});
Route::get('/homeworklec', function () {
    return view('course.homeworklecturer');
});
Route::get('/subjectlec', function () {
    return view('course.subjectlecturer');
});

Route::get('/library', function () {
    return view('library.index');
});
Route::get('/librarylec', function () {
    return view('library.indexlecturer');
});

Route::get('/news', function () {
    return view('news.index');
});
Route::get('/content', function () {
    return view('news.content');
});
Route::get('/newslec', function () {
    return view('news.indexlecturer');
});
Route::get('/contentlec', function () {
    return view('news.contentlecturer');
});

Route::get('/community', function () {
    return view('community.index');
});
Route::get('/comdetails', function () {
    return view('community.comdetails');
});

Route::get('/mailinfo', function () {
    return view('mailinfo.index');
});
Route::get('/mailinfolec', function () {
    return view('mailinfo.indexlecturer');
});
Route::get('/mailcontent', function () {
    return view('mailinfo.content');
});
Route::get('/mailcontentlec', function () {
    return view('mailinfo.contentlecturer');
});