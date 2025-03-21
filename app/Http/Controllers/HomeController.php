<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Se le puede poner __invoke cuando solo se va a tener un metodo
    public function __invoke(){
        return view("home");
    }
}
