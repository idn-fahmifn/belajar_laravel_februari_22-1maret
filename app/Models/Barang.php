<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{


    use HasFactory;
    //khusus jika kita akan menghubungkan ke table yang namanya itu adalah singular

    // define nama table

    protected $table = 'barang';
    
    // define column mana saja yang berinteraksi langsung dengan user.
    protected $fillable = [
        'nama_barang', 'merk', 'harga', 'kedaluarsa', 'notes'
    ];

}
