<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 1),
            'title' => fake()->sentence(2),
            'content' => fake()->sentence(15),
            'featured_image' => fake()->imageUrl(640, 480, 'cats'),
            'is_featured' => fake()->boolean(),
            'is_published' => fake()->boolean(),
        ];
    }
}
