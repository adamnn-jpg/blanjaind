<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function subKategori()
    {
        return $this->belongsTo(SubKategori::class);
    }

    public function gambars()
    {
        return $this->hasMany(GambarProduk::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'keranjangs');
    }
    public function ulasans()
    {
        return $this->hasMany(Ulasan::class);
    }

    // RATING 

    // 


}
