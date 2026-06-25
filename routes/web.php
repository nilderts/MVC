<?php
use Lib\Route;

use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
    return 'hola desde la página de contacto';
});

Route::get('/about', function(){
    return 'hola desde la página acerca de';
});


Route::get('/courses/:slug',function($slug){
    return 'el curso es: '.$slug;
});



Route::dispatch();
?>