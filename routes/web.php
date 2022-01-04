<?php

//aprendible.com = Route :: get('/',function)'

/*

Route::get('contactanos', function () {
    return "Hola desde contacto";
})->name('contactos');
// Se definen parametros no obligatorios 
Route::get('saludo/{nombre?}', function ($nombre='invitado') {
    return "Hola ".$nombre;
});

// rutas con nombres
Route::get('contactos', function () {
    echo "<a href='".route('contactos')."'>Contactos 2</a>";
    echo "<a href='".route('contactos')."'>Contactos 3</a>";
    echo "<a href='".route('contactos')."'>Contactos 4</a>";
    echo "<a href='".route('contactos')."'>Contactos 1</a>";
    echo "<a href='".route('contactos')."'>Contactos 5</a>";

});
/*Route::get('/', function () {
    $nombre = "Francisco";
    return view('home',['nombre'=>'francisco']);
})->name('home');
8*/
$portfolio = [
    ['title' => 'Portafolio 1'],
    ['title' => 'Portafolio 2'],
    ['title' => 'Portafolio 3'],
    ['title' => 'Portafolio 4'],
    ['title' => 'Portafolio 5'],
];
// metodos de impresion de vistas 
Route::view('/', 'home',['nombre'=>"francisco"]);
Route::view('/contact', 'contactos');
Route::view('/portfolio', 'portafolio',compact('portfolio'));
Route::view('/about', 'about');
