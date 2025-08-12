<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';

    protected $fillable = [
        'pesanan_id',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'tanggal_pengiriman',
        'status',
    ];

    /**
     * Get the order associated with the shipment.
     */
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
}
