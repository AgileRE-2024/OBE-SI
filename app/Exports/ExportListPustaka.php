<?php

namespace App\Exports;
use App\Models\pustaka;
use App\Models\Minggu_RPS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportListPustaka implements FromCollection, WithHeadings, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $newPustaka = pustaka::select('id_pustaka', 'nama_penulis','tahun','judul','penerbit')->get();
        
        
        return $newPustaka;
        
    }
    public function headings(): array
    {
        return [
            'kode pustaka',
            'Nama Penulis',
            'Tahun',
            'Judul',
            'Penerbit'
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 45,    
            'C' => 15,    
            'D' => 45,            
        ];
    }

    
}