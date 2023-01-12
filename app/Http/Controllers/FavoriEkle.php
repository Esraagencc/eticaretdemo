<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriEkle extends Controller
{
    public function favorilerim(Request $request){
        $tumUrunler = urunleriGetir();
        if ($request->session()->has('favori')){
            $sepettekiUrunler = $request->session()->get('favori');
        }else{
            $sepettekiUrunler = [];
        }
        // print_r($sepettekiUrunler);
        return view('favorilerim',[
            'tumUrunler'=>$tumUrunler,
            "sepettekiUrunler"=>$sepettekiUrunler
        ]);
    }

    public function favorilerimEkle(Request $request, $id){

        if ($request->session()->has('favori')){
            $globalfavori = $request->session()->get('favori');
        }else{
            $globalfavori = [];
        }
        if (!in_array($id,$globalfavori)){
            $sepeturunleri = array_merge($globalfavori,[$id]);
        }else{
            $sepeturunleri = $globalfavori;
        }
        $request->session()->put('favori',$sepeturunleri);
        return redirect()->route('favorimrouteisim');
        //redirect=yönlendir

    }
}
