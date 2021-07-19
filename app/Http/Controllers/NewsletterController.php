<?php

namespace App\Http\Controllers;

use Newsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('welcome');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
        ]);

        if (  !Newsletter::isSubscribed($request->email) ) 
                {
                     Newsletter::subscribePending($request->email);
                    return redirect('/')->with('success', 'Merci pour votre souscription à notre newsletter.');                  
                }
        return redirect('/')->with('failure', 'Désolé, vous avez déjà souscrit. ');
                                    
    }

     public function accused(){
         return view('accuse');
        }
}
