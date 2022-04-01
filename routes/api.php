<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* User */
Route::get('/datauser', ['App\Http\Controllers\ApiControler', 'listApiUser']);
Route::post('/datauser', ['App\Http\Controllers\ApiControler', 'createApiUser']);
Route::delete('/datauser/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiUser']);
/* Offre */
Route::get('/dataoffre', ['App\Http\Controllers\ApiControler', 'listApiOffre']);
Route::post('/dataoffre', ['App\Http\Controllers\ApiControler', 'createApiOffre']);
Route::delete('/dataoffre/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiOffre']);
/* Droit */
Route::get('/datadroit', ['App\Http\Controllers\ApiControler', 'listApiDroit']);
Route::post('/datadroit', ['App\Http\Controllers\ApiControler', 'createApiDroit']);
Route::delete('/datadroit/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiDroit']);
/* Adresse */
Route::get('/dataadresse', ['App\Http\Controllers\ApiControler', 'listApiAdresse']);
Route::post('/dataadresse', ['App\Http\Controllers\ApiControler', 'createApiAdresse']);
Route::delete('/dataadresse/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiAdresse']);
/* Candidature */
Route::get('/datacandid', ['App\Http\Controllers\ApiControler', 'listApiCandidature']);
Route::post('/datacandid', ['App\Http\Controllers\ApiControler', 'createApiCandidature']);
Route::delete('/datacandid/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiCandidature']);
/* Centre */
Route::get('/datacentre', ['App\Http\Controllers\ApiControler', 'listApiCentre']);
Route::post('/datacentre', ['App\Http\Controllers\ApiControler', 'createApiCentre']);
Route::delete('/datacentre/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiCentre']);
/* Entreprise */
Route::get('/dataentreprise', ['App\Http\Controllers\ApiControler', 'listApiEntreprise']);
Route::post('/dataentreprise', ['App\Http\Controllers\ApiControler', 'createApiEntreprise']);
Route::delete('/dataentreprise/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiEntreprise']);
/* Promotion */
Route::get('/datapromotion', ['App\Http\Controllers\ApiControler', 'listApiPromotion']);
Route::post('/datapromotion', ['App\Http\Controllers\ApiControler', 'createApiPromotion']);
Route::delete('/datapromotion/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiPromotion']);
/* Message */
Route::get('/datamessage', ['App\Http\Controllers\ApiControler', 'listApiMessage']);
Route::post('/datamessage', ['App\Http\Controllers\ApiControler', 'createApiMessage']);
Route::delete('/datamessage/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiMessage']);

/* ListeOffreEntreprise */
Route::get('/dataoffreentreprise', ['App\Http\Controllers\ApiControler', 'listApiOffreEntreprise']);

/* Avoir */
Route::get('/dataavoir', ['App\Http\Controllers\ApiControler', 'listApiAvoir']);
Route::post('/dataavoir', ['App\Http\Controllers\ApiControler', 'createApiAvoir']);
Route::delete('/dataavoir/{id}', ['App\Http\Controllers\ApiControler', 'deleteApiAvoir']);

