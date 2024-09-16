<?php

namespace App\Exports;

use App\Models\CPL_Prodi;
use App\Models\CPMK;
use App\Models\Detail_MK_CPMK;
use App\Models\Mata_Kuliah;
use App\Models\Detail_RPS;
use App\Models\RPS;
use App\Models\Teknik_Penilaian;
use App\Models\Minggu_RPS;
use App\Models\SubCPMK;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TeknikPenilaianCPMKExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $judul;
    protected $list_cpl;
    protected $list_mk;
    protected $detail_mk_cpmk;
    protected $list_cpmk;
    protected $list_rps;
    protected $list_teknikpenilaian;
    protected $list_minggurps;
    protected $detail_rps;
    protected $list_subcpmk;
    protected $tahun_ajaran;

    public function __construct($tahun_ajaran)
    {
        $this->tahun_ajaran = $tahun_ajaran;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $excel_data = [];
        $no = 1;
        $list_kolom = [
            "MBKM",
            "Partisipasi (Kehadiran / Quiz)",
            "Observasi (Praktek / Tugas)",
            "Unjuk Kerja (Presentasi)",
            "UTS",
            "Tes Tulis (UAS)",
            "Tes Lisan (Tugas Kelompok)",
        ];

        if (!function_exists("setTeknikPenilaian")) {
            function setTeknikPenilaian($asli, $baru)
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
                    Detail_Mk_CPMK::all()->where("kodeCPMK", $cpmk->kodeCPMK)
                    as $mk
                ) {
                    $data_sementara = [];
                    array_push($data_sementara, $no);
                    array_push($data_sementara, $cpl->kodeCPL);
                    array_push($data_sementara, $cpmk->kodeCPMK);
                    array_push($data_sementara, $mk->kodeMK);
                    foreach ($list_kolom as $tp) {
                        $checked = false;
                        foreach (
                            Teknik_Penilaian::all()->where(
                                "teknikPenilaian",
                                $tp
                            )
                            as $ltp
                        ) {
                            // if (Detail_RPS::all()>where('kodePenilaian',$ltp->kodePenilaian) != null) {
                            foreach (
                                Detail_RPS::all()->where(
                                    "kodePenilaian",
                                    $ltp->kodePenilaian
                                )
                                as $minggu
                            ) {
                                foreach (
                                    Minggu_RPS::all()->where(
                                        "kodeMingguRPS",
                                        $minggu->kodeMingguRPS
                                    )
                                    as $subCpmks
                                ) {
                                    if (
                                        $subCpmks->SubCPMK->CPMK->kodeCPMK ==
                                        $cpmk->kodeCPMK
                                    ) {
                                        $checked = true;
                                    }
                                }
                            }
                            // }
                        }
                        if ($checked) {
                            array_push($data_sementara, "✓");
                        } else {
                            array_push($data_sementara, "");
                        }
                    }

                    array_push($excel_data, $data_sementara);
                    $no++;
                }
            }
        }
        return new Collection($excel_data);
    }

    public function headings(): array
    {
        $headers = [
            "No",
            "Kode CPL",
            "Kode MK",
            "Kode CPMK",
            "MBKM",
            "Partisipasi (Kehadiran / Quiz)",
            "Observasi (Praktek / Tugas)",
            "Unjuk Kerja (Presentasi)",
            "UTS",
            "Tes Tulis (UAS)",
            "Tes Lisan (Tugas Kelompok)",
        ];
        // foreach ($this->list_kolom as $tp) {
        //     array_push($headers, $tp);
        // }
        return $headers;
    }

    public function columnWidths(): array
    {
        $columnWidth = [];
        $columnWidth["A"] = 5;
        $columnWidth["B"] = 15;
        $columnWidth["C"] = 60;
        foreach (range("D", "Z") as $column) {
            $columnWidth[$column] = 20;
        }

        return $columnWidth;
    }

    public function styles(Worksheet $sheet)
    {
        // wrapping deskripsi cpl
        $highestRow = $sheet->getHighestRow();
        $sheet
            ->getStyle("C1:C" . $highestRow)
            ->getAlignment()
            ->setWrapText(true);

        // bold header
        $highestColumn = $sheet->getHighestColumn(1);
        $sheet->getStyle("A1:{$highestColumn}1")->applyFromArray([
            "font" => [
                "bold" => true,
                "italic" => false,
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
        ]);

        // Center aligment checklist
        $sheet->getStyle("D2:{$highestColumn}{$highestRow}")->applyFromArray([
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
        ]);
        $sheet->getStyle("A2:A{$highestRow}")->applyFromArray([
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
        ]);
        $sheet->getStyle("B2:B{$highestRow}")->applyFromArray([
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
        ]);

        // Memberikan border
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")->applyFromArray([
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);

        // Memindahkan cursor ke cell A1
        $sheet->getStyle("A1");
    }
}
