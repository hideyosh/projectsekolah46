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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merk_id')->constrained('merks')->cascadeOnDelete();
            $table->foreignId('tipe_id')->constrained('tipes')->cascadeOnDelete();
            $table->string('gambar')->nullable();
            $table->string('nama_barang');
            // $table->string('merk');
            $table->integer('jumlah_barang');
            // $table->string('tipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
