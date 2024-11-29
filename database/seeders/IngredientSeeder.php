<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['name' => 'flour'],
            ['name' => 'chocolate'],
            ['name' => 'vanilla'],
            ['name' => 'strawberries'],
            ['name' => 'sugar'],
            ['name' => 'peach'],
            ['name' => 'raisins'],
        ];

        foreach ($ingredients as $ingredient)
        {
            Ingredient::create($ingredient);
        }
    }
}
