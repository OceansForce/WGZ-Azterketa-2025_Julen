<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkitaldiakController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersEkitaldiakController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('ekitaldiak', [EkitaldiakController::class, 'index']);
Route::post('E_sortu', [EkitaldiakController::class , 'store']);
Route::put('E_editatu/{ekitaldiak}', [EkitaldiakController::class , 'update']);
Route::delete('E_ezabatu/{ekitaldiak}', [EkitaldiakController::class , 'destroy']);

Route::get('dentistak', [UsersController::class, 'dentistak']);

Route::post('/login', [UsersController::class, 'login']);

Route::delete('logout', [UsersController::class, 'logout'])->middleware("auth:sanctum");

Route::get('/ekitaldiak/{id}', [UsersEkitaldiakController::class, 'ekitaldiak']);
Route::get('/partehartzaileak/{id}', [UsersEkitaldiakController::class, 'partehartzaileak']);

Route::post('izenaeman/{id}', [UsersEkitaldiakController::class, 'izenaeman'])->middleware("auth:sanctum");