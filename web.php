<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function() {
return view ('welcome');
});
//Route::get('/empleados','EmpleadosController@index');
//Route::get('/empleados/create','EmpleadosController@create');
    Route::resource('empleados','EmpleadosController');
    
  

  
    

