<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkitaldiakController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('ekitaldiak', [EkitaldiakController::class, 'index']);
Route::post('E_crear', [EkitaldiakController::class , 'store']);
Route::put('E_editar/{ekitaldiak}', [EkitaldiakController::class , 'update']);
Route::delete('E_borrar/{ekitaldiak}', [EkitaldiakController::class , 'destroy']);