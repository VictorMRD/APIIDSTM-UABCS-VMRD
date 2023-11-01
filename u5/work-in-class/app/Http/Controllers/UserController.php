<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $var = 23;
        return view('main', ['var'=>$var]);
    }
}
