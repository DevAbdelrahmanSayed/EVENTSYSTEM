<?php

namespace Database\Factories;

use App\Models\EventCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'parent_id' => null,
        ];
    }

    /**
     * Indicate that the category is a subcategory.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function subcategory()
    {
        return $this->state(function (array $attributes) {
            return [
                'parent_id' => EventCategory::factory(),  // Assuming you want to auto-generate a parent
            ];
        });
    }
}
