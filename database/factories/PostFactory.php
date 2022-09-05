<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->name,
               'slug'  => $this->faker->unique()->name,
               'image'  => $this->faker->imageUrl(640,480),
               'description'  => $this->faker->text(600),
               'category_id'  => $this->faker->numberBetween(1,6),
               'user_id'  => 1,
        ];
    }
}
