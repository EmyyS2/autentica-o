<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Middleware\SetSanctumGuard;
use Illuminate\Support\Facades\Route;

Route::post('/create', [AdminController::class, 'store']);
Route::post('/login', [AdminController::class, 'login']);

//prestar atenção na ordem dos middleware!!!!!
Route::get('admin/teste', [AdminController::class, 'verificaUsuarioLogado'])
    ->middleware(
        'auth:sanctum',
        SetSanctumGuard::class,
        IsAuthenticated::class
    );
