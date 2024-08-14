<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;

Route::get('/', function () {
    return view('welcome');
});
//ruta para guardar un registro de telefono
Route::get('add-phones', [PhonesController::class, 'store']);
