<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    // actions = métodos dentro de um controlador
    public function principal(){
        return view('site.principal');
    }

}
