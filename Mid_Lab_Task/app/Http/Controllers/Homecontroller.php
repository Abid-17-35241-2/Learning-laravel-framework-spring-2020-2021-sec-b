<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function user(){
        return view('home.user');
    }
    public function admin(){

       // $ad=Admin::all();

        return view('home.admin');
    }
}
