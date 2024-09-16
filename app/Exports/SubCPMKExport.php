<?php

namespace App\Exports;

use App\Models\SubCPMK;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
// use Maatwebsite\Excel\Concerns\WithMapping;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SubCPMKExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return SubCPMK::all(
            "kodeSubCPMK",
            "kodeCPMK",
            "deskripsiSubCPMK",
            "kriteriaPenilaian",
            "indikatorPenilaian"
        );
    }

    public function headings(): array
    {
        return [
            "Kode Sub CPMK",
            "Kode CPMK",
            "Deskripsi Sub CPMK",
            "Kriteria Penilaian",
            "Indikator Penilaian",
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

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
        $columns = ["A", "B", "C", "D", "E"];

        $range = "A2:G{$highestRow}";
        foreach ($columns as $column) {
            $columnRange = $column . "2:" . $column . $highestRow;
            $sheet->getStyle($columnRange)->applyFromArray([
                "alignment" => [
                    "horizontal" => Alignment::HORIZONTAL_CENTER,
                    "vertical" => Alignment::VERTICAL_CENTER,
                    "wrapText" => true,
                ],
            ]);
        }
        // Memberikan border
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")->applyFromArray([
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);
        $sheet->getColumnDimension("A")->setWidth(15);
        $sheet->getColumnDimension("B")->setWidth(15);
        $sheet->getColumnDimension("C")->setWidth(50);
        $sheet->getColumnDimension("D")->setWidth(50);
        $sheet->getColumnDimension("E")->setWidth(50);
        // Memindahkan cursor ke cell A1
        $sheet->getStyle("A1");
    }
}
