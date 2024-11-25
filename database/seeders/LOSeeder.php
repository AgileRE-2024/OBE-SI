<?php

namespace Database\Seeders;

use App\Models\Learning_Outcomes;
use Illuminate\Database\Seeder;

class LOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            ["names" => "B-I Mengingat"],
            ["names" => "B-II Memahami"],
            ["names" => "B-III Menerapkan"],
            ["names" => "B-IV Menganalisis"],
            ["names" => "B-V Mengevaluasi"],
            ["names" => "B-VI Menciptakan"],
        ];

        foreach ($levels as $level) {
            Learning_Outcomes::create($level);
        }
    }
}
