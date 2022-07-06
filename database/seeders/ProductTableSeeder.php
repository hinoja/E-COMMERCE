<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

            return [
                'title' => $this->faker->sentence(),
                'slug' => $this->faker->slug(),
                'subtitle' => $this->faker->sentence(),
                'image' =>"http://placehold.jp/200x250.png",
                'price' => random_int(15,300)* 100,
                'description' => $this->faker->text(),
            ];

    }
}
