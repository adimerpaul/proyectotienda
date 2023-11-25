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
        DB::table('products')->insert([
            [
                'nombre' => 'Air Jordan',
                'imagen' => 'NF0A52Q1753_1.webp',
                'cantidad' => 10,
                'precio' => 140,
                'fecha_ven' => '2000-12-12',
                'category_id' => 1,
            ],
            [
                'nombre' => 'Reloj inteligente',
                'imagen' => 'relojes-inteligentes-ecommerce-pulsera-inteligente-v6-personalizado-para.webp',
                'cantidad' => 10,
                'precio' => 140,
                'fecha_ven' => '2000-12-12',
                'category_id' => 1,
            ],
            [
                'nombre' => 'Audifonos inalambricos',
                'imagen' => 'descarga.jpg',
                'cantidad' => 125,
                'precio' => 120,
                'fecha_ven' => '2000-12-12',
                'category_id' => 1,
            ],
//            descarga.jpg
        ]);
    }
}
