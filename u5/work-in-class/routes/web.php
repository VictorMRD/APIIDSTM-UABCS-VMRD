<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/main/{var?}', function (string $var="victor") {
    /* De esta manera decimos que los datos de un parametro son mandados a la vista
        Asi las variables que aqui recibimos pueden ser utilizadas en la vista*/
    return view('main', ['var'=> $var]);
});

/* el ? al final de una variable nos indiica que el parametro puede ser opcional.
    Esto sirve para que en caso de que el parametro no sea enviado la ruta no devuelva un error.
    Para poder hacer esto, tenemos que declarar una valor predefinido por deault en la varriable. */
Route::get('/saludo/{nombre}/{lastname?}', function (string $nombre, $lastname ="Doe") {
    return 'Hola ' .$nombre. ' ' .$lastname;
    /* Where nos permite validar el tipo de dato que se puede ingresar por la ruta 
    Podemos ver los diferentes tipos de datos que podemos validar en la documentacion de las rutas en la pagina oficial
    de Laravel */
})->where(['nombre' => '[a-z]+', 'lastname' => '[a-z]+']);

Route::get('/suma/{nf?}/{ns?}', function (int $nf=0, $ns=0) {
    return 'Resultado: ' .$nf + $ns;
});

use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'index']);