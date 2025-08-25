<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.home'));
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
;
