<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body'=> $this->faker->sentence(),
            'user_id'=>User::factory(),
            'blog_id'=>Blog::factory(),

        ];
    }
}
