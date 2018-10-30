<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send(Request $request) {
        // dd($request);
        $data = array(
        	'nombre'  =>$request->nombre,
        	'correo'  =>$request->correo,
        	'celular' =>$request->celular,
        	'mensaje' =>$request->mensaje
        );

        Mail::send('email.index', $data, function ($message) use($request) {
			$message->from($request->correo,$request->nombre);
			// Asunto
			$message->to('gmezjhon@gmail.com')->subject('Informacion página web Industrias Maviltex');
		});

		return redirect('./')->with('status', 'Se envió el correo con exito!');
    }
}
