<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageResive;
use Illuminate\Support\Facades\Mail;
class MessajeController extends Controller
{
   public function store()
   {
      $message = request()->validate([
           'name' => 'required',
           'lastname' => 'required',
           'email' => 'required|email',
           'subject'=>'required',
           'description' =>'required|min:3'
       ],[
           'name.required'=>'Necesito el nombre '
       ]);
       //Enviar email
       Mail::to('franciscoriquelme200@gmail.com')->queue(new MessageResive($message));
       
       return back()->with('status','Recibimos tu mensaje');
      
   }
}
