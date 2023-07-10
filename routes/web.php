<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    Route::get('Soldado', [SoldadosController::class,'index']);

    Route::post('Soldado', [SoldadosController::class,'store'])->name('soldado.store');

    Route::get('Servicio', [ServiciosController::class,'index']);

    Route::post('Servicio', [ServiciosController::class,'store'])->name('servicio.store');

    Route::get('Cuerpo', [CuerpoEController::class,'index']);

    Route::post('Cuerpo', [CuerpoEController::class,'store'])->name('cuerpo.store');

    Route::get('Cuartel', [CuartelsController::class,'index']);

    Route::post('Cuartel', [CuartelsController::class,'store'])->name('cuartel.store');

    Route::get('Company', [CompanyController::class,'index']);

    Route::post('Company', [CompanyController::class,'store'])->name('company.store');






});
