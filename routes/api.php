<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;
//ruta para guardar un registro de telefono
Route::post('add-phones', [PhonesController::class, 'store']);
