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
        $newCollection = $rps->map(function ($item) {
            $item->namaBaru = $item->Mata_Kuliah->namaMK;
            return $item;
        });
        $newRPS = $newCollection->map(function ($item) {
            return [
                'id_rps' => $item->id_rps,
                'namaBaru' => $item->namaBaru,
                'tahunAjaran' => $item->tahunAjaran,
                'semester' => $item->semester,

                // Add other columns from $item if needed
            ];
        })->sortBy('semester');
        
        
        return $newRPS;
        
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
