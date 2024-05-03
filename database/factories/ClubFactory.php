<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClubFactory extends Factory
{
    protected $model = Club::class;

    public function definition(): array
    {
        return [
            'category_id' => \App\Models\Category::factory(),
            'user_id' => \App\Models\User::factory(),
            'represented_id' => \App\Models\User::factory(),
            'name' => $this->faker->company,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'clubs', true)
        ];
    }
}
