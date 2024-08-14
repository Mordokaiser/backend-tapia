<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;
//ruta para guardar un registro de telefono
Route::post('add-phones', [PhonesController::class, 'store']);
Route::get('show-phones', [PhonesController::class, 'show']);
Route::put('edit-phones/{id}', [PhonesController::class, 'edit']);
Route::delete('delete-phones/{id}', [PhonesController::class, 'destroy']);