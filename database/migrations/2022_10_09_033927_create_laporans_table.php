<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('laporans', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('barang_id')->constrained('barangs')->cascadeOnDelete();
        //     $table->string('jumlah_barang_keluar');
        //     // $table->timestamp('tanggal');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
