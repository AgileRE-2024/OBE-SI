<?php

namespace App\Exports;
use App\Models\RPS;
use App\Models\Mata_Kuliah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportListRps implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $newestYear = RPS::max('tahunAjaran');
        $rps = RPS::where('tahunAjaran',$newestYear)
        ->with('Mata_Kuliah')->get();
        foreach ($rps as $rps) {
            $rps->namaBaru = $rps->Mata_Kuliah->namaMK;
        }
        return $rps;
        
    }
    public function headings(): array
    {
        return [
            'Kode RPS',
            'Mata Kuliah',
            'Tahun Ajaran',
            'Semester'
        ];
    }
}
