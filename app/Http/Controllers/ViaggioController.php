<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaggio; 

class ViaggioController extends Controller
{ 
    public function home() {

        $viaggi = Viaggio::all(); 
        return view('home', compact('viaggi')); 

    }
}
