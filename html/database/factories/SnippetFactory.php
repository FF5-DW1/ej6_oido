<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Snippet>
 */
class SnippetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['published', 'draft'];
        return [
            'uuid'=> fake()->uuid,
            'user_id' =>fake()->numberBetween(1, 3),
            'content'=> fake()->text(100),
            'status'=> $status[fake()->boolean()],
            'likes'=> fake()->numberBetween(1, 20),
            'comments'=> fake()->numberBetween(1, 5)
        ];
        
    }
}
