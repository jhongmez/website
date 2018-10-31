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
            'asunto' =>$request->asunto,
        	'mensaje' =>$request->mensaje
        );

        Mail::send('email.index', $data, function ($message) use($request) {
			$message->from('lidersistemas@maviltex.com',$request->nombre);
			// Asunto
			$message->to('lidersistemas@maviltex.com')->subject($request->asunto);
		});

		return redirect('./')->with('status', 'Se envió el correo con exito!');
    }
}
