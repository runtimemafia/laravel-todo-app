<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Todo::factory()->create([
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
        ]);

    }
}
