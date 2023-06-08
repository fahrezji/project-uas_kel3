<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutcontroller extends Controller
{
    public function index(){
        return view('layout.main');
    }

    public function home(){
        return view('layout.home');
    }
    public function frontend(){
        return view('layout.frontend');
    }
}
