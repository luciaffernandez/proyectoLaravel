<?php

//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/saludo', function () {
//    return "<h1>Buenos dias y por si no nos volvemos a ver buenas tardes y buenas noches</h1>";
//});
//
//Route::get('/presentacion', function () {
//    return "<h1>Me llamo Lucía y tengo 21 años</h1>";
//});
//
//Route::pattern("id", "[0-9]");
//
//Route::get('/informacion/{id?}', function ($id=": sin informacion") {
//    return "<h1>Seccion con id con la restriccion especifica: $id</h1>";
//})->where("id", "[0-5]");
//
//Route::get('/otro/{id?}', function ($id=": sin informacion") {
//    return "<h1>Otra seccion con id con restriccion general: $id</h1>";
//});
//
//Route::get('/lucia', "Lucia@index");

Route::get('/', "MiApp@index");
Route::get('/contacto', "MiApp@contacto")->middleware("auth");
Route::get('/about', "MiApp@about");
Route::get('/productos', "MiApp@productos");
Route::post('/productos', "MiApp@productos");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
