<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnosController;

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

Route::get('/', function () {
    return view('welcome');
});

/* Ejercicio de operaciones basicas */
Route::get('/resta/{nf?}/{ns?}', function (int $nf=0, $ns=0) {
    return 'Resultado: ' .$nf - $ns;
})->where(['nf' => '[0-9]+', 'ns' => '[0-9]+']);
Route::get('/suma/{nf?}/{ns?}', function (int $nf=0, $ns=0) {
    return 'Resultado: ' .$nf + $ns;
})->where(['nf' => '[0-9]+', 'ns' => '[0-9]+']);
Route::get('/multiplicacion/{nf?}/{ns?}', function (int $nf=0, $ns=0) {
    return 'Resultado: ' .$nf * $ns;
})->where(['nf' => '[0-9]+', 'ns' => '[0-9]+']);
Route::get('/division/{nf?}/{ns?}', function (int $nf=0, $ns=0) {
    return 'Resultado: ' .$nf / $ns;
})->where(['nf' => '[0-9]+', 'ns' => '[0-9]+']);

Route::get('/main/{var?}', function (string $var="victor") {
    /* De esta manera decimos que los datos de un parametro son mandados a la vista
        Asi las variables que aqui recibimos pueden ser utilizadas en la vista*/
    return view('main', ['var'=> $var]);
});

/* el ? al final de una variable nos indiica que el parametro puede ser opcional.
    Esto sirve para que en caso de que el parametro no sea enviado la ruta no devuelva un error.
    Para poder hacer esto, tenemos que declarar una valor predefinido por deault en la varriable. */
Route::get('/saludo/{nombre?}/{lastname?}', function (string $nombre ="", $lastname ="") {
    return 'Hola ' .$nombre. ' ' .$lastname;
    /* Where nos permite validar el tipo de dato que se puede ingresar por la ruta 
    Podemos ver los diferentes tipos de datos que podemos validar en la documentacion de las rutas en la pagina oficial
    de Laravel */
})->where(['nombre' => '[a-z]+', 'lastname' => '[a-z]+']);


use App\Http\Controllers\UserController;
Route::get('/users', [alumnosController::class, 'getAll']);

Route::get('/users/{id}', [alumnosController::class, 'getID']);
