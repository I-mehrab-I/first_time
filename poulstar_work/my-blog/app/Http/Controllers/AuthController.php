<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show_login()
{
    return view('pages.login');
}

public function login()
{

}

public function show_register()
{
    return view('pages.register');
}

public function register()
{

}
}