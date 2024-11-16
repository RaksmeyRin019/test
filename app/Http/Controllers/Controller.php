<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function view(){
        return view('welcome');
    }
    public function indexs(){
        return view('index');
    }
    public function nab(){
        return view('layout.partials.navbar');
    }
    public function slideb(){
        return view('layout.partials.slidebar');
    }
    public function login(){
        return view('auth.password.login');
    }
    public function register(){
        return view('auth.password.register');
    }
    public function pass(){
        return view('auth.password.passwords');
    }
}
