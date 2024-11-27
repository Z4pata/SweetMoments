<?php

namespace Database\Seeders;

use App\Models\Product;
use App\sizes;
use App\types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = 
        [
            [
                'name' => 'Chocolate cake',
                'type' => types::Cake->value,
                'size' => sizes::Medium->value,
            ],
            [
                'name' => 'Chocolate cake',
                'type' => types::Cake->value,
                'size' => sizes::Big->value,
            ],
            [
                'name' => 'Vanilla Jelly',
                'type' => types::Jelly->value,
                'size' => sizes::ExtraBig->value,
            ],
            [
                'name' => 'Strawberry Dessert',
                'type' => types::Dessert->value,
                'size' => sizes::Medium->value,
            ],
            [
                'name' => 'Oatmeal Cookie',
                'type' => types::Cookie->value,
                'size' => sizes::Small->value,
            ],
        ];

        foreach ($products as $product)
        {
            Product::firstOrCreate(
                ['name' => $product['name']], 
                ['type' => $product['type']], 
                ['size' => $product['size']]
            );
        };
    }
}
