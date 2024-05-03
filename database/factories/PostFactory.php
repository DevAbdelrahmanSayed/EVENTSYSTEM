<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'club_id' => \App\Models\Club::factory(),
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->sentence(6),
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'posts', true)
        ];
    }
}
