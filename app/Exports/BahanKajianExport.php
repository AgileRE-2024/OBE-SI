<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\Bahan_Kajian;

use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BahanKajianExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Bahan_Kajian::all('kodeBK', 'namaBK', 'kategoriBK', 'referensiBK');
    }

    public function headings(): array
    {
        return [
            'Kode BK',
            'Nama BK',
            'Kategori BK',
            'Referensi BK'
        ];
    }

    public function map($bahanKajian): array
    {
        return [
            $bahanKajian->kodeBK,
            $bahanKajian->namaBK,
            $bahanKajian->kategoriBK == 0 ? 'Pilihan' : 'Wajib',
            $bahanKajian->referensiBK
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
        $columns = ['A', 'B', 'C', 'D'];

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
        $sheet->getColumnDimension('A')->setWidth(10);
        $sheet->getColumnDimension('B')->setWidth(25);
        $sheet->getColumnDimension('C')->setWidth(13);
        $sheet->getColumnDimension('D')->setWidth(13);
        // Memindahkan cursor ke cell A1
        $sheet->getStyle('A1');
    }
}
