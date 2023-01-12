<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervasyon extends Model
{
    use HasFactory;
    protected $table = "_rezervasyon";
    protected $fillable = ['arababaslangıc','arababitis','baslangıctarih','bitistarih','arabamodel'];
}
