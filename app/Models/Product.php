<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'kategori_id',
        'stok',
    ];

    /**
     * Get the category that owns the product.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    /**
     * Get the images associated with the product.
     */
    public function gambarProduk()
    {
        return $this->hasMany(GambarProduk::class, 'produk_id');
    }

    /**
     * Get the cart items associated with the product.
     */
    public function keranjangs()
    {
        return $this->hasMany(Keranjang::class, 'produk_id');
    }

    /**
     * Get the order details associated with the product.
     */
    public function detailPesanans()
    {
        return $this->hasMany(Detail_pesanan::class, 'produk_id');
    }
}
