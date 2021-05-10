<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UniversityController;
use App\Http\Controllers\API\FacultyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
    GET /api/universities - vrati mi sve univerzitete iz baze - index
    GET /api/universities/{id} - vrati mi univerzitet sa datim id -jem - show
    POST /api/universities - kreiraj novi univerzitet - store
    PUT /api/universities/{id} - izmeni univerzitet sa datim id -jem podacima iz tela zahteva - update
    DELETE /api/universities/{id} - obrisi univerzitet sa datim id -jem - destroy
*/


Route::apiResources([
    'universities'=>UniversityController::class,
    'faculties'=>FacultyController::class
]);
