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

Route::get('/ecole', function () {
    return view('welcome');
});
Route::get('/salam/{nom}', function (Request $request) {
    return view('salam',
    [ 'nom'=> $nom]);
});
Route::post('/ecole/inscription', [Etudiantcontroller::class , 'form_inscription']  );