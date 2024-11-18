<?php

namespace App\Http\Controllers;

use App\Models\Learning_Outcomes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LearningOutcomeController extends Controller
{
    public function index()
    {
        $levels = Learning_Outcomes::all();

        return view("content.learning_outcome.learning_outcome", [
            "title" => "Learning Outcomes",
            "levels" => $levels,
        ]);
    }

    public function addLevelLO()
    {
        return view("content.learning_outcome.add_learning_outcome", [
            "title" => "Tambah Level LO",
            "levels" => ["B-I Mengingat", "B-II Memahami", "B-III Menerapkan", "B-IV Menganalisis", "B-V Mengevaluasi", "B-VI Menciptakan"],
        ]);
    }

    public function storeLevelLO(Request $request)
    {
        $request->validate([
            "level_lo" => "required",
            "kata_kerja" => "required",
        ]);

        Learning_Outcomes::create([
            "level_lo" => $request->level_lo,
            "kata_kerja" => $request->kata_kerja,
        ]);

        return redirect()
            ->route('kurikulum.data.learning_outcome')
            ->with('success', 'Learning Outcome berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $old_level = Learning_Outcomes::findOrFail($id);

        return view("content.learning_outcome.edit_learning_outcome", [
            "title" => "Edit Level LO",
            "levels" => ["B-I Mengingat", "B-II Memahami", "B-III Menerapkan", "B-IV Menganalisis", "B-V Mengevaluasi", "B-VI Menciptakan"],
            "old_level" => $old_level,
        ]);
    }

    public function delete($id)
    {
        $level = Learning_Outcomes::findOrFail($id);
        $level->delete();

        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Learning Outcome berhasil dihapus.");
    }
}
