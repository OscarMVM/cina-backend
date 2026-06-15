<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;

Route::apiResource('/materias', MateriaController::class);