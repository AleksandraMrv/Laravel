<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UniversityController;
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

Route::get('/', [UniversityController::class,'all']);
Route::get('/university/{id}/show', [UniversityController::class,'show']);
Route::get('/university/{id}/edit', [UniversityController::class,'edit']);
Route::post('/university/{id}/update', [UniversityController::class,'update']);
Route::post('/university/{id}/delete', [UniversityController::class,'delete']);
Route::get('/faculties',[FacultyController::class,'all']);
