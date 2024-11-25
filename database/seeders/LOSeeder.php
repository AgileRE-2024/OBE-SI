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
            ["level_lo" => "B-I Mengingat"],
            ["level_lo" => "B-II Memahami"],
            ["level_lo" => "B-III Menerapkan"],
            ["level_lo" => "B-IV Menganalisis"],
            ["level_lo" => "B-V Mengevaluasi"],
            ["level_lo" => "B-VI Menciptakan"],
        ];

        foreach ($levels as $level) {
            Learning_Outcomes::create($level);
        }
    }
}
