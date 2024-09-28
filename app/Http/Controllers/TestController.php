<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name = null): string 
    {
        return "Hello HomeController name: ". $name;
    }
}
