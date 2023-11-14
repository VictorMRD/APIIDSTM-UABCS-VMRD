<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $var = "Victor Rodriguez";
        return view('main', ['var'=>$var]);
    }
}
