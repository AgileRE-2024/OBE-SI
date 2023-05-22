<?php
namespace App\Exports;

use App\Models\Cpl_Prodi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PemetaanCplCpmkMkExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $cpl = Cpl_Prodi::get();
        $data = [];
        $count = 0;
        foreach ($cpl as $cpl) {
            if (sizeof($cpl->Cpmk) > 0) {
                foreach ($cpl->Cpmk as $cpmk) {
                    if (sizeof($cpmk->Mata_Kuliah) > 0) {
                        foreach ($cpmk->Mata_Kuliah as $mk) {
                            $row = [];
                            if ($count === 0) {
                                $row[] = $cpl->deskripsiCPL;
                            } else {
                                $row[] = '';
                            }
                            if ($count % sizeof($cpl->Cpmk) === 0) {
                                $row[] = $cpmk->deskripsiCPMK;
                            } else {
                                $row[] = '';
                            }
                            $row[] = $mk->namaMK;
                            $data[] = $row;
                            $count++;
                        }
                    } else {
                        $row = [];
                        if ($count === 0) {
                            $row[] = $cpl->deskripsiCPL;
                        } else {
                            $row[] = '';
                        }
                        $row[] = $cpmk->deskripsiCPMK;
                        $row[] = 'Belum ada mata kuliah yang dipetakan';
                        $data[] = $row;
                        $count++;
                    }
                }
            } else {
                $row = [];
                $row[] = $cpl->deskripsiCPL;
                $row[] = 'Belum ada CPMK yang dipetakan';
                $row[] = 'Belum ada mata kuliah yang dipetakan';
                $data[] = $row;
                $count++;
            }
        }
        return collect($data);
    }

    public function headings(): array
    {
        return [
            'Capaian Pembelajaran Lulusan',
            'Capaian Pembelajaran Mata Kuliah',
            'Mata Kuliah',
        ];
    }
}
