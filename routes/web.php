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

Route::view('/', 'welcome')->name('index');
Route::view('/experience', 'experience')->name('experience.index');
Route::view('/education', 'welcome')->name('education.index');
Route::view('/projects', 'welcome')->name('projects.index');
