<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $table = 'sub_kategoris';

    protected $fillable = [
        'nama',
        'kategori_id',
    ];

    /**
     * Get the category associated with the subcategory.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    /**
     * Get the products associated with the subcategory.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'sub_kategori_id');
    }
}
