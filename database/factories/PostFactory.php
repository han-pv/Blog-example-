<?php

namespace Database\Factories;

use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $created_at = fake()->dateTimeBetween("-6 months", "now");
        return array (
            "user_id"=> $user->id,
            "title" => fake()->sentence(rand(5, 10)),
            "content" => fake()->paragraph(rand(50,100)),
            "created_at"=> Carbon::parse($created_at),
        );
    }
}
