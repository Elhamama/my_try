<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function get_info() {

        // dd('ggggggggggggggggggggggggggggggggggggggg');

        return view('blog');
        
    }
}
