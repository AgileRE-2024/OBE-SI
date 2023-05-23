<?php

namespace App\Exports;

use App\Models\CPL_Prodi;
use App\Models\Detail_RPS;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TahapPenilaianExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $excel_data = [];
        $no = 1;

        if (!function_exists('setTahapPenilaian')) {
            function setTahapPenilaian($asli, $baru)
            {
                if ($asli !== '') {
                    $prefix_asli = explode(' ', $asli)[0];
                    $prefix_baru = explode(' ', $baru)[0];
                    if (strpos($asli, $prefix_baru) === false) {
                        if (strpos($asli, '-')) {
                            if (($prefix_asli === 'Awal' && explode(' ', $asli)[2] !== 'Akhir') || ($prefix_asli !== 'Awal' && explode(' ', $asli)[2] === 'Akhir')) {
                                return 'Awal - Akhir Semester';
                            }
                            return $asli;
                        } else {
                            switch ($prefix_asli) {
                                case 'Awal':
                                    return $prefix_asli . ' - ' . $prefix_baru . ' ' . explode(' ', $asli)[1];

                                case 'Tengah':
                                    if ($prefix_baru == 'Awal') {
                                        return $prefix_baru . ' - ' . $prefix_asli . ' ' . explode(' ', $asli)[1];
                                    } else {
                                        return $prefix_asli . ' - ' . $prefix_baru . ' ' . explode(' ', $asli)[1];
                                    }

                                case 'Akhir':
                                    return $prefix_baru . ' - ' . $prefix_asli . ' ' . explode(' ', $asli)[1];

                                default:
                                    return $asli;
                            }
                        }
                    }
                    return $asli;
                }
                return $baru;
            }
        }

        foreach (CPL_Prodi::all() as $cpl) {
            foreach ($cpl->CPMK as $cpmk) {
                foreach ($cpmk->Mata_Kuliah as $mk) {
                    $data_sementara = [];
                    $bobot = 0;
                    $tahap_penilaian = '';
                    $teknik_penilaian = '';
                    $instrumen = [];
                    $kriteria = [];
                    foreach ($cpmk->SubCPMK as $subCpmk) {
                        if ($subCpmk->Minggu_RPS->count()) {
                            foreach (Detail_RPS::all()->where('kodeMingguRPS', $subCpmk->Minggu_RPS->first()->kodeMingguRPS) as $detail_rps) {
                                $data_teknik_penilaian = $detail_rps->Teknik_Penilaian;

                                $bobot += $data_teknik_penilaian->bobotPenilaian;
                                $tahap_penilaian = setTahapPenilaian($tahap_penilaian, $data_teknik_penilaian->tahapPenilaian);
                                $teknik_penilaian = ($teknik_penilaian > 0 ? $teknik_penilaian . $data_teknik_penilaian->teknikPenilaian : $teknik_penilaian) == '' ? $data_teknik_penilaian->teknikPenilaian : $teknik_penilaian;
                                if (!in_array($data_teknik_penilaian->instrumenPenilaian, $instrumen)) {
                                    array_push($instrumen, $data_teknik_penilaian->instrumenPenilaian);
                                }
                                if (!in_array($data_teknik_penilaian->kriteriaPenilaian, $kriteria)) {
                                    array_push($kriteria, $data_teknik_penilaian->kriteriaPenilaian);
                                }
                            }
                        }
                    }


                    array_push($data_sementara, $no);
                    array_push($data_sementara, $cpl->kodeCPL);
                    array_push($data_sementara, $mk->kodeMK);
                    array_push($data_sementara, $cpmk->kodeCPMK);
                    array_push($data_sementara, $tahap_penilaian);
                    array_push($data_sementara, $teknik_penilaian);
                    array_push($data_sementara, implode(', ', $instrumen));
                    array_push($data_sementara, implode(', ', $kriteria));
                    array_push($data_sementara, $bobot);

                    array_push($excel_data, $data_sementara);
                    $no++;
                }
            }
        }

        return new Collection($excel_data);
    }

    public function headings(): array
    {
        return ['No', 'Kode CPL', 'Kode MK', 'Kode CPMK', 'Tahap Penilaian', 'Teknik Penilaian', 'Instrumen', 'Kriteria', 'Bobot'];
    }

    public function columnWidths(): array
    {
        $columnWidth = [];
        $columnWidth['A'] = 5;
        $columnWidth['B'] = 15;
        $columnWidth['C'] = 15;
        $columnWidth['D'] = 15;
        $columnWidth['E'] = 25;
        $columnWidth['F'] = 25;
        $columnWidth['G'] = 25;
        $columnWidth['H'] = 25;
        $columnWidth['I'] = 15;

        return $columnWidth;
    }

    public function styles(Worksheet $sheet)
    {
        // wrapping Tahap penilaian
        $highestRow = $sheet->getHighestRow();
        $sheet->getStyle('E1:E' . $highestRow)
            ->getAlignment()
            ->setWrapText(true);

        // bold header
        $highestColumn = $sheet->getHighestColumn(1);
        $sheet->getStyle("A1:{$highestColumn}1")
            ->applyFromArray([
                'font' => [
                    'bold' => true,
                    'italic' => false,
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ]);

        // Memberikan border
        $sheet->getStyle("A1:{$highestColumn}{$highestRow}")
            ->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
            ]);

        // Memindahkan cursor ke cell A1
        $sheet->getStyle('A1');
    }
}
