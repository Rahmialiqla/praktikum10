<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit_kerja_id extends Model
{
    use HasFactory;

     protected $table = 'unit_kerja_id';
     //tabel adalah property laravel yang didalam nya terkoneksi dengan 
     //nama table yang mau kita tampilkan data nya
     //tetapi hanya dapat di akses didalam class model tersebut ataupun turunan nya 

     protected $fillable = ['id','nama'];
    // fillable adalah variabel dalam model aloquet yang tuganya
    //membatasi kolom mana yang dapat di isi atau di input
    
}