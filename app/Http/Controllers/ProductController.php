<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = ['pc', 'Notebook', 'Mouse', 'Keyboard'];
        $name = 'Kim';
        return view('example', compact('products','name')); // ['products' => ['pc', 'Notebook', 'Mouse', 'Keyboard']]
    }
}
