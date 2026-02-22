<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barang::create([
        //     'nama_barang' => 'Laptop',
        //     'merk' => "Macbook Pro",
        //     'harga' => 3000000.00,
        //     'kedaluarsa' => '2026-02-27'
        // ]);


        Barang::factory()->count(100)->create();

    }
}
