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

        // Fetch levels and their verbs from the database
        $learningOutcomes = Learning_Outcomes::all();

        // Prepare the levels and verbs for the frontend
        $levels = $learningOutcomes->pluck('level_lo')->unique();

        return view("content.learning_outcome.add_learning_outcome", [
            "title" => "Tambah Level LO",
            "levels" => $levels,
        ]);
    }

    public function storeLevelLO(Request $request)
    {
        $request->validate([
            "level_lo" => "required",
            "kata_kerja" => "required",
        ]);

        // Check if the combination of level_lo and kata_kerja already exists
        $exists = Learning_Outcomes::where('level_lo', $request->level_lo)
            ->where('kata_kerja', $request->kata_kerja)
            ->exists();

        if ($exists) {
            return redirect()
                ->back()
                ->withErrors(['kata_kerja' => 'Kata kerja sudah ada untuk level LO ini.'])
                ->withInput();
        }

        // Create a new Learning Outcome
        Learning_Outcomes::create([
            "level_lo" => $request->level_lo,
            "kata_kerja" => $request->kata_kerja,
        ]);

        return redirect()
            ->route('kurikulum.data.learning_outcome')
            ->with('success', 'Learning Outcome berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            "level_lo" => "required",
            "kata_kerja" => "required",
        ]);

        // Check if the combination of level_lo and kata_kerja already exists (excluding the current record)
        $exists = Learning_Outcomes::where('level_lo', $request->level_lo)
            ->where('kata_kerja', $request->kata_kerja)
            ->where('id', '!=', $id) // Exclude the current record
            ->exists();

        if ($exists) {
            return redirect()
                ->back()
                ->withErrors(['kata_kerja' => 'Kata kerja sudah ada untuk level LO ini.'])
                ->withInput();
        }

        // Update the record
        $level = Learning_Outcomes::findOrFail($id);
        $level->update([
            "level_lo" => $request->level_lo,
            "kata_kerja" => $request->kata_kerja,
        ]);

        return redirect()
            ->route('kurikulum.data.learning_outcome')
            ->with('success', 'Learning Outcome berhasil diubah.');
    }


    public function edit($id)
    {
        $old_level = Learning_Outcomes::findOrFail($id);

        // Fetch levels and their verbs from the database
        $learningOutcomes = Learning_Outcomes::all();

        // Prepare the levels and verbs for the frontend
        $levels = $learningOutcomes->pluck('level_lo')->unique();

        return view("content.learning_outcome.edit_learning_outcome", [
            "title" => "Edit Level LO",
            "levels" => $levels,
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
