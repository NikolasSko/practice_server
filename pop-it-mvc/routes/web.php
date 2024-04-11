<?php

use Src\Route;

Route::add('GET', '/lecturers', [Controller\Site::class, 'lecturers'])
    ->middleware('auth');
Route::add('GET', '/departments', [Controller\Site::class, 'departments'])
    ->middleware('auth');
Route::add('GET', '/disciplines', [Controller\Site::class, 'disciplines'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
