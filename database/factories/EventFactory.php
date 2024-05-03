<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'club_id' => \App\Models\Club::factory(),
            'user_id' => \App\Models\User::factory(),
            'represented_id' => \App\Models\User::factory(),
            'event_category_id' => 1,
            'name' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'location' => $this->faker->address,
            'place' => $this->faker->address,
            'date_event' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'start_time' => $this->faker->time('H:i:s'),  // Add this line
            'end_time' => $this->faker->time('H:i:s'),    // Add this line
            'image' => $this->faker->imageUrl(640, 480, 'events', true)
        ];
    }
}
