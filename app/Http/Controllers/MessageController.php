<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /*public function store(Request $request){
    	//return $request->get("nombre");
    	//return 'Mensaje recibido correctamente';
    }*/
    /*public function store(){
    	//Se puede quitar tambien el use de la clase Request
    	return request("email");
    }*/

    public function store(){
    	$message = request()->validate([
    		'name'	=>	'required',
    		'email'	=> 	'required|email',
    		'subject'	=>	'required',
    		'content'	=> 'required|min:3'
    	], [
    		'name.required'	=> __('I need your name'),
    	]);

    	//Mail::to("pineiro.juanma@gmail.com")->send(new MessageReceived($message));
    	//Se recomienda usar el metodo queue en lugar de send para no dejar esperando al usuario, por default queue va a usar send
    	Mail::to("pineiro.juanma@gmail.com")->queue(new MessageReceived($message));
    	return 'Mensaje enviado';
    }
}
