<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan';

    protected $fillable = [
        'produk_id',
        'user_id',
        'rating',
        'komentar',
        'tanggal_ulasan',
    ];

    /**
     * Get the product associated with the review.
     */
    public function produk()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }

    /**
     * Get the user who wrote the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
