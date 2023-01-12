<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HizmetlerController extends Controller
{
    public function hizmetler(Request $request){
        $now = date('i');
        $request->session()->put('giriszamani',$now);
    }
    public function hizmetler2($adet, Request $request){
        $giriszamani = $request->session()->get('giriszamani');
        if($request->session()->has('counter')) {
            $a=(int)$request->session()->get('counter')+1;
            $request->session()->put('counter',$a);

        } else{
            $request->session()->put('counter',0);

        }
        echo $request->session()->get('counter');


        /*
         * $request->session()->get('counter')+1
         * $rastgele = $request->session()->get('rastgele');
        if ($rastgele == $adet) {
            return "urlden gelen ile randdan gelen sayı aynı olduğu için sayfa açıldı" . "adet=" . $adet . "rastgele=" . $rastgele . "Giriş sayısı=" ;
        } else {
            return "ERROR.Urlden gelen ile randdan gelen sayı aynı olmadığı için sayfa açılmadı" . "adet=" . $adet . "rastgele=" . $rastgele . "Giriş sayısı=" ;
        }

        else{
            echo "ERROR ,giris sayısı alınmadı";
        }
*/
    }

}
