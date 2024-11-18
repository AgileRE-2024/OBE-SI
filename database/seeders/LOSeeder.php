<?php

namespace Database\Seeders;

use App\Models\Learning_Outcome;
use Illuminate\Database\Seeder;

class LOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'level' => 'LO-2',
                'cognitive_level' => 'Remember',
                'kata_kerja' => 'Mengingat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'level' => 'LO-2',
                'cognitive_level' => 'Understand',
                'kata_kerja' => 'Memahami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($levels as $level) {
            Learning_Outcome::create($level);
        }
    }
}
