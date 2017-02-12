<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use coeneo\Mail\Contacto;
Route::get('/', function () {
    return view('index/index');
})->name('index');
Route::get("/mail",function(){
	Mail::to("no-replay@productosalimenticioscoeneo.com")->send(new Contacto);
	//mail("rogelioroger281@gmail.com","prueba","Hola","equis");
});
Route::get('productos',[
	'uses'	=>	'Controller@productos',
	'as'	=>	'productos'
	]);
Route::POST('/contacto',[
		'uses'	=>	'Controller@contacto',
		'as'	=>	'contacto'
		]);
