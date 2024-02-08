<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::post('/create', [AdminController::class, 'store']);
Route::post('/login', [AdminController::class, 'login']);

Route::get('admin/teste', [AdminController::class, 'verificaUsuarioLogado']);
