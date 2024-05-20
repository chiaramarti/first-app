<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('products')->insert([
                'name' => fake()->word,
                'description' => fake()->sentence,
                'price' => fake()->randomFloat(2, 1, 100), // Prezzo casuale tra 1 e 100 con due decimali
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
