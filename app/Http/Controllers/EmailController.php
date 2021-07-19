<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{


   
    public function sendEmail(Request $request)
        {
            // $request->validate([
            //   'nom' => 'required|string',
            //   'email' => 'required|email',
            //   'sujet' => 'required|string',
            //   'message' => 'required|string',
            // ]);
    
            $data = [
              'nom' => $request->nom,
              'email' => $request->email,
              'sujet' => $request->sujet,
              'message' => $request->message
            ];
    
            Mail::send('contact', $data, function($message) use ($data) {
              $message->to($data['email'])
              ->subject($data['sujet']);
            });
    
            return back()->with(['message' => 'Email envoyé avec succès!']);
        }
  
}
