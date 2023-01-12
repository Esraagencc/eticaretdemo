<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\HizmetlerController;
use App\Http\Controllers\AltgiyimController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\FavoriEkle;
use \App\Http\Middleware\surekontrol;
use \App\Http\Middleware\anasayfakontrol;
use \App\Http\Middleware\iletisimkontrol;
use \App\Http\Middleware\hizmetlerkontrol;
use \App\Http\Middleware\GirisControl;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('anasayfa',[HomeController::class, 'anasayfa'])->middleware(anasayfakontrol::class);
Route::get('urunler',[UrunController::class, 'urunler']);
Route::get('/urunler/{urunismi}',[UrunController::class, 'detaysayfasi'])->middleware(surekontrol::class);
Route::get('/iletisim',[IletisimController::class,'iletisim'])->middleware(iletisimkontrol::class);
Route::get('/hizmetler',[HizmetlerController::class,'hizmetler'])->middleware(hizmetlerkontrol::class);
Route::get('/hizmetler/{adet}',[HizmetlerController::class, 'hizmetler2'])->middleware(hizmetlerkontrol::class);
Route::get('altgiyim',[AltgiyimController::class,'altgiyim'])->name('altgiyimrouteisim');
Route::get('/sepetim',[SepetController::class,'sepet'])->name('sepetimrouteisim');
Route::get('/favorilerim', [Favoriekle::class,'favorilerim'])->name('favorimrouteisim');

Route::get('/sepet/ekle/{id}',[SepetController::class,'sepetEkleGet'])->name('sepetEkleGet');
Route::get('/favorilerim/ekle/{id}', [Favoriekle::class,'favorilerimEkle'])->name('favorilerimEkle');
Route::get('/sepet/sil/{id}',[SepetController::class,'sepetSilGet'])->name('sepetSilGet');


Route::get('/form',[HomeController::class,'form'])->name('form');
Route::post('/form/kaydet',[HomeController::class,'formKaydet'])->name('formKaydet');

Route::get('/form2',[HomeController::class,'form2'])->name('form2')->middleware(GirisControl::class);
Route::post('/form2/kaydet',[HomeController::class,'form2kaydet'])->name('form2kaydet');
Route::get('/giris',[HomeController::class,'giris'])->name('giris');
Route::post('/giris/kontrol',[HomeController::class,'giriskontrol'])->name('giriskontrol');
Route::get('/cikisyap',[HomeController::class,'cikisyap'])->name('cikisyap');


//çıkış yap butonu koyulacak
//kullanıcı yanlış girildiyse alert verilecek

Route::get('/giris/my',[HomeController::class,'girismy'])->name('girismy');
Route::get('/guncel/doviz',[HomeController::class,'guncelDoviz'])->name('girisdoviz');
Route::get('/guncel/deneme',[HomeController::class,'guncelDeneme'])->name('girisdenem');
Route::get('/kasa/giris',[HomeController::class,'kasagiris'])->name('kasagiris');
Route::post('/kasa/giris/kaydet',[HomeController::class,'kasagiriskaydet'])->name('kasagiriskaydet');




