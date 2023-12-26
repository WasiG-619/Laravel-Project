<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producttypes =
        [
            'Song',
            'Game',
            'Book',
        ];

        foreach($producttypes as $producttype)
        [
            ProductType::create(['type' => $producttype])
        ];
    }
}
