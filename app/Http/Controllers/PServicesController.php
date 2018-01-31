<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PServicesController extends Controller
{
    //
    public function painter(){
    
        return view('pservices.painter');
    }
    
    public function carpainter(){
    
        return view('pservices.carpainter');
    }
    
    public function plumber(){
    
        return view('pservices.plumber');
    }
    public function architecture(){

        return view('pservices.architecture');
    }
}
