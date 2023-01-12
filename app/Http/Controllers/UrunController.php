<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function urunler(Request $request){
        $now = date('i');
        $request->session()->put('giriszamani',$now);
        return "urundesiniz";
    }
    public function detaysayfasi($urunismi, Request $request){
        echo $request->session()->get('giriszamani');
        $adet = $request->get('adet');
        if(!$request->has('adet')){
            return $urunismi ."stokta yok";
        }
        else {
            return $adet . " adet " . $urunismi;
        }
    }
}
