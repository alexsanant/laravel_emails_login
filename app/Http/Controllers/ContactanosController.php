<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importamos la clase Mail
use Illuminate\Support\Facades\Mail;

//Importamos la clase ContactanosMailable
use App\Mail\ContactanosMailable;


class ContactanosController extends Controller
{
  //Método que mostrará el formulario de contacto
    public function index(){

      return view('contactanos.index');

    }

  //Método que procesará el formulario y enviará el correo
  public function store(request $request){


    $request->validate([

      'name' => 'required',
      'correo' => 'required|email',
      'mensaje' => 'required',
    ]);

    //Instancia de la clase ContactanosMailable
    $correo = new ContactanosMailable($request->all());

    //LLamamos a la clase Mail y accedemos al método to en el que definimos el correo del destinatario
    //y le pasamos la clase send y le pasamos la instancia de la clase mailable
    Mail::to('alexsanant@gmail.com')->send($correo);

    return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');

  }


}
