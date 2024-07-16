<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananPembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'id_makanan',
        'total_jumlah',
        'subtotal_harga'
    ];
}
