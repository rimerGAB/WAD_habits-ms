<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Habits;

class HabitsFactory extends Factory
{
    protected $model = Habits::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(2),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'done']),
            'target_date' => $this->faker->dateTimeBetween('now', '+3 months'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    
    public function specificHabits(): Factory
    {
        return $this->state(function (array $attributes) {
            $habits = [
                [
                    'title' => 'Morning Meditation',
                    'description' => 'Start each day with 10 minutes of mindfulness meditation .',
                    'status' => 'in_progress',
                    'target_date' => now()->addDays(30),
                ],
                [
                    'title' => 'Read 30 Minutes Daily',
                    'description' => 'Read at least 30 pages of a book .',
                    'status' => 'pending',
                    'target_date' => now()->addDays(7),
                ],
                [
                    'title' => 'Exercise Routine',
                    'description' => 'Complete 30 minutes of physical activity .',
                    'status' => 'done',
                    'target_date' => now()->subDays(2),
                ],
                [
                    'title' => 'Learn Laravel',
                    'description' => 'Study Laravel framework for 1 hour daily .',
                    'status' => 'in_progress',
                    'target_date' => now()->addDays(14),
                ],
                [
                    'title' => 'Drink 8 Glasses of Water',
                    'description' => 'Stay hydrated by drinking at least 8 glasses.',
                    'status' => 'pending',
                    'target_date' => now()->addDays(1),
                ],
            ];
            
            
            return $habits[array_rand($habits)];
        });
    }
}