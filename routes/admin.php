<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Aquí es donde colocaremos todas las rutas de la parte de administración.
| Serán vistas propias del panel. Usaremos
|
*/

Route::get('/', function () {
    return 'Aquí habrá un panel de admin';
});

Route::get('/articulos', function () {
    return 'Aquí habrá articulos';
});
