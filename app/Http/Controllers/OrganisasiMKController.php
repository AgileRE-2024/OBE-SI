<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use App\Models\Bahan_Kajian;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PDF;

class OrganisasiMKController extends Controller
{
    public function index(){
        $MK = Mata_Kuliah::get();
        $BK = Bahan_Kajian::get();
        return view('content.organisasi_mk',[
            'title' => 'Organisasi Mata Kuliah',
            'MK' => $MK,
            'BK' => $BK
        ]);
    }

    public function exportToExcel(Request $request)
    {
        $data = Mata_Kuliah::all();
    
        return Excel::download(new class($data) implements FromCollection, WithHeadings, WithStyles{
            private $data;
            
            public function __construct($data)
            {
                $this->data = $data;
            }
            
            public function collection()
            {
                return $this->data->sortByDesc('semester')->groupBy('semester')->map(function ($MKBysmt, $smt) {
                    return [
                        'Semester' => $smt,
                        'Total SKS' => $MKBysmt->sum('sks'),
                        'Total MK' => $MKBysmt->count(),
                        'MK Wajib' => $MKBysmt->where('kategoriMK', 1)->map(function ($product) {
                            return $product->kodeMK;
                        })->implode(", "),
                        'MK Pilihan' => $MKBysmt->where('kategoriMK', 2)->map(function ($product) {
                            return $product->kodeMK;
                        })->implode(", "),
                        'MKWK' => $MKBysmt->where('kategoriMK', 3)->map(function ($product) {
                            return $product->kodeMK;
                        })->implode(", "),
                    ];
                })->push([
                    'Semester' => 'Total SKS',
                    'Total SKS' => $this->data->sum('sks'),
                ]);
            }

            public function headings(): array
            {
                return [
                    'Semester',
                    'Total SKS',
                    'Total MK',
                    'MK Wajib',
                    'MK Pilihan',
                    'MKWK',
                ];
            }

            public function styles(Worksheet $sheet)
            {
                $styleArray = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                ];
                
                $sheet->getStyle('A1:' . $sheet->getHighestColumn() . $sheet->getHighestRow())->applyFromArray($styleArray);
                
                return [
                    1 => [
                        'font' => ['bold' => true],
                        'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
                    ],
                ];
            }

        }, 'organisasi_mk.xlsx');
    }

    public function exportToPDF()
    {
        $data = Mata_Kuliah::all();
        $pdf = PDF::loadView('content.organisasi_mk_pdf', ['data' => $data])->setPaper('a4', 'landscape');;
        return $pdf->download('organisasi_mk.pdf');
    }
}
