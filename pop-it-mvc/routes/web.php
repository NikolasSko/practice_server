<?php

use Src\Route;

Route::add('GET', '/lecturers', [Controller\Site::class, 'lecturers'])
    ->middleware('auth');
Route::add('GET', '/departments', [Controller\Site::class, 'departments'])
    ->middleware('auth');
Route::add('GET', '/disciplines', [Controller\Site::class, 'disciplines'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_lecturer', [Controller\Site::class, 'add_lecturer'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_dean', [Controller\Site::class, 'add_dean'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/attach_lecturer', [Controller\Site::class, 'attach_lecturer'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'add_department'])
    ->middleware('auth');;
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
