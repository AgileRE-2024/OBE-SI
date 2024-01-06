<?php

namespace Database\Seeders;

use App\Models\Detail_SN_CPLProdi;
use App\Models\Detail_PL_CPLProdi;
use App\Models\Detail_CPLProdi_BK;
use App\Models\Detail_BK_MK;
use App\Models\Detail_MK_CPMK;
use App\Models\RPS;
use App\Models\Pustaka;
use App\Models\kriteria_penilaian;
use App\Models\Mahasiswa;
use App\Models\Minggu_RPS;
use App\Models\Kelas;
use App\Models\Page;
use App\Models\Detail_Nilai_Mahasiswa;
use App\Models\Teknik_Penilaian;
use App\Models\Pengampu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdiSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BahanKajianSeeder::class);
        $this->call(CPLDiktiSeeder::class);
        $this->call(ProfilLulusanSeeder::class);
        $this->call(CPLProdiSeeder::class);
        $this->call(MataKuliahSeeder::class);
        $this->call(PrasyaratSeeder::class);
        $this->call(CPMKSeeder::class);
        $this->call(SubCpmkSeeder::class);
        $this->call(KriteriaPenilaianSeeder::class);
        $this->call(PustakaSeeder::class);
        $this->call(TeknikPenilaianSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(DetailSnCplSeeder::class);
        $this->call(DetailCplBkSeeder::class);
        $this->call(DetailCplPlSeeder::class);
        $this->call(DetailBkMkSeeder::class);
        $this->call(DetailMkCpmkSeeder::class);
        $this->call(DetailNilaiMahasiswaSeeder::class);
        $this->call(RpsSeeder::class);
        $this->call(MingguRpsSeeder::class);
        $this->call(PengampuSeeder::class);
    }
}
