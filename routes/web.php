<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\LegumesController;
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

Route::get('/', [FruitsController::class,'index'])->name('fruits');
Route::get('/fruits/{id}/show', [FruitsController::class,'show'])->name('showFruit');
Route::get('/legumes/{id}/show', [LegumesController::class,'show'])->name('showLegume');
Route::get('/legumes', [LegumesController::class,'index'])->name('légumes');
