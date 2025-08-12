<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GambarProduk extends Model
{
    protected $table = 'gambar_produk';

    protected $fillable = [
        'produk_id',
        'gambar',
    ];

    /**
     * Get the product associated with the image.
     */
    public function produk()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
