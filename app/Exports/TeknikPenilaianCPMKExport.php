<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TeknikPenilaianCPMKExport implements FromCollection, WithHeadings, WithColumnWidths, WithStyles
{
    protected $judul;
    protected $list_cpl;
    protected $list_mk;
    protected $detail_mk_cpmk;
    protected $list_cpmk;
    protected $list_rps;
    protected $list_teknikpenilaian;
    protected $list_kolom;
    protected $list_minggurps;
    protected $detail_rps;
    protected $list_subcpmk;

    public function __construct($judul, $list_cpl, $list_mk, $detail_mk_cpmk, $list_cpmk, $list_rps, $list_teknikpenilaian, $list_kolom, $list_minggurps,$detail_rps,$list_subcpmk)
    {
        $this->judul = $judul;
        $this->list_cpl = $list_cpl;
        $this->list_mk = $list_mk;
        $this->detail_mk_cpmk = $detail_mk_cpmk;
        $this->list_cpmk = $list_cpmk;
        $this->list_rps = $list_rps;
        $this->list_teknikpenilaian = $list_teknikpenilaian;
        $this->list_kolom = $list_kolom;
        $this->list_minggurps = $list_minggurps;
        $this->list_detail_rps = $detail_rps;
        $this->list_subcpmk = $list_subcpmk;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(): Collection
    {
        $data = [];
        $no = 1;
        foreach ($this->list_cpl as $cpl) {
            foreach($cpl->CPMK as $cpmk){
                foreach ($cpmk->Mata_Kuliah as $mk ) {
                    $data_sementara = [];
                    array_push($data_sementara, $no);
                    array_push($data_sementara, $cpl->kodeCPL);
                    array_push($data_sementara, $cpmk->kodeCPMK);
                    array_push($data_sementara, $mk->kodeMK);
                    foreach ($this->list_kolom as $tp){
                        $checked = false;
                        foreach ($this->list_teknikpenilaian->where('teknikPenilaian', $tp) as $ltp) {
                            foreach ($this->detail_rps->where('kodePenilaian',$ltp->kodePenilaian) as $minggu) {
                                foreach ($this->list_minggurps->where('kodeMingguRPS',$minggu->kodeMingguRPS) as $subCpmks) {
                                    if($subCpmks->SubCPMK->CPMK) {
                                        $checked = true;
                                    }
                                }
                            }
                        }
                        if ($checked){
                            array_push($data_sementara,'✓');
                        }
                        else{
                            array_push($data_sementara, '');
                        }
                    }


            array_push($data, $data_sementara);
            $no++;
                }
            }
        }
        return new Collection($data);
    }

    public function headings(): array
    {
        $headers = ['No', 'Kode CPL', 'Kode MK', 'Kode CPMK'];
        foreach ($this->list_kolom as $tp) {
            array_push($headers, $tp);
        }
        return $headers;
    }

    public function columnWidths(): array
    {
        $columnWidth = [];
        $columnWidth['A'] = 5;
        $columnWidth['B'] = 15;
        $columnWidth['C'] = 60;
        foreach (range('D', 'Z') as $column) {
            $columnWidth[$column] = 20;
        }

        return $columnWidth;
    }

    public function styles(Worksheet $sheet)
    {
        // wrapping deskripsi cpl
        $highestRow = $sheet->getHighestRow();
        $sheet->getStyle('C1:C' . $highestRow)
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

        // Center aligment checklist
        $sheet->getStyle("D2:{$highestColumn}{$highestRow}")
            ->applyFromArray([
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ]);
        $sheet->getStyle("A2:A{$highestRow}")
            ->applyFromArray([
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                    'wrapText' => true,
                ],
            ]);
        $sheet->getStyle("B2:B{$highestRow}")
            ->applyFromArray([
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
