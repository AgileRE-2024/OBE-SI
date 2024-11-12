<?php

namespace App\Http\Controllers;

use App\Models\Learning_Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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
        $data = $request->validate([
            "kode" => "required|unique:level_LO,kode|integer",
            "cognitive_level" => "required",
            "kata_kerja" => "required",
        ]);

        Learning_Outcome::create($data);

        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Level LO berhasil ditambahkan");
    }

    public function edit($kode)
    {
        $level = Learning_Outcome::where("kode", $kode)->first();

        return view("content.learning_outcome.edit_level", [
            "title" => "Edit Level LO",
            "level" => $level,
        ]);
    }

    public function update($kode, Request $request)
    {
        if ($request->kode == $kode) {
            $validator = Validator::make($request->all(), [
                "kode" => "required|integer",
                "cognitive_level" => "required",
                "kata_kerja" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "kode" => "required|unique:level_LO,kode|integer",
                "cognitive_level" => "required",
                "kata_kerja" => "required",
            ]);
        }
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $level = Learning_Outcome::where("kode", $kode)->first();
        $level->update([
            "kode" => $request->kode,
            "cognitive_level" => $request->cognitive_level,
            "kata_kerja" => $request->kata_kerja,
        ]);

        $level->save();

        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Level LO berhasil diubah");
    }

    public function delete($kode)
    {
        $level = Learning_Outcome::where("kode", $kode)->first();
        $level->delete();
        return redirect()
            ->route("kurikulum.data.learning_outcome")
            ->with("success", "Level LO berhasil dihapus");
    }
}