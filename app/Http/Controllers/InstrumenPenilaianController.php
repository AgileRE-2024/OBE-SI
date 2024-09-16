<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instrumen_Penilaian;

class InstrumenPenilaianController extends Controller
{
    public function addInstrumen()
    {
        return view("content.teknik_penilaian_rps.add_instrumen_penilaian", [
            "title" => "Tambah Instrumen Penilaian",
        ]);
    }

    public function storeInstrumen(Request $request)
    {
        $request->validate([
            "nama_instrumen_penilaian" =>
                "required|unique:instrumen_penilaian,nama_instrumen_penilaian",
        ]);

        Instrumen_penilaian::create([
            "nama_instrumen_penilaian" => $request->nama_instrumen_penilaian,
            "deskripsi_instrumen_penilaian" =>
                $request->deskripsi_instrumen_penilaian,
        ]);

        return redirect()
            ->route("kurikulum.data.teknik_penilaian")
            ->with("success", "Instrumen penilaian berhasil ditambahkan");
    }

    public function edit($id_instrumen)
    {
        $Instrumen = Instrumen_penilaian::where(
            "id_instrumen_penilaian",
            $id_instrumen
        )->first();

        return view("content.teknik_penilaian_rps.edit_instrumen_penilaian", [
            "title" => "Edit Instrumen Penilaian",
            "instrumen" => $Instrumen,
        ]);
    }

    public function update($Instrumen, Request $request)
    {
        $request->validate([
            "nama_instrumen_penilaian" => "required",
        ]);

        $Instrumen = Instrumen_penilaian::where(
            "id_instrumen_penilaian",
            $Instrumen
        )->first();
        $Instrumen->update([
            "nama_instrumen_penilaian" => $request->nama_instrumen_penilaian,
            "deskripsi_instrumen_penilaian" =>
                $request->deskripsi_instrumen_penilaian,
        ]);

        $Instrumen->save();

        return redirect()
            ->route("kurikulum.data.teknik_penilaian")
            ->with("success", "Instrumen penilaian berhasil diubah");
    }

    public function delete($Instrumen)
    {
        $Instrumen = Instrumen_penilaian::where(
            "id_instrumen_penilaian",
            $Instrumen
        )->first();
        $Instrumen->delete();

        return redirect()
            ->route("kurikulum.data.teknik_penilaian")
            ->with("success", "Instrumen penilaian berhasil dihapus");
    }
}
