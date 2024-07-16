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
}
