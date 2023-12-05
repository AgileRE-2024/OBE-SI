<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExportListRps implements FromCollection, WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $newestYear = RPS::max('tahunAjaran');
        $rps = RPS::where('tahunAjaran',$newestYear)
        ->with('mata_kuliah')
        ->select('id_rps','namaMK','tahunAjaran','semester')->get();
        return $rps;
    }
}
