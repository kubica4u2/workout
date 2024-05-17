<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exercises')->insert([
            [
                'title' => 'Bench Press',
                'created_at' => now(),
            ],
            [
                'title' => 'Squats',
                'created_at' => now(),
            ],
            [
                'title' => 'Deadlifts',
                'created_at' => now(),
            ]
        ]);
    }
}
