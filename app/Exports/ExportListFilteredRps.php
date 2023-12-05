<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportListFilteredRps implements FromCollection
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
        $rps = RPS::where('kodeMK', $this->kodeMK)->get();
        return $rps;
    }
}
