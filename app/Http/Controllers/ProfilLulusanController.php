<?php

namespace App\Http\Controllers;

use App\Exports\ProfilLulusanExport;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Profil_Lulusan;
use App\Models\Detail_PL_CPLProdi;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ProfilLulusanController extends Controller
{
    public function index()
    {
        $pls = Profil_Lulusan::all();

        return view("content.profil_lulusan.profil_lulusan", [
            "title" => "Profil Lulusan",
            "pls" => $pls,
        ]);
    }

    public function export($type)
    {
        date_default_timezone_set("Asia/Jakarta");

        $view = view("content.profil_lulusan.tableToEkspor", [
            "title" => "Tabel Profil Lulusan",
            "pls" => Profil_Lulusan::all(),
        ]);

        $date_time = date("Y_m_d_H_i_s");

        if ($type === "pdf") {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper("A4", "landscape");

            $dompdf->render();

            $filename = "Tabel Profil Lulusan_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                "Content-Type" => "application/pdf",
                "Content-Disposition" => "inline; filename=" . $filename,
            ]);
        } else {
            $filename = "Tabel Profil Lulusan_" . $date_time . ".xlsx";
            return Excel::download(new ProfilLulusanExport(), $filename);
        }
    }

    public function addProfilLulusan()
    {
        return view("content.profil_lulusan.add_pl", [
            "title" => "Tambah Profil Lulusan",
        ]);
    }

    public function storeProfilLulusan(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            "kodePL" => "required|unique:profil_lulusan,kodePL|max:10",
            "deskripsiPL" => "required",
            "namaPL" => "required",
        ]);

        // dd($data);

        Profil_Lulusan::create($data);

        return redirect()
            ->route("kurikulum.data.profil_lulusan")
            ->with("success", "Profil Lulusan berhasil ditambahkan");
    }

    public function edit($pl)
    {
        $pl = Profil_Lulusan::where("kodePL", $pl)->first();

        return view("content.profil_lulusan.edit_pl", [
            "title" => "Edit Profil Lulusan",
            "pl" => $pl,
        ]);
    }

    public function update($pl, Request $request)
    {
        if ($request->kodePL == $pl) {
            $validator = Validator::make($request->all(), [
                "kodePL" => "required",
                "deskripsiPL" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "kodePL" => "required|unique:profil_lulusan,kodePL",
                "deskripsiPL" => "required",
            ]);
        }
        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (
            Profil_Lulusan::where("kodePL", $request->kodePL)->exists() &&
            $request->kodePL != $pl
        ) {
            return redirect()
                ->back()
                ->with("error", "Kode Profil Lulusan sudah ada");
        }

        $pl = Profil_Lulusan::where("kodePL", $pl)->first();
        $pl->update([
            "kodePL" => $request->kodePL,
            "deskripsiPL" => $request->deskripsiPL,
        ]);

        $pl->save();

        return redirect()
            ->route("kurikulum.data.profil_lulusan")
            ->with("success", "Profil Lulusan berhasil diubah");
    }

    public function delete($pl)
    {
        if (Detail_PL_CPLProdi::where("kodePL", $pl)->exists()) {
            return redirect()
                ->route("kurikulum.data.profil_lulusan")
                ->with(
                    "error",
                    "Profil Lulusan masih berelasi dengan CPL Prodi."
                );
        } else {
            $pl = Profil_Lulusan::where("kodePL", $pl)->first();
            $pl->delete();
            return redirect()
                ->route("kurikulum.data.profil_lulusan")
                ->with("success", "Profil Lulusan berhasil dihapus");
        }
    }
}
