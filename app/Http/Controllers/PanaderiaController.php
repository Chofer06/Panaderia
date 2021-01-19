<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanaderiaController extends Controller
{
    public function getIndex(){
        return view('principal');
    }
}
