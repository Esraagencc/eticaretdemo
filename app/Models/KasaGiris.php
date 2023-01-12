<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasaGiris extends Model
{
    use HasFactory;
    protected $table = "_kasa_giris";
    protected $fillable = ['name','soyad','tutar','Dolar'];
}
