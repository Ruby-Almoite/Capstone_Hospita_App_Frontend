<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Blogs Pages

    public function blogs (){
        return view ('pages.blogs');
    }
}
