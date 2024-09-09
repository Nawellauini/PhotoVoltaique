<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function registerpage(){

        return view("authentification.register");

    }
    //creation de compte 
    public function registerpost(Request $request){

        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make( $request->password);
        $User->save();         
        return  view('authentification.login')->with("success","Register successfully");

    }
    
}
