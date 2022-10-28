<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
//    toast('Welcome at St. Timothy Anglican Divinity College','success');
    return view('pages/home');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/courses', function () {
    return view('pages/courses');
});
Route::get('/mission', function () {
    return view('pages/mission');
});
Route::get('/history', function () {
    return view('pages/history');
});
Route::get('/values', function () {
    return view('pages/core-values');
});
Route::post('/contact',[\App\Http\Controllers\FormController::class,'index']);
Route::post('/course-apply',[\App\Http\Controllers\FormController::class,'apply']);
