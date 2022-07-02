<?php

namespace Database\Seeders;

use App\Models\DigitalContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class DigitalContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $products = [
            [
                "name" => "product1",
                "description" => $faker->sentence(50),
                "price" => 20000,
                "digital_content_type_id" =>2
            ],
            [
                "name" => "product2",
                "description" => $faker->sentence(50),
                "price" => 30000,
                "digital_content_type_id" =>1
            ],
            [
                "name" => "product3",
                "description" => $faker->sentence(50),
                "price" => 40000,
                "digital_content_type_id" =>2
                
            ],
            
        ];
        DigitalContent::insert($products);
    }
}

