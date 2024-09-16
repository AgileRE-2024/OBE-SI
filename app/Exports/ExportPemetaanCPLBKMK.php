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

class ExportPemetaanCPLBKMK implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $cpl_list;
    protected $bk_list;
    protected $mk_list;
    protected $pemetaan1;
    protected $pemetaan2;

    public function __construct(
        $cpl_list,
        $bk_list,
        $mk_list,
        $pemetaan1,
        $pemetaan2
    ) {
        $this->cpl_list = $cpl_list;
        $this->bk_list = $bk_list;
        $this->mk_list = $mk_list;
        $this->pemetaan1 = $pemetaan1;
        $this->pemetaan2 = $pemetaan2;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = [];
        foreach ($this->cpl_list as $cpl) {
            $data_sementara = [];
            // array_push($data_sementara,"");
            array_push($data_sementara, $cpl->kodeCPL);

            // dd($data_sementara);
            foreach ($this->bk_list as $bk) {
                if (
                    $this->pemetaan2
                        ->where("kodeBK", $bk->kodeBK)
                        ->where("kodeCPL", $cpl->kodeCPL)
                        ->count() != 0
                ) {
                    $data_sel = [];
                    foreach (
                        $this->pemetaan1->where("kodeBK", $bk->kodeBK)
                        as $pemetaanbkmk
                    ) {
                        // dd($pemetaanbkmk->kodeMK);
                        array_push($data_sel, $pemetaanbkmk->kodeMK);
                        // array_push($data_sementara, $pemetaanbkmk->kodeMK);
                        // dd($data_sementara);
                    }
                    array_push($data_sementara, $data_sel);
                } else {
                    array_push($data_sementara, " ");
                }
            }
            array_push($data, $data_sementara);
        }
        // dd($data);
        return new Collection($data);
    }

    public function headings(): array
    {
        $headers = [" "];
        foreach ($this->bk_list as $bk) {
            array_push($headers, $bk->kodeBK);
        }
        return $headers;
    }

    public function columnWidths(): array
    {
        // $columnWidth = [''];
        //$columnWidth['A'] = 5;
        //$columnWidth['B'] = 15;
        //$columnWidth['C'] = 60;
        foreach (range("A", "Z") as $column) {
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
