<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\EstudianteController;

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
    return view('welcome');
});


/*Route::get('/saludar/{nombre}', function ($nombre) {
    return "Hola ".$nombre;
});

Route::resource('/estudiante', EstudianteController::class);*/