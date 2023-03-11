<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //factory to create 100 fake courses with a random robotics kit
            // kit ID: 1 = StarterKit, 2 = Educational Robotics Kit, 3 = Kit5
            'course_key' => $this->faker->word(),
            'course_name' => $this->faker->word(),
            'robotics_kit' => $this->faker->numberBetween(1, 3),
        ];
    }
}
