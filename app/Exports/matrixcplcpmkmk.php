<?php
namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MatrixCplCpmKmk implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $mk;
    protected $cpl;

    public function __construct($mk, $cpl)
    {
        $this->mk = $mk;
        $this->cpl = $cpl;
    }

    public function collection()
    {
        $data = [];

        foreach ($this->mk as $matkul) {
            $row = [
                '[' . $matkul->kodeMK . '] ' . $matkul->namaMK,
            ];

            foreach ($this->cpl as $item) {
                $value = '';
                foreach ($matkul->CPMK as $CPMKfromMK) {
                    if ($CPMKfromMK->CPL == $item) {
                        $value .= $CPMKfromMK->kodeCPMK . ' ';
                    }
                }
                $row[] = $value;
            }

            $data[] = $row;
        }

        return collect($data);
    }

    public function headings(): array
    {
        $headings = ['Mata Kuliah'];

        foreach ($this->cpl as $item) {
            $headings[] = $item->kodeCPL;
        }

        return $headings;
    }

    public function styles(Worksheet $sheet)
    {
        $styles = [
            1 => [
                'font' => ['bold' => true],
            ],
            'A1:' . $sheet->getHighestColumn() . '1' => [
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => 'CCCCCC'],
                ],
            ],
        ];

        return $styles;
    }
}
