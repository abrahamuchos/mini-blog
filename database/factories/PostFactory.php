<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => User::inRandomOrder()->limit(1)->first('id'),
            'title' => $title = $this->faker->sentence(10),
            'slug' => Str::slug($title) . '-' . time(),
            'body' => $this->faker->text(2200),
        ];
    }
}
