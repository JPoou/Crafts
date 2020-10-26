<?php

namespace Database\Factories;

use App\Models\Craft;
use Illuminate\Database\Eloquent\Factories\Factory;

class CraftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Craft::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'category_id' => $this->faker->numberBetween(1, 10),
            'value' => $this->faker->numberBetween(1, 1000),
            // 'sold_at' => now()
        ];
    }
}
