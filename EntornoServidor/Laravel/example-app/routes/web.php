<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacto', function () {
    return view('contactos.contacto');
});

Route::get('datos', function () {
    return view('datos');
});

Route::get('vista', function () {
    return view('vista_Alert');
});
// Lo de al lado de ::get es el endpoint que es lo que voy a poner en la barra de busqueda y lo otro es la vista es que lo que quiero que se vea
