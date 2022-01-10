<?php

// metodos de impresion de vistas 

use App\Http\Controllers\ProjectController;
use App\Models\Product;

Route::view('/', 'home',['nombre'=>"francisco"])->name('home');
Route::view('/contact', 'contactos')->name('contact');
Route::view('/about', 'about')->name('about');

Route::post('/portfolio', 'ProjectController@store')->name('project.store');
Route::get('/portfolio', 'ProjectController@index')->name('project.index');
Route::get('/portfolio/crear', 'ProjectController@create')->name('project.create');
Route::patch('/portfolio/{project}', 'ProjectController@update')->name('project.update');
Route::delete('/portfolio/{project}','ProjectController@destroy')->name('project.destroy');
Route::get('/portfolio/{project}', 'ProjectController@show')->name('project.show');

Route::get('/portfolio/{projects}/editar', 'ProjectController@edit')->name('project.edit');
Route::resource('/products', 'ProductController');

Route::post('/contact', 'MessajeController@store')->name('sendmessage');
Route::view('/register', 'auth.register')->name('register');
//Route::resource('/proyectos', 'PortfolioController');
//Route::resource('Portafolio',Projectcontroller)->name('projects')->parameters(['portsfolio'=>''projects])
//only muestra todos los metodos seleccionados ß
Auth::routes();
