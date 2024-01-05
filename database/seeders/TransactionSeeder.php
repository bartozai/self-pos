<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Transaction::create([
                'total' => $faker->numberBetween(1, 9999999999), // Sesuaikan dengan batas tipe data kolom 'total'
                'bayar' => $faker->numberBetween(1, 999999),
                'tipe_bayar' => $faker->randomElement(['Cash', 'Credit Card', 'Transfer']),
            ]);
        }
    }
}
