<?php

namespace App\Exports;
use App\Models\RPS;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportListFilteredRps implements FromCollection, WithHeadings
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
        $rps = RPS::where("kodeMK", $this->kodeMK)
            ->with("Mata_Kuliah")
            ->get();
        $newCollection = $rps->map(function ($item) {
            $item->namaBaru = $item->Mata_Kuliah->namaMK;
            return $item;
        });
        $newRPS = $newCollection
            ->map(function ($item) {
                return [
                    "id_rps" => $item->id_rps,
                    "namaBaru" => $item->namaBaru,
                    "tahunAjaran" => $item->tahunAjaran,
                    "semester" => $item->semester,

                    // Add other columns from $item if needed
                ];
            })
            ->sortBy("semester");
        return $rps;
    }
    public function headings(): array
    {
        return ["Kode RPS", "Mata Kuliah", "Tahun Ajaran", "Semester"];
    }
}
