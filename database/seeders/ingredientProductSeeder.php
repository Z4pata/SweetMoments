<?php

namespace Database\Seeders;

use App\Models\IngredientProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ingredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients_products =
        [
            ['product_id' => '1', 'ingredient_id' => '5'],
            ['product_id' => '1', 'ingredient_id' => '2'],
            ['product_id' => '1', 'ingredient_id' => '4'],
            ['product_id' => '4', 'ingredient_id' => '4'],
            ['product_id' => '4', 'ingredient_id' => '3'],
            ['product_id' => '4', 'ingredient_id' => '5'],
        ];

        foreach ($ingredients_products as $ingredient_product)
        {
            IngredientProduct::create($ingredient_product);
        };
    }
}
