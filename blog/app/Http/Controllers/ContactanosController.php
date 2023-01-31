<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');

    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('nestorfm801@gamil.com')->send($correo);
    
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado'); //Para redirijir a la ruta del from y a parte se mandará un mensaje de sesión.
    }
}
