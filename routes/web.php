<?php

// metodos de impresion de vistas 
Route::view('/', 'home',['nombre'=>"francisco"])->name('home');
Route::view('/contact', 'contactos')->name('contact');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portafolio');
Route::post('/contact', 'MessajeController@store');
//Route::resource('/proyectos', 'PortfolioController');

//only muestra todos los metodos seleccionados 