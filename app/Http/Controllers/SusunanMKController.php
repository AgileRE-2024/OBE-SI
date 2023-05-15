<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use App\Models\Bahan_Kajian;
use App\Models\Detail_BK_MK;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PDF;

class SusunanMKController extends Controller
{
    public function index(){
        $MK = Mata_Kuliah::get();
        $BK = Bahan_Kajian::get();
        return view('content.susunan_mk',[
            'title' => 'Susunan Mata Kuliah',
            'MK' => $MK,
            'BK' => $BK
        ]);
    }

    public function update(Request $request, Mata_Kuliah $Mata_Kuliah){
        $request->validate([
            'sks' => 'required|integer|between:1,8',
            'semester' => 'required|integer|between:1,8',
            'kategoriMK' => 'required'
        ]);
        $Mata_Kuliah->where('kodeMK', $request->kodeMK)->update([
            'sks' => $request->sks,
            'semester' => $request->semester,
            'kategoriMK' => $request->kategoriMK
        ]);
 
        return redirect(url('/dashboard/kurikulum/pemetaan/susunan-mata-kuliah/'))->with('success', 'Berhasil menyimpan perubahan!!');
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
                $semesterHeadings = range(1, 8); // create an array of semester values from 1 to 8
                
                return $this->data->map(function($item) use ($semesterHeadings) {
                    $kategoriMK = '';
                    if ($item->kategoriMK == 1) {
                        $kategoriMK = 'Wajib';
                    } elseif ($item->kategoriMK == 2) {
                        $kategoriMK = 'Pilihan';
                    } else {
                        $kategoriMK = 'MKWK';
                    }
                    
                    $semesterCheck = in_array($item->semester, $semesterHeadings) ? $item->semester : ''; // check if the semester value exists in the semester headings array
                    
                    return [
                        'kodeMK' => $item->kodeMK,
                        'namaMK' => $item->namaMK,
                        'kodeBK' => $item->Bahan_Kajian->pluck('kodeBK')->implode(','),
                        'sks' => $item->sks,
                        '1' => $semesterCheck == 1 ? '✓' : '',
                        '2' => $semesterCheck == 2 ? '✓' : '',
                        '3' => $semesterCheck == 3 ? '✓' : '',
                        '4' => $semesterCheck == 4 ? '✓' : '',
                        '5' => $semesterCheck == 5 ? '✓' : '',
                        '6' => $semesterCheck == 6 ? '✓' : '',
                        '7' => $semesterCheck == 7 ? '✓' : '',
                        '8' => $semesterCheck == 8 ? '✓' : '',
                        'kategoriMK' => $kategoriMK,
                    ];
                });
            }

            public function headings(): array
            {
                $semesterHeadings = range(1, 8); // create an array of semester values from 1 to 8
                $headings = [
                    'Kode MK',
                    'Nama MK',
                    'Kode BK',
                    'SKS',
                ];
                
                // add semester headings
                foreach ($semesterHeadings as $semester) {
                    $headings[] = (string) $semester;
                }
                
                $headings[] = 'Kategori MK';
                return $headings;
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
                
                $semesterHeadings = range(1, 8); // create an array of semester values from 1 to 8
                
                // center align the 'X' value in the semester columns
                foreach ($semesterHeadings as $semester) {
                    $sheet->getStyleByColumnAndRow($semester+3, 1, $semester+3, $sheet->getHighestRow())->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                }
                
                return [
                    1 => [
                        'font' => ['bold' => true],
                        'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
                    ],
                ];
            }
        }, 'susunan_mk.xlsx');
    }

    public function exportToPDF(Request $request)
    {
        $data = Mata_Kuliah::all();
        $pdf = PDF::loadView('content.susunan_mk_pdf', ['data' => $data]);
        return $pdf->download('susunan_mk.pdf');
    }
}
