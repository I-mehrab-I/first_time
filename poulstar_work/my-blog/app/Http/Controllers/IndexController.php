<?php

namespace App\Http\Controllers;

use App\Models\DigitalContent;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class IndexController extends Controller
{
    public function index()
    {
        $products = DigitalContent::all();
        // dd($products);
        return view('pages.index', compact('products'));
        
         
    }

    public function single(DigitalContent $digitalContent)
    {
        // $products = DigitalContent::all();
        // dd($products);
        return view('pages.single', compact('digitalContent'));
        
         
    }
}