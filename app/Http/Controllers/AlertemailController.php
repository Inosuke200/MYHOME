<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertemailController extends Controller
{
 public function alertemails(){
     return view('alertemail');
 }
}
