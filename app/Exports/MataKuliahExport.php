<?php

namespace App\Exports;

use App\Models\Mata_Kuliah;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MataKuliahExport implements FromCollection, WithHeadings, WithMapping, WithEvents, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Mata_Kuliah::all(
            'kodeMK',
            'namaMK',
            'mat_kodeMK',
            'prasyaratTambahan',
            'jenisMK',
            'kategoriMK',
            'sks',
            'semester',
            'pustaka',
            'deskripsiMK',
        );
    }

    public function headings(): array
    {
        return [
            'Kode MK',
            'Nama MK',
            'Prasyarat Mata Kuliah',
            'Prasyarat',
            'Jenis MK',
            'Kategori MK',
            'SKS',
            'Semester',
            'Deskripsi MK',
        ];
    }

    public function map($mataKuliah): array
    {
        $kategoriMKLabels = [
            1 => 'Wajib',
            2 => 'Pilihan'
        ];

        $jenisMKLabels = [
            1 => 'Teori',
            2 => 'Praktikum',
            3 => 'Praktikum Lapangan'
        ];

        return [
            $mataKuliah->kodeMK,
            $mataKuliah->namaMK,
            $mataKuliah->mat_kodeMK,
            $mataKuliah->prasyaratTambahan,
            $jenisMKLabels[$mataKuliah->jenisMK],
            $kategoriMKLabels[$mataKuliah->kategoriMK],
            $mataKuliah->sks,
            $mataKuliah->semester,
            $mataKuliah->deskripsiMK,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('C1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('D1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->mergeCells('C1:D1');
            },
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
        $columns = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];

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
