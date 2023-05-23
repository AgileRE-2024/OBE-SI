<?php

namespace App\Exports;

use App\Models\CPL_Prodi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CPLProdiExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return CPL_Prodi::all('kodeCPL', 'deskripsiCPL', 'referensiCPL');
    }

    public function headings(): array
    {
        return [
            'Kode CPL', 'Deskripsi CPL', 'Referensi CPL'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $highestRow = $sheet->getHighestRow();

        // bold header
        $highestColumn = $sheet->getHighestColumn(1);
        $sheet->getStyle("A1:{$highestColumn}1")
            ->applyFromArray([
                'font' => [
                    'bold' => true,
                    'italic' => false,
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ]);

        // Center aligment checklist
        $columns = ['A', 'B', 'C'];

        $range = "A2:G{$highestRow}";
        foreach ($columns as $column) {
            $columnRange = $column . '2:' . $column . $highestRow;
            $sheet->getStyle($columnRange)->applyFromArray([
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ]);
        }
        // Memberikan border
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")
            ->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
            ]);

        // Memindahkan cursor ke cell A1
        $sheet->getStyle('A1');
    }
}
