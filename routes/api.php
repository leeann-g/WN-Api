<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/index', function(){
    return response()->json([
        'mensaje' => 'Base del proyecto listo para enviar el primer commit'
    ]);
});

Route::apiResource('/task',);