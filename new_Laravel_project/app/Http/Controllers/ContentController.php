<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function content()
    {
        return view('public.content.index');
    }
}
