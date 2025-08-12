<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'user_id',
        'status',
        'total_harga',
        'tanggal_pesanan',
    ];

    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the details of the order.
     */
    public function detailPesanan()
    {
        return $this->hasMany(Detail_pesanan::class, 'pesanan_id');
    }

    /**
     * Get the payment associated with the order.
     */
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'pesanan_id');
    }
}
