<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function aHome(){
    	return view("home");
    }

    public function aExp(){
    	return view("experiencias");
    }

    public function aNH(){
    	return view("nuestraHistoria");
    }

    public function aCRP(){
    	return view("comoRealizarCompra");
    }

    public function aPF(){
    	return view("preguntasFrecuentes");
    }

}
