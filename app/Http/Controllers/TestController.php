<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function affichepage(){
        $nom="nawel";
        $age="21" ;
        $names=["aa","zz","ee"];
        return view('page');
    }
}
