<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Need to fix bugs in the webapp",
                "date"=> "12 March 2024",
                "label"=> "Urgent",
                "isDone"=> false,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "id" => 2,
                "title"=> "Read Book",
                "date"=> "None",
                "label"=> "Important",
                "isDone"=> false,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];
    }
}
