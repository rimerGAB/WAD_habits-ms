<?php

namespace Database\Seeders;

use App\Models\Habits;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        Habits::factory(20)->specificHabits()->create();
        
        $this->command->info('✓ Created 20 specific habits successfully!');
      
    }
}