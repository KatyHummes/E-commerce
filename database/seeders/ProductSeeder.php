<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 100; $i++) {
            Product::create([
                'photo_url' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'photo_name' => $faker->name,
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'price' => $faker->randomNumber(2)
            ]);
        }
    }
}
