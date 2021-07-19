<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\role;
use Illuminate\Support\Facades\Hash;




class Space_1Controller extends Controller
{

    public function inscriptions(){
        return view('space_1');
    }
    
    public function inscription(request $request){
       
        $member= new users;
        $member->name = $request->name;
        $member->forname = $request->forname;
        $member->email = $request->email;
        $member->password =Hash::make($request->password);
        $member->role_id = role::firstWhere('name_role','=',$request->name_role)->id;
        $member->save();
        return redirect('space')->with('post_register', 'votre compte a été bien crée');
       
    }
}
