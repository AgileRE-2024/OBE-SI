<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TahapPenilaianTest extends DuskTestCase
{
    /**
     * User dapat mengakses halaman mekanisme dan tahap penilaian
     * serta dapat memilih informasi yang ditampilkan berdasarkan tahun ajaran
     */
    public function testAccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian')
                    ->assertSee('Mekanisme dan Tahap Penilaian')
                    ->pause(500)
                    ->select('#tahunAjaran')
                    ->pause(800)
                    ->assertSee('Kode CPL')
                    ->assertSee('Kode CPMK')
                    ->assertSee('Kode MK')
                    ->assertSee('Tahap Penilaian')
                    ->assertSee('Teknik Penilaian')
                    ->assertSee('Instrumen')
                    ->assertSee('Kriteria')
                    ->assertSee('Bobot')
                    ->pause(1000);
        });
    }

    /**
     * User tidak dapat melakukan export ke pdf maupun excel apabila tidak memilih
     * tahun ajaran
     */
    public function testTidakDapatExport() {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian')
                    ->pause(500)
                    ->click('#exportPDF')
                    ->assertSee('Oops')
                    ->pause(100)
                    ->click('#exportExcel')
                    ->assertSee('Oops')
                    ->pause(1000);
        });
    }

    /**
     * User dapat melakukan export ke pdf dan excel setelah memilih tahun ajaran
     */
    public function testExportPdfAndExcel() {
        // Export PDF
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian')
                    ->select('#tahunAjaran')
                    ->pause(800)
                    ->click('#exportPDF')
                    ->pause(500)
                    ->assertDontSee('Oops')
                    ->pause(3000);
        });

        // Export Excel
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian')
                    ->select('#tahunAjaran')
                    ->pause(800)
                    ->click('#exportExcel')
                    ->pause(500)
                    ->assertDontSee('Oops')
                    ->pause(3000);
        });
    }

}
