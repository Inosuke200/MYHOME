<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function vented(){
        return view('vente_home');
    }
}
