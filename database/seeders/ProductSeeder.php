<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ('tb_product')->insert ([
            'nama_product'=>'jeans',
            'ukuran'=>28,
            'warna'=>'hitam',
            'harga'=>60000,
        ]);

        DB::table ('tb_product')->insert ([
            'nama_product'=>'rok',
            'ukuran'=>28,
            'warna'=>'pink',
            'harga'=>60000,
        ]);


        DB::table ('tb_product')->insert ([
            'nama_product'=>'sepatu',
            'ukuran'=>40,
            'warna'=>'hitam',
            'harga'=>160000,
        ]);
    }
}
