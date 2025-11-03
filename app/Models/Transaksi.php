<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_keranjang',
        'jumlah_total',
        'gran_total',
        'metode_pembayaran',
        'metode_order',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function makanans()
    {
        return $this->belongsToMany(
            Makanan::class,                   // Model tujuan
            'makanan_pembayarans',            // Nama tabel pivot
            'id_transaksi',                   // Foreign key di pivot untuk transaksi
            'id_makanan'                      // Foreign key di pivot untuk makanan
        )->withPivot(['total_jumlah', 'subtotal_harga']); // Kolom tambahan dari pivot
    }

}
