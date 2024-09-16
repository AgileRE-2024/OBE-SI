<?php

namespace App\Exports;

use App\Models\PemetaanCplDiktiCplProdi;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CplDiktiCplProdiExport implements
    FromCollection,
    WithHeadings,
    WithColumnWidths,
    WithStyles
{
    protected $cpl_dikti;
    protected $cpl_prodi;
    protected $pemetaan_cpldikti_cplprodi;

    public function __construct(
        $cpl_dikti,
        $cpl_prodi,
        $pemetaan_cpldikti_cplprodi
    ) {
        $this->cpl_dikti = $cpl_dikti;
        $this->cpl_prodi = $cpl_prodi;
        $this->pemetaan_cpldikti_cplprodi = $pemetaan_cpldikti_cplprodi;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = [];
        $no = 1;
        foreach ($this->cpl_dikti as $cpl) {
            $data_sementara = [];
            array_push($data_sementara, $no);
            array_push($data_sementara, $cpl->kodeCPLSN);
            array_push($data_sementara, $cpl->deskripsiSN);
            foreach ($this->cpl_prodi as $pl) {
                if (
                    $this->pemetaan_cpldikti_cplprodi
                        ->where("kodeCPLSN", $cpl->kodeCPLSN)
                        ->where("kodeCPL", $pl->kodeCPL)
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
        $headers = ["No", "Kode CPL", "Deskripsi CPL"];
        foreach ($this->cpl_prodi as $pl) {
            array_push($headers, $pl->kodeCPL);
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
