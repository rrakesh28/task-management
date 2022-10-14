<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){
        return view('createClient');
    }

    public function show(){
        return view('showClient');
    }
}
