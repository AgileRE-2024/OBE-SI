<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class PemetaanCPLMKExport implements FromCollection
{
    protected $judul;
    protected $list_cpl;
    protected $list_mk;
    protected $detail_mk_cpmk;
    protected $cpmk;

    public function __construct($judul, $list_cpl, $list_mk, $detail_mk_cpmk, $cpmk )
    {
        $this->judul = $judul;
        $this->list_cpl = $list_cpl;
        $this->list_mk = $list_mk;
        $this->detail_mk_cpmk = $detail_mk_cpmk;
        $this->cpmk = $cpmk;
    }
    public function collection()
    {
        $data = [];

        // Add header row
        $header = ['No.', 'Kode MK', 'Nama Mata Kuliah'];
        foreach ($this->list_cpl as $cpl) {
            array_push($header, $cpl->kodecpl);
        }
        array_push($data, $header);

        // Add data rows
        foreach ($this->list_mk as $mk) {
            $row = [$mk->kodeMK, $mk->namaMK];
            foreach ($list_cpl as $cpl){
                foreach ($list_cpmk->where('kodeCPL', $cpl->kodeCPL) as $cpmk) {
                    $isChecked = $this->$detail_mk_cpmk->where('kodeMK', $mk->kodeMK)
                                                    ->where('kodeCPMK', $cpmk->kodeCPMK)
                                                    ->count() > 0;
                }

            }
            array_push($row, $isChecked ? '✓' : '');
        }
        return collect($data);
    
    }
}