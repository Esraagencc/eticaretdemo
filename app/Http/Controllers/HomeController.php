<?php

namespace App\Http\Controllers;
use App\Models\KasaGiris;
use App\Models\Rezervasyon;
use App\Models\Iletisim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function anasayfa()
    {
        return view("anasayfa");
    }

    public function form()
    {
        /* Güncelleme
        $veriCek = Iletisim::find(1);
        $veriCek->name = 'Esra TUNÇ';
        $veriCek->save();
        */

        /* Güncelleme
        $veriSil = Iletisim::find(1);
        $veriSil->delete();
        */


        // print_r($veriCek);
        return view('form');
    }

    public function formKaydet(Request $request)
    {

        $validatedData = $request->validate([
            'phone' => ['required'],
            "name" => ['nullable'],
            "address" => ['nullable']
        ]);

        /* Ekleme
         $form = new Iletisim();
         $form->name = $request->post('name');
         $form->phone = $request->post('phone');
         $form->address = $request->post('address');
         $form->save();


         */
        $ekle = Iletisim::create(
            [
                "name" => $request->post('name'),
                "phone" => $request->post('phone'),
                "address" => $request->post('name'),
            ]
        );


        echo $request->post('phone');
    }

    public function form2()
    {
        $aracBaslangic = aracBaslangic();
        $aracBitis = aracBitis();
        $aracMarka = aracMarka();
        return view('form2', [
            'aracBaslangic' => $aracBaslangic,
            "aracBitis" => $aracBitis,
            "aracMarka" => $aracMarka
        ]);
    }

    public function form2kaydet(Request $request)
    {
        $ekle = Rezervasyon::create(
            [
                "arababaslangıc" => $request->post('arababaslangıc'),
                "arababitis" => $request->post('arababitis'),
                "baslangıctarih" => $request->post('baslangıctarih'),
                "bitistarih" => $request->post('bitistarih'),
                "arabamodel" => $request->post('arabamodel'),
            ]
        );

    }
    public function giris(){
        return view('giris');
    }

    public function giriskontrol(Request $request)
    {
        if($request->kadi=='esraagencc4@gmail.com' && $request->sifre=='Esragenc@99'){
            $request->session()->put('kullanici',1);
            return redirect()->route('form2');
    }
        else{
            return back()->withError("Üzgünüz oluşturulamadı");        }
    }
    public function cikisyap(Request $request){
        $request->session()->flush();
        return redirect()->route('giris');
        // $request->session()->put('kullanici',0);
    }
    public function girismy(){
        $aracmarkaa= aracMarka();
        return response()->json($aracmarkaa);
    }

    public function guncelDoviz()
    {
        /*
        $ciktiJson = file_get_contents('http://hasanadiguzel.com.tr/api/kurgetir');
        $dizi = json_decode($ciktiJson);
        dd($dizi->TCMB_AnlikKurBilgileri['0']->ForexBuying);
        */

        $response  = Http::post('https://csmbilisim.com/wp-admin/admin-ajax.php',[
            "name-1" => "omer",
            "phone-1" => "5382900434",
            "email-1" => "omeresra@csmbilisim.com",
            "checkbox-1[]" => "Web-Sitesi-Tasarım",
            "textarea-1" => "derara",
            "referer_url" => "https://csmbilisim.com/",
            "forminator_nonce" => "304bf069c2",
            "_wp_http_referer" => "/teklif-al/",
            "form_id" => "698",
            "page_id" => "707",
            "form_type" => "default",
            "current_url" => "https://csmbilisim.com/teklif-al/",
            "render_id" => 0,
            "action" => "forminator_submit_form_custom-forms",
        ]);
        dd($response->body());

    }
    public function guncelDeneme(){
        $cikti= file_get_contents('https://gbfs.citibikenyc.com/gbfs/en/station_information.json');
        $diziyeat=json_decode($cikti);
        dd($diziyeat->data->stations['9']);
    }
    public function kasagiris(){
        return view('kasagiris');
    }
    public function kasagiriskaydet(Request $request){
        $ciktiJson = file_get_contents('http://hasanadiguzel.com.tr/api/kurgetir');
         $kurlar=json_decode($ciktiJson);
        $dolar=$kurlar->TCMB_AnlikKurBilgileri[0]->ForexBuying;
        $tutarr=$request->post('tutar');
        $dolarcinsinden=$tutarr/$dolar;
        $ekle = KasaGiris::create(
            [
                "name" => $request->post('name'),
                "soyad" => $request->post('soyad'),
                "tutar" => $request->post('tutar'),
                "Dolar" => $dolarcinsinden
            ]
        );

    }

    public function whoIsMy()
    {

        echo json_encode([
            "adım" => "Ömer",
            "soyadım" => "Tunç"
        ]);

    }

}
