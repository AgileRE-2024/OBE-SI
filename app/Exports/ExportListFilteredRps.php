<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExportListFilteredRps implements FromCollection, WithHeadingRow
{
    protected $kodeMK;

    public function __construct($kodeMK)
    {
        $this->kodeMK = $kodeMK;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        $rps = RPS::where('kodeMK', $this->kodeMK)
        ->with('Mata_Kuliah')
        ->select('id_rps','namaMK','tahunAjaran','semester')->get();
        return $rps;
    }
}
