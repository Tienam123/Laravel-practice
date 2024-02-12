<?php

namespace Database\Factories\Worker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $techList = ['php', 'css', 'javascript', 'java', 'html'];

        return [
            'worker_name' => fake()->name,
            'worker_email' => fake()->unique()->safeEmail(),
            'worker_profession' => fake()->jobTitle,
            'worker_technologies' => json_encode([$techList[array_rand($techList)], $techList[array_rand($techList)], $techList[array_rand($techList)]]),
            'is_online' => rand(0, 1),
        ];
    }
}
