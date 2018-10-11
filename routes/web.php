<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/clientes', 'APIController@listaClientes');
$router->get('/clientes/{id}', 'APIController@listaCliente');
$router->post('/clientes', 'APIController@cadastraCliente');
$router->delete('/clientes/{id}', 'APIController@deleteCliente');
$router->put('/clientes', 'APIController@alteraCliente');
