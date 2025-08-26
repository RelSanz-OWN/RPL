<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.home'));
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
Route::get('/pages/tentangkami', fn() => view('pages.tentangkami'))->name(name:'pages.tentangkami');
Route::get('/pages/home', fn() => view('pages.home'))->name('pages.home');
Route::get('/pages/patner', fn() => view('pages.patner'))->name("pages.patner");
;
