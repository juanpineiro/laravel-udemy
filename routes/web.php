<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	$portfolio = [
		['title'    => 'Proyecto #1'],
		['title'    => 'Proyecto #2'],
		['title'    => 'Proyecto #3'],
		['title'    => 'Proyecto #4'],
	];
//Este metodo sirve para retornar vistas con poca y nada de informacion, que no requieren logica. Es mejor por cuestiones de rendimiento.
//Route::view('/','home', ['nombre'=>'Jorge']);
Route::view('/','home')->name("home");
Route::view('/about','about')->name("about");
Route::view('/contact','contact')->name("contact");
Route::view('/portfolio','portfolio',compact('portfolio'))->name("portfolio");
//Route::get('/portfolio',PortfolioController::index)->name('portfolio');
//Route::get('projects','App\Http\Controllers\PortfolioController@index');
Route::resource('projects','App\Http\Controllers\PortfolioController');
//Route::resource('projects','App\Http\Controllers\PortfolioController')->only(['index','show']);
//Route::resource('projects','App\Http\Controllers\PortfolioController')->except(['index','show']);
//Route::apiResource('proyectos','App\Http\Controllers\PortfolioController');

Route::post('contact','App\Http\Controllers\MessagesController@store');

/*Route::get('/', function () {
    //return view('welcome');
    echo "<a href='".route('contacto')."'>Contactos 1</a><br>";
    echo "<a href='".route('contacto')."'>Contactos 2</a><br>";
    echo "<a href='".route('contacto')."'>Contactos 3</a><br>";
    echo "<a href='".route('contacto')."'>Contactos 4</a><br>";
    echo "<a href='".route('contacto')."'>Contactos 5</a><br>";
    $nombre="Jorge";
    //return view('home');
    return view('home')->with('nombre',$nombre); //se pasa como primer parametro el nombre, y de segundo el valor
    return view('home', ['nombre'=>'Jorge']);
    return view('home', compact('nombre'));//devuelve el mismo array que antes pero si tiene el mismo nombre de la variable
})->name('home');*/
/*
Route::get("contactos",function(){
	return "Bienvenido a la pagina de Contactos";
})->name('contacto');

Route::get("saludo/{nombre}", function($nombre="invitado"){
	return "Saludos ".$nombre;
});

Route::get("contactanos",function(){
	return "Sección de Contacto";
});
*/