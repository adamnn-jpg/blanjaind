<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';

    protected $fillable = [
        'user_id',
        'produk_id',
    ];

    /**
     * Get the user associated with the wishlist.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the product associated with the wishlist.
     */
    public function produk()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
