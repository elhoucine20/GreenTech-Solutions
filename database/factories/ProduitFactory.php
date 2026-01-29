<?php

namespace Database\Factories;

// use App\Models\Categorie;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Extension\DescriptionList\Node\Description;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'prix' => fake()->randomFloat(2,0,8),
            'description' =>fake()->text(150),
            'categorie_id' => Categorie::factory(),
        ];
    }
}
