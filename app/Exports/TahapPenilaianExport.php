<?php

namespace App\Exports;

use App\Models\CPL_Prodi;
use App\Models\Detail_MK_CPMK;
use App\Models\Detail_RPS;
use App\Models\RPS;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TahapPenilaianExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $tahun_ajaran;

    public function __construct($tahun_ajaran)
    {
        $this->tahun_ajaran = $tahun_ajaran;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $excel_data = [];
        $no = 1;

        if (!function_exists("setTahapPenilaian")) {
            function setTahapPenilaian($asli, $baru)
            {
                if ($asli !== "") {
                    $prefix_asli = explode(" ", $asli)[0];
                    $prefix_baru = explode(" ", $baru)[0];
                    if (strpos($asli, $prefix_baru) === false) {
                        if (strpos($asli, "-")) {
                            if (
                                ($prefix_asli === "Awal" &&
                                    explode(" ", $asli)[2] !== "Akhir") ||
                                ($prefix_asli !== "Awal" &&
                                    explode(" ", $asli)[2] === "Akhir")
                            ) {
                                return "Awal - Akhir Semester";
                            }
                            return $asli;
                        } else {
                            switch ($prefix_asli) {
                                case "Awal":
                                    return $prefix_asli .
                                        " - " .
                                        $prefix_baru .
                                        " " .
                                        explode(" ", $asli)[1];

                                case "Tengah":
                                    if ($prefix_baru == "Awal") {
                                        return $prefix_baru .
                                            " - " .
                                            $prefix_asli .
                                            " " .
                                            explode(" ", $asli)[1];
                                    } else {
                                        return $prefix_asli .
                                            " - " .
                                            $prefix_baru .
                                            " " .
                                            explode(" ", $asli)[1];
                                    }

                                case "Akhir":
                                    return $prefix_baru .
                                        " - " .
                                        $prefix_asli .
                                        " " .
                                        explode(" ", $asli)[1];

                                default:
                                    return $asli;
                            }
                        }
                    }
                    return $asli;
                }
                return $baru;
            }
        }

        foreach (CPL_Prodi::all() as $cpl) {
            foreach ($cpl->CPMK as $cpmk) {
                foreach (
                    Detail_MK_CPMK::all()->where("kodeCPMK", $cpmk->kodeCPMK)
                    as $mk
                ) {
                    $data_sementara = [];
                    $bobot = 0;
                    $tahap_penilaian = "";
                    $teknik_penilaian = "";
                    $instrumen = [];
                    $kriteria = [];
                    foreach ($cpmk->SubCPMK as $subCpmk) {
                        foreach ($subCpmk->Minggu_RPS as $minggu_rps) {
                            if (
                                RPS::all()
                                    ->where("kodeMK", $mk->kodeMK)
                                    ->where("tahunAjaran", $this->tahun_ajaran)
                                    ->count()
                            ) {
                                foreach (
                                    Detail_RPS::all()
                                        ->where(
                                            "kodeMingguRPS",
                                            $minggu_rps->kodeMingguRPS
                                        )
                                        ->where(
                                            "kodeRPS",
                                            RPS::all()
                                                ->where("kodeMK", $mk->kodeMK)
                                                ->where(
                                                    "tahunAjaran",
                                                    $this->tahun_ajaran
                                                )
                                                ->first()->kodeRPS
                                        )
                                    as $detail_rps
                                ) {
                                    $data_teknik_penilaian =
                                        $detail_rps->Teknik_Penilaian;

                                    $bobot +=
                                        $data_teknik_penilaian->bobotPenilaian;
                                    $tahap_penilaian = setTahapPenilaian(
                                        $tahap_penilaian,
                                        $data_teknik_penilaian->tahapPenilaian
                                    );
                                    $teknik_penilaian =
                                        $teknik_penilaian !== ""
                                            ? $teknik_penilaian .
                                                "; " .
                                                $data_teknik_penilaian->teknikPenilaian
                                            : $data_teknik_penilaian->teknikPenilaian;
                                    if (
                                        !in_array(
                                            $data_teknik_penilaian->instrumenPenilaian,
                                            $instrumen
                                        )
                                    ) {
                                        array_push(
                                            $instrumen,
                                            $data_teknik_penilaian->instrumenPenilaian
                                        );
                                    }
                                    if (
                                        !in_array(
                                            $data_teknik_penilaian->kriteriaPenilaian,
                                            $kriteria
                                        )
                                    ) {
                                        array_push(
                                            $kriteria,
                                            $data_teknik_penilaian->kriteriaPenilaian
                                        );
                                    }
                                }
                            }
                        }
                    }

                    array_push($data_sementara, $no);
                    array_push($data_sementara, $cpl->kodeCPL);
                    array_push($data_sementara, $mk->kodeMK);
                    array_push($data_sementara, $cpmk->kodeCPMK);
                    array_push($data_sementara, $tahap_penilaian);
                    array_push($data_sementara, $teknik_penilaian);
                    array_push($data_sementara, implode(", ", $instrumen));
                    array_push($data_sementara, implode(", ", $kriteria));
                    array_push($data_sementara, $bobot);

                    array_push($excel_data, $data_sementara);
                    $no++;
                }
            }
        }

        return new Collection($excel_data);
    }

    public function headings(): array
    {
        return [
            "No",
            "Kode CPL",
            "Kode MK",
            "Kode CPMK",
            "Tahap Penilaian",
            "Teknik Penilaian",
            "Instrumen",
            "Kriteria",
            "Bobot",
        ];
    }

    public function columnWidths(): array
    {
        $columnWidth = [];
        $columnWidth["A"] = 5;
        $columnWidth["B"] = 15;
        $columnWidth["C"] = 15;
        $columnWidth["D"] = 15;
        $columnWidth["E"] = 25;
        $columnWidth["F"] = 25;
        $columnWidth["G"] = 25;
        $columnWidth["H"] = 25;
        $columnWidth["I"] = 15;

        return $columnWidth;
    }

    public function styles(Worksheet $sheet)
    {
        // get highestRow and highestColumn
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn(1);

        // bold header
        $sheet->getStyle("A1:{$highestColumn}1")->applyFromArray([
            "font" => [
                "bold" => true,
                "italic" => false,
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Memberikan border, posisi tengah vertikal, dan wrap text pada setiap sel
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")->applyFromArray([
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
            "alignment" => [
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
        ]);

        // Memindahkan cursor ke cell A1
        $sheet->getStyle("A1");
    }
}
