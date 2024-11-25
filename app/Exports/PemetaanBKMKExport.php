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
use Maatwebsite\Excel\Events\AfterSheet;

class PemetaanBKMKExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $bahan_kajian;
    protected $mata_kuliah;
    protected $pemetaan_bk_mk;

    public function __construct($bahan_kajian, $mata_kuliah, $pemetaan_bk_mk)
    {
        $this->bahan_kajian = $bahan_kajian;
        $this->mata_kuliah = $mata_kuliah;
        $this->pemetaan_bk_mk = $pemetaan_bk_mk;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = [];
        $no = 1;
        foreach ($this->mata_kuliah as $mk) {
            $data_sementara = [];
            array_push($data_sementara, $no);
            array_push($data_sementara, $mk->kodeMK);
            array_push($data_sementara, $mk->namaMK);
            foreach ($this->bahan_kajian as $bk) {
                if (
                    $this->pemetaan_bk_mk
                        ->where("kodeMK", $mk->kodeMK)
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
        $headers = ["No", "Kode MK", "Nama MK"];
        foreach ($this->bahan_kajian as $bk) {
            array_push($headers, $bk->kodeBK);
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
