<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'nama_barang' => 'pulpen',
            'merk_id' => '1',
            'tipe_id' => '1',
            'jumlah_barang' => '10'
        ]);
    }
}
