<?php

namespace App\Http\Controllers;
use App\Models\Komponen_Penilaian;

use Illuminate\Http\Request;

class KomponenPenilaianController extends Controller
{
    public function addKomponenPenilaian($kodeRPS)
    {
        return view("content.komponen_penilaian.add_komponen_penilaian", [
            "title" => "Tambah Komponen Penilaian",
            "kodeRPS" => $kodeRPS,
        ]);
    }

    public function storeKomponenPenilaian(Request $request, $kodeRPS)
    {
        $request->validate([
            "nama_komponen_penilaian" => "required",
        ]);

        komponen_penilaian::create([
            "nama_komponen_penilaian" => $request->nama_komponen_penilaian,
            "id_rps" => $kodeRPS,
        ]);

        return redirect()
            ->route("edit_rps.mata_kuliah", ["kodeRPS" => $kodeRPS])
            ->with("success", "komponen penilaian berhasil ditambahkan");
    }

    public function editKomponenPenilaian($id_komponen_penilaian, $kodeRPS)
    {
        $komponen_penilaian = komponen_penilaian::where(
            "id_komponen_penilaian",
            $id_komponen_penilaian
        )->first();

        return view("content.komponen_penilaian.edit_komponen_penilaian", [
            "title" => "Edit Komponen Penilaian",
            "komponen_penilaian" => $komponen_penilaian,
            "kodeRPS" => $kodeRPS,
        ]);
    }

    public function updateKomponenPenilaian(
        Request $request,
        $id_komponen_penilaian,
        $kodeRPS
    ) {
        $request->validate([
            "nama_komponen_penilaian" => "required",
        ]);

        $komponen_penilaian = komponen_penilaian::where(
            "id_komponen_penilaian",
            $id_komponen_penilaian
        )->first();
        $komponen_penilaian->update([
            "nama_komponen_penilaian" => $request->nama_komponen_penilaian,
        ]);

        $komponen_penilaian->save();

        return redirect()
            ->route("edit_rps.mata_kuliah", ["kodeRPS" => $kodeRPS])
            ->with("success", "komponen penilaian berhasil diubah");
    }

    public function deleteKomponenPenilaian($id_komponen_penilaian, $kodeRPS)
    {
        $komponen_penilaian = komponen_penilaian::where(
            "id_komponen_penilaian",
            $id_komponen_penilaian
        )->first();
        $komponen_penilaian->delete();

        return redirect()
            ->route("edit_rps.mata_kuliah", ["kodeRPS" => $kodeRPS])
            ->with("success", "komponen penilaian berhasil dihapus");
    }
}
