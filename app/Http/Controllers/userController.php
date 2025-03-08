<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function showMessage(){
        return view('test');
    }

    public function showUser( int $id){
        return view('uzers', ['id' => $id]);
    }

    public function showHome(){
        return view('home');
    }
}

