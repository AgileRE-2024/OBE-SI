<?php

namespace App\Http\Controllers;

use App\Exports\MataKuliahExport;
use Dompdf\Dompdf;
use App\Models\Mata_Kuliah;
use App\Models\Detail_BK_MK;
use App\Models\Detail_MK_CPMK;
use App\Models\MataKuliah;
use App\Models\Prodi;
use App\Models\Prasyarat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mks = Mata_Kuliah::all();
        return view("content.mata_kuliah.mata_kuliah", [
            "title" => "Mata Kuliah",
            "mks" => $mks,
        ]);
    }

    public function export($type)
    {
        date_default_timezone_set("Asia/Jakarta");

        $view = view("content.mata_kuliah.tableToEkspor", [
            "title" => "Tabel Mata Kuliah",
            "mks" => Mata_Kuliah::all(),
        ]);

        $date_time = date("Y_m_d_H_i_s");

        if ($type === "pdf") {
            $dompdf = new Dompdf();
            $dompdf->loadHtml($view);
            $dompdf->setPaper("A4", "landscape");

            $dompdf->render();

            $filename = "Tabel Mata Kuliah_" . $date_time . ".pdf";

            return Response::make($dompdf->output(), 200, [
                "Content-Type" => "application/pdf",
                "Content-Disposition" => "inline; filename=" . $filename,
            ]);
        } else {
            $filename = "Tabel Mata Kuliah_" . $date_time . ".xlsx";
            return Excel::download(new MataKuliahExport(), $filename);
        }
    }

    public function addMataKuliah()
    {
        $mks = Mata_Kuliah::all();
        $prodiList = Prodi::pluck("namaProdi", "namaProdi");

        return view("content.mata_kuliah.add_mata_kuliah", [
            "title" => "Tambah Mata Kuliah",
            "mks" => $mks,
            "prodiList" => $prodiList,
        ]);
    }

    public function editMataKuliah($mk)
    {
        $mk = Mata_Kuliah::where("kodeMK", $mk)->first();
        $mks = Mata_Kuliah::all()->except($mk->kodeMK);
        $prodiList = Prodi::pluck("namaProdi", "namaProdi");

        return view("content.mata_kuliah.edit_mata_kuliah", [
            "title" => "Mata Kuliah",
            "mk" => $mk,
            "mks" => $mks,
            "prodiList" => $prodiList,
        ]);
    }

    public function storeMataKuliah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "kodeMK" => "required|unique:mata_kuliah,kodeMK",
            "namaMK" => "required",
            "namaProdi" => "required",
            "jenisMK" => "required",
            "kategoriMK" => "required",
            "sks" => "required",
            "semester" => "required",
            "deskripsi" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Mata_Kuliah::create([
            "kodeMK" => $request->kodeMK,
            "namaProdi" => $request->namaProdi,
            "namaMK" => $request->namaMK,
            "jenisMK" => (int) $request->jenisMK,
            "kategoriMK" => (int) $request->kategoriMK,
            "sks" => (int) $request->sks,
            "ects" => (float) $request->ects,
            "semester" => (int) $request->semester,
            "deskripsiMK" => $request->deskripsi,
            "prasyaratTambahan" => $request->prasyarat_tambahan,
        ]);

        if ($request->mat_kodeMK != null) {
            foreach ($request->mat_kodeMK as $value) {
                // dd($value);
                Prasyarat::create([
                    "kodeMK" => $request->kodeMK,
                    "mat_kodeMK" => $value,
                ]);
            }
        }

        return redirect()
            ->route("kurikulum.data.mata_kuliah")
            ->with("success", "Mata Kuliah berhasil ditambahkan");
    }

    public function updateMataKuliah(Request $request, $mk)
    {
        if ($request->kodeMK == $mk) {
            $validator = Validator::make($request->all(), [
                "kodeMK" => "required",
                "namaMK" => "required",
                "namaProdi" => "required",
                "jenisMK" => "required",
                "kategoriMK" => "required",
                "sks" => "required",
                "semester" => "required",
                "deskripsi" => "required",
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                "kodeMK" => "required|unique:mata_kuliah,kodeMK",
                "namaMK" => "required",
                "namaProdi" => "required",
                "jenisMK" => "required",
                "kategoriMK" => "required",
                "sks" => "required",
                "semester" => "required",
                "deskripsi" => "required",
            ]);
        }

        if ($validator->fails()) {
            // flash('error')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (
            Mata_Kuliah::where("kodeMK", $request->kodeMK)->exists() &&
            $request->kodeMK != $mk
        ) {
            return redirect()
                ->back()
                ->with("error", "Kode Mata Kuliah sudah ada");
        }

        if ($request->mat_kodeMK == null) {
            $mat_kodeMK = null;
        } else {
            $mat_kodeMK = $request->mat_kodeMK;

            $mat_kodeMK = Prasyarat::where("kodeMK", $mk);
            $mat_kodeMK->delete();
            // $prasyarat = array();

            foreach ($request->mat_kodeMK as $value) {
                // $prasyarat[] = $value;
                Prasyarat::create([
                    "kodeMK" => $mk,
                    "mat_kodeMK" => $value,
                ]);
            }
        }

        if ($request->prasyarat_tambahan == null) {
            $prasyarat_tambahan = null;
        } else {
            $prasyarat_tambahan = $request->prasyarat_tambahan;
        }

        $mk = Mata_Kuliah::where("kodeMK", $mk)->first();
        // $mat_kodeMK = Prasyarat::where('kodeMK', $mk);
        // $mat_kodeMK = $mk->Prasyarat->mat_kodeMK;

        $mk->update([
            "kodeMK" => $request->kodeMK,
            "mat_kodeMK" => $request->mat_kodeMK,
            "namaProdi" => $request->namaProdi,
            "namaMK" => $request->namaMK,
            "jenisMK" => (int) $request->jenisMK,
            "kategoriMK" => (int) $request->kategoriMK,
            "sks" => (int) $request->sks,
            "ects" => (float) $request->ects,
            "semester" => (int) $request->semester,
            "deskripsiMK" => $request->deskripsi,
            "prasyaratTambahan" => $prasyarat_tambahan,
        ]);

        $mk->save();

        return redirect()
            ->route("kurikulum.data.mata_kuliah")
            ->with("success", "Mata Kuliah berhasil diubah");
    }

    public function deleteMataKuliah($mk)
    {
        if (Mata_Kuliah::where("mat_kodeMK", $mk)->exists()) {
            return redirect()
                ->route("kurikulum.data.mata_kuliah")
                ->with(
                    "error",
                    "Mata Kuliah gagal dihapus. Mata Kuliah ini digunakan oleh Mata kuliah lain"
                );
        } elseif (Detail_BK_MK::where("kodeMK", $mk)->exists()) {
            return redirect()
                ->route("kurikulum.data.mata_kuliah")
                ->with(
                    "error",
                    "Mata Kuliah masih berelasi dengan Bahan Kajian."
                );
        } elseif (Detail_MK_CPMK::where("kodeMK", $mk)->exists()) {
            return redirect()
                ->route("kurikulum.data.mata_kuliah")
                ->with("error", "Mata Kuliah masih berelasi dengan CPL.");
        } else {
            $matkul = Mata_Kuliah::where("kodeMK", $mk)->first();
            $prasyarat = Prasyarat::where("kodeMK", $mk)->get();

            foreach ($prasyarat as $value) {
                $value->delete();
            }
            $matkul->delete();
            return redirect()
                ->route("kurikulum.data.mata_kuliah")
                ->with("success", "Mata Kuliah berhasil dihapus");
        }
    }
}
