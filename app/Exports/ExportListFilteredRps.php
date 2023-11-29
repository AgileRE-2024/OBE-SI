<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportListFilteredRps implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection($kodeMK)
    {
        $rps = RPS::where('kodeMK', $kodeMK)->get();
        return $rps;
    }
}
