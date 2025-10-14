<?php


use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('registro', [RegistroController::class, 'store']);
Route::get('sensor/find', [SensorController::class, 'show']);
Route::get('sensor/update', [SensorController::class, 'update']);

