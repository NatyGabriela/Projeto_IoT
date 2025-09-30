<?php


use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

use App\Livewire\Dashboard;

use App\Livewire\RegistroList;

use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;

use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::prefix('sensor')->group(function(){
Route::get('/create', SensorCreate::class)->name('sensor.create');
Route::get('/list', SensorList::class)->name('sensor.list');
Route::get('/edit/{id}', SensorEdit::class)->name('sensor.edit');


Route::get('registro/list', RegistroList::class);
