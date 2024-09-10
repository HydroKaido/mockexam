<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'displayPost']);
Route::get('/register', [AuthController::class, 'registerLink'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');
Route::get('/login', [AuthController::class, 'loginLink'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/', [PostController::class, 'postblog'])->name('create');
Route::get('/', [PostController::class, 'blogdisplay']);
Route::get('/editpost', [PostController::class, 'accountDisplay']);
Route::get('/post', [PostController::class, 'createlink'])->name('create.view');
Route::delete('/createpost/{id}', [PostController::class, 'deletepost'])->name('delete.post');
Route::get('/editpost', [PostController::class, 'editpost'])->name('edit.post');
Route::get('/createpost', [PostController::class, 'createlink'])->name('create.view');
Route::post('/createpost', [PostController::class, 'postblog'])->name('create.post');
Route::put('/updatepost', [PostController::class, 'updatepost'])->name('update.post');
Route::get('/updatepost', [PostController::class, 'updatelink'])->name('update.view');
