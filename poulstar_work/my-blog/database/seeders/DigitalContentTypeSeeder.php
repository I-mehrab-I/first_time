<?php

namespace Database\Seeders;

use App\Models\DigitalContentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DigitalContentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name'=>"padcast"],
            ['name'=>"ebook"],
        ];
        DigitalContentType::insert($types);
    }
}
