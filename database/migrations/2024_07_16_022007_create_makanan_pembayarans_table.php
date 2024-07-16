<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('makanan_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_transaksi');
            $table->bigInteger('id_makanan');
            $table->string('total_jumlah');
            $table->string('subtotal_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan_pembayarans');
    }
};
