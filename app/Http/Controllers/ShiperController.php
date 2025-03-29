<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiperController extends Controller
{
    //
    public function index (){
        return view('shiper.index');
    }

    public function home (){
        return view('web.home');
    }

    public function Login (){
        return view('web.login');
    }

    public function list (){
        return view('web.list-product');
    }
}
