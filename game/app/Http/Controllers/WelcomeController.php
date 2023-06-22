<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function get_inf() {

       
        return view('welcome');
        
    }
   
}
