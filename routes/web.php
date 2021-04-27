<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginC;
use App\Http\Controllers\AplicacionesC;
use App\Http\Controllers\CiudadesC;
use App\Http\Controllers\ClienteC;
use App\Http\Controllers\DepartamentoC;
use App\Http\Controllers\MclientesC;
use App\Http\Controllers\SectoresC;
use App\Http\Controllers\SubsectoresC;


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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function(){
    return view ('login');
      });
      
    Route::resource('html', LoginC::class);
    Route::resource('html', AplicacionesC::class);
    Route::resource('html', CiudadesC::class);
    Route::resource('html', ClienteC::class);
    Route::resource('html', DepartamentoC::class);
    Route::resource('html', MclientesC::class);
    Route::resource('html', SectoresC::class);
    Route::resource('html', SubsectoresC::class);


