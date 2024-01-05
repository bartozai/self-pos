<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tambahkan data dummy ke dalam tabel
        DB::table('payment_methods')->insert([
            ['name' => 'Credit Card'],
            ['name' => 'PayPal'],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
