<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'image',
        'harga',
        'deskripsi',
        'stok',
        'id_kategori',
    ];

    public function transaksis()
    {
        return $this->belongsToMany(
            Transaksi::class,
            'makanan_pembayarans',
            'id_makanan',
            'id_transaksi'
        )->withPivot(['total_jumlah', 'subtotal_harga']);
    }
}
