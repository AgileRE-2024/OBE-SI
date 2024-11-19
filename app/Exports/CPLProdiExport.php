<?php

namespace App\Exports;

use App\Models\CPL_Prodi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CPLProdiExport implements FromCollection, WithHeadings, WithStyles
{
    public function collection()
    {
        $cpls = CPL_Prodi::all("kodeCPL", "levelCPL", "deskripsiCPL", "referensiCPL");
        // Menambahkan nomor urut ke setiap data CPL
        return $cpls->map(function ($cpl, $index) {
            return [
                'no' => $index + 1,  // Menambahkan nomor urut
                'kodeCPL' => $cpl->kodeCPL,
                'levelCPL' => $cpl->levelCPL,
                'deskripsiCPL' => $cpl->deskripsiCPL,
                'referensiCPL' => $cpl->referensiCPL,
            ];
        });
    }

    public function headings(): array
    {
        return ["No", "Kode CPL", "Level CPL", "Deskripsi CPL", "Referensi CPL"];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

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

        $columns = ["A", "B", "C", "D", "E"];

        $range = "A2:E{$highestRow}";
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

        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")->applyFromArray([
            "borders" => [
                "allBorders" => [
                    "borderStyle" => Border::BORDER_THIN,
                    "color" => ["argb" => "000000"],
                ],
            ],
        ]);

        $sheet->getColumnDimension("A")->setWidth(10);
        $sheet->getColumnDimension("B")->setWidth(20);
        $sheet->getColumnDimension("C")->setWidth(20);
        $sheet->getColumnDimension("D")->setWidth(50);
        $sheet->getColumnDimension("E")->setWidth(45);
    }
}
