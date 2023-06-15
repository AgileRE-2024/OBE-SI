<?php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemetaanCplCpmkMkExport implements FromCollection, WithHeadings
{
    protected $cpl;

    public function __construct($cpl)
    {
        $this->cpl = $cpl;
    }

public function collection(): Collection
{
    $data = collect();

    foreach ($this->cpl as $cpl) {
        // Counting
        $x = 0;
        foreach ($cpl->Cpmk as $item) {
            $x += (sizeof($item->Mata_Kuliah) > 0) ? sizeof($item->Mata_Kuliah) : 1;
        }

        if (sizeof($cpl->Cpmk) > 0) {
            for ($i = 0; $i < sizeof($cpl->Cpmk); $i++) {
                if (sizeof($cpl->Cpmk[$i]->Mata_Kuliah) > 0) {
                    for ($j = 0; $j < sizeof($cpl->Cpmk[$i]->Mata_Kuliah); $j++) {
                        $row = [
                            '[' . $cpl->kodeCPL . '] ' . $cpl->deskripsiCPL,
                            '[' . $cpl->Cpmk[$i]->kodeCPMK . '] ' . $cpl->Cpmk[$i]->deskripsiCPMK,
                            '[' . $cpl->Cpmk[$i]->Mata_Kuliah[$j]->kodeMK . '] ' . $cpl->Cpmk[$i]->Mata_Kuliah[$j]->namaMK,
                        ];

                        $data->push($row);
                    }
                } else {
                    $row = [
                        ($i == 0) ? '[' . $cpl->kodeCPL . '] ' . $cpl->deskripsiCPL : '',
                        '[' . $cpl->Cpmk[$i]->kodeCPMK . '] ' . $cpl->Cpmk[$i]->deskripsiCPMK,
                        'Belum ada mata kuliah yang dipetakan',
                    ];

                    $data->push($row);
                }
            }
        } else {
            $row = [
                '[' . $cpl->kodeCPL . '] ' . $cpl->deskripsiCPL,
                'Belum ada CPMK yang ditambahkan',
                'Belum ada mata kuliah yang dipetakan',
            ];

            $data->push($row);
        }
    }

    return $data;
}


    public function headings(): array
    {
        return ['CPL', 'CPMK', 'Mata Kuliah'];
    }
}