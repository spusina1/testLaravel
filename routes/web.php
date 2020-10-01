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
    return view('podaci.welcome');
});

Route::get('/licniPodaci', 'LicniPodaciController@podaciOsoba');
Route::get('/licniPodaci/unos', 'LicniPodaciController@popuniFormu');
Route::get('/licniPodaci/poruka', 'LicniPodaciController@poruka');
Route::get('/licniPodaci/{id}', 'LicniPodaciController@dajPodatke');
Route::post('/licniPodaci/spasiPodatke', 'LicniPodaciController@spasiPodatke');
Route::delete('/licniPodaci/{id}', 'LicniPodaciController@obrisiPodatke');

