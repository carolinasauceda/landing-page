<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function enviar(Request $request) {
        $this->validate($request, [
          'name' => 'required|string',
          'email' => 'required|email',
          'message' => 'required',
          'subject' => 'required'
        ]);
        $name=$request['name'];
        $email=$request['email'];
        $title=$request['subject'];
        $message=$request['message'];

        $data = array('name'=>"Formulario de contacto | Agencia Automotriz");

        Mail::raw($message, function($message) use ($title, $name, $email){
            $message->to("k98@live.com", "Carolina Sauceda")->subject
                ($title);
            $message->from($email, $name);
        });
        echo "Tu mensaje se ha enviado con exito!";

        return response()->json(null, 200);
    }

}