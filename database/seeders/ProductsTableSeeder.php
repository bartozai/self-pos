<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Contoh data untuk tabel 'products'
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 50.00,
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 75.00,
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
