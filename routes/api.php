<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PastoController;
use App\Http\Controllers\VersionController;

Route::apiResource('/materias', MateriaController::class);
Route::apiResource('/pastos', PastoController::class);
Route::apiResource('/versions', VersionController::class);