<?php

namespace App\Http\Controllers;

use App\Models\Learning_Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LearningOutcomeController extends Controller
{
    public function index()
    {
        $levels = Learning_Outcome::all();

        return view("content.learning_outcome.learning_outcome", [
            "title" => "Learning Outcomes",
            "levels" => $levels,
        ]);
    }

    public function addLevelLO()
    {
        return view("content.learning_outcome.add_learning_outcome", [
            "title" => "Tambah Level LO",
        ]);
    }

    public function storeLevelLO(Request $request)
    {
        $request->validate([
            "level" => "required",
            "cognitive_level" => "required",
            "kata_kerja" => "required",
        ]);

        Learning_Outcome::create([
            "level" => $request->level,
            "cognitive_level" => $request->cognitive_level,
            "kata_kerja" => $request->kata_kerja,
        ]);

        return redirect()
            ->route('kurikulum.data.learning_outcome')
            ->with('success', 'Learning Outcome berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $level = Learning_Outcome::findOrFail($id);

        return view("content.learning_outcome.edit_learning_outcome", [
            "title" => "Edit Level LO",
            "level" => $level,
        ]);
    }

    public function update($id, Request $request)
    {
        if ($request->level == $id) {
            $validator = Validator::make($request->all(), [
                "level" => "required",
                "cognitive_level" => "required",
                "kata_kerja" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "level" => "required",
                "cognitive_level" => "required",
                "kata_kerja" => "required",
            ]);
        }
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $level = Learning_Outcome::findOrFail($id);
        $level->update([
            "level" => $request->level,
            "cognitive_level" => $request->cognitive_level,
            "kata_kerja" => $request->kata_kerja,
        ]);

        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Learning Outcome berhasil diperbarui.");
    }

    public function delete($id)
    {
        $level = Learning_Outcome::findOrFail($id);
        $level->delete();

        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Learning Outcome berhasil dihapus.");
    }
}
