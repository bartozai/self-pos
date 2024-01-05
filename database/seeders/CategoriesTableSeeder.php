<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Contoh data untuk tabel 'categories'
        Category::create(['name' => 'Category 1']);
        Category::create(['name' => 'Category 2']);

        // Tambahkan data lain sesuai kebutuhan
    }
}

