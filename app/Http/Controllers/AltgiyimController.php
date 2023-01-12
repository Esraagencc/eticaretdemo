<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AltgiyimController extends Controller
{
    public function altgiyim(Request $request){
        return view('altgiyimview');
    }


}
