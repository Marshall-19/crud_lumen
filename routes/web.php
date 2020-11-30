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

$router->get('artikel/get', 'ArtikelController@get');
$router->post('artikel/add', 'ArtikelController@add');
$router->put('artikel/update/{id}', 'ArtikelController@update');
$router->delete('artikel/delete/{id}', 'ArtikelController@delete');




$router->get('profil/get', 'Profil@tampilProfil');
$router->post('profil/add', 'Profil@tambahProfil');
$router->put('profil/update/{id}', 'Profil@update');
$router->delete('profil/delete/{id}', 'Profil@delete');



// get untuk mengambil data
// post insert data
// put untuk update data
// delete untuk menghapus data
