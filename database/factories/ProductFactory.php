<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $prduct_name = $this->faker->unique()->words($nb=2,$asText = true);
        $slug = Str::slug($prduct_name);
        return [
            'name' => Str::title($prduct_name),
            'slug' => $slug,
            'short_description' => $this->faker->text(100),
            'description' => $this->faker->text(200),
            'regular_price' => $this->faker->numberBetween(1,22),
            'SKU' => 'SMD'.$this->faker->numberBetween(100,200),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(1,99),
            'image' => $this->faker->imageUrl($width = 110, $height = 110),
            'images' => $this->faker->numberBetween(1,6),
            'category_id' => $this->faker->numberBetween(1,6)

        ];
    }
}
