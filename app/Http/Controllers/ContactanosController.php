<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    
     public function index(){
       
        return view('contactos.index');

     }

     public function store(Request $request){

        $request->validate([
          
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'

        ]);

       $mail= new ContactanosMailable($request->all());

       Mail::to('rykrd0_1989@hotmail.com')->send($mail);

       return redirect()->route('contactanos.index')->with('info','Mensaje enviado');

     }

}
