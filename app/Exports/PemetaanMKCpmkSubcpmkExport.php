<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PemetaanMKCpmkSubcpmkExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $mk_list;
    protected $cpmk_list;
    protected $subcpmk_list;
    protected $detailmkcpmk_list;

    public function __construct(
        $mk_list,
        $cpmk_list,
        $subcpmk_list,
        $detailmkcpmk_list
    ) {
        $this->mk_list = $mk_list;
        $this->cpmk_list = $cpmk_list;
        $this->subcpmk_list = $subcpmk_list;
        $this->detailmkcpmk_list = $detailmkcpmk_list;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = collect([]);
        $prevMK = null;
        $prevCPL = null;
        $prevCPMK = null;
        $subCPMKs = "";

        foreach ($this->mk_list as $mk) {
            $list_relasi_mk = $this->detailmkcpmk_list->where(
                "kodeMK",
                $mk->kodeMK
            );
            $list_kode_cpmk = $list_relasi_mk->pluck("kodeCPMK")->toArray();

            foreach ($list_kode_cpmk as $kode_cpmk) {
                $cpmk_filter2 = $this->cpmk_list->where("kodeCPMK", $kode_cpmk);
                $cpmk_codes = $cpmk_filter2->pluck("kodeCPMK")->toArray();
                $cpmk_desc = $cpmk_filter2->pluck("deskripsiCPMK")->toArray();

                $subCPMKs = $this->subcpmk_list
                    ->whereIn("kodeCPMK", $cpmk_codes)
                    ->pluck("kodeSubCPMK")
                    ->map(function ($item) {
                        return $item .
                            " " .
                            $this->subcpmk_list
                                ->where("kodeSubCPMK", $item)
                                ->first()->deskripsiSubCPMK;
                    })
                    ->implode(", ");

                $mkCode = $prevMK === $mk->kodeMK ? "" : $mk->kodeMK;
                $cplCode =
                    $prevMK === $mk->kodeMK && $prevCPMK === $cpmk_codes[0]
                        ? ""
                        : $cpmk_filter2->first()->kodeCPL;
                $cpmkCode =
                    $prevCPMK === $cpmk_codes[0]
                        ? ""
                        : implode(", ", $cpmk_codes);
                $descCPMK =
                    $prevCPMK === $cpmk_codes[0]
                        ? ""
                        : implode(", ", $cpmk_desc);

                $data->push([
                    "mk" => $mkCode,
                    "cpl" => $cplCode,
                    "cpmk" => $cpmkCode,
                    "deskripsi_cpmk" => $descCPMK,
                    "sub_cpmk" => $subCPMKs,
                ]);

                $prevMK = $mk->kodeMK;
                $prevCPL = $cpmk_filter2->first()->kodeCPL;
                $prevCPMK = $cpmk_codes[0];
            }
        }

        return $data;
    }

    public function headings(): array
    {
        $headers = ["MK", "CPL", "CPMK", "Deskripsi CPMK", "Sub-CPMK"];
        return $headers;
    }

    public function columnWidths(): array
    {
        $columnWidth = [
            "A" => 10,
            "B" => 10,
            "C" => 10,
            "D" => 30,
            "E" => 40,
        ];

        return $columnWidth;
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

        $sheet
            ->getStyle("A1:E" . $highestRow)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER)
            ->setWrapText(true);

        $sheet->getStyle("A1:E1")->applyFromArray([
            "font" => [
                "bold" => true,
                "italic" => false,
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
                "vertical" => Alignment::VERTICAL_CENTER,
                "wrapText" => true,
            ],
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);

        $sheet->getStyle("A2:E" . $highestRow)->applyFromArray([
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);

        $sheet->getStyle("A1:E1")->applyFromArray([
            "borders" => [
                "bottom" => [
                    "borderStyle" => Border::BORDER_THICK,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);
    }
}
