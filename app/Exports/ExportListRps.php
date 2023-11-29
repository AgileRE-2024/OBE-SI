<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportListRps implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $newestYear = RPS::max('tahunAjaran');
        $rps = RPS::where('tahunAjaran',$newestYear)->get();
        return $rps;
    }
}
