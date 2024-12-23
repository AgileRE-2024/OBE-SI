<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PemetaanCPLBKExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $bk;
    protected $cpl_prodi;
    protected $pemetaan_cpl_bk;

    public function __construct($bk, $cpl_prodi, $pemetaan_cpl_bk)
    {
        $this->bk = $bk;
        $this->cpl_prodi = $cpl_prodi;
        $this->pemetaan_cpl_bk = $pemetaan_cpl_bk;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = [];
        $no = 1;
        foreach ($this->bk as $bk) {
            $data_sementara = [];
            array_push($data_sementara, $no);
            array_push($data_sementara, $bk->kodeBK);
            array_push($data_sementara, $bk->namaBK);
            foreach ($this->cpl_prodi as $cpl) {
                if (
                    $this->pemetaan_cpl_bk
                        ->where("kodeCPL", $cpl->kodeCPL)
                        ->where("kodeBK", $bk->kodeBK)
                        ->count()
                ) {
                    array_push($data_sementara, "✓");
                } else {
                    array_push($data_sementara, "");
                }
            }

            array_push($data, $data_sementara);
            $no++;
        }
        return new Collection($data);
    }

    public function headings(): array
    {
        $headers = ["No", "Kode BK", "Nama BK"];
        foreach ($this->cpl_prodi as $cpl) {
            array_push($headers, $cpl->kodeCPL);
        }
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
