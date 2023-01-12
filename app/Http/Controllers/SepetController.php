<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SepetController extends Controller
{
    public function sepet(Request $request){
        $tumUrunler = urunleriGetir();

        // has= session da sepet var mı diye kontrol ediyor.iflerde kullanılır
        // get=session da ki sepet değişkeninin içindekini getirir.
        // put= sessionda bir veri oluşturmada ve olan veriyi güncelleme de
        if ($request->session()->has('sepet')){
            $sepettekiUrunler = $request->session()->get('sepet');
        }else{
            $sepettekiUrunler = [];
        }
        print_r($sepettekiUrunler);
     return view('alısverissepeti',[
         'tumUrunler'=>$tumUrunler,
         "sepettekiUrunler"=>$sepettekiUrunler
     ]);
    }
    public function sepetEkleGet(Request $request,$id)
    {
        if ($request->session()->has('sepet')){
            $globalSepet = $request->session()->get('sepet');
        }else{
            $globalSepet = [];
        }
        if (!in_array($id,$globalSepet)){
            $sepeturunleri = array_merge($globalSepet,[$id]);
        }else{
            $sepeturunleri = $globalSepet;
        }
        $request->session()->put('sepet',$sepeturunleri);
        return redirect()->route('sepetimrouteisim');
        //redirect=yönlendir


    }
    public function sepetSilGet(Request $request,$id){
        $globalSepet = $request->session()->get('sepet');
        $guncelindis=array_search($id,$globalSepet);
        unset($globalSepet[$guncelindis]);
        $request->session()->put('sepet',$globalSepet);
        return redirect()->route('sepetimrouteisim');
    }
}
