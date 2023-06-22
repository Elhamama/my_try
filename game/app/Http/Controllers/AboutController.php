<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function get_in() {

        // dd('ggggggggggggggggggggggggggggggggggggggg');

        return view('about');
        
    }
}
