<?php


namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MataKuliahTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test adding a new Mata Kuliah successfully
     *
     * @return void
     */
    public function testAddMataKuliahSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK05')
                    ->type('namaMK', 'tesMKLagi')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('submit');
        });
    }
    public function testAddMataKuliahErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK05')
                    ->type('namaMK', 'tesMKLagi')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('submit');
        });
    }
    public function testAddMataKuliahError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', '')
                    ->type('namaMK', 'tesMKLagi')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('submit');
        });
    }

    public function testAddMataKuliahPrasyaratSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK07')
                    ->type('namaMK', 'tesMKLagi')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->select('mat_kodeMK')
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press("#submit");
        });
    }
    
    public function testDeleteMataKuliahSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK03')
                    ->type('namaMK', 'tesMK1')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->clickLink('Tambah')
                    ->type('kodeMK', 'MK04')
                    ->type('namaMK', 'tesMKLagi')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->select('mat_kodeMK',"MK03")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('submit')
                    ->pause(2000)
                    ->click('.btn-danger:first-of-type')
                    ->pause(3000)
                    ->click('tr:nth-of-type(2) .btn-danger')
                    ->pause(2000)
                    ->click('.btn-danger:first-of-type')
                    ->pause(2000)
                    ->assertSee('Mata Kuliah');
        });
    }
    public function testEditMataKuliahSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK02')
                    ->type('namaMK', 'tesMK1')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('#submit')
                    ->clickLink('Edit')
                    ->type('kodeMK', 'MK08')
                    ->type('namaMK', 'tesMK3')
                    ->type('deskripsi',"tes udah diubah")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->select('mat_kodeMK',"MK05")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(3000)
                    ->press('#submit')
                    ->assertSee('Mata Kuliah');
        });
    }
    public function testEditMataKuliahError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/mata_kuliah')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Mata Kuliah")
                    ->type('kodeMK', 'MK02')
                    ->type('namaMK', 'tesMK1')
                    ->type('deskripsi',"tes")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('#submit')
                    ->clickLink('Edit')
                    ->type('kodeMK', '')
                    ->type('namaMK', 'tesMK3')
                    ->type('deskripsi',"tes udah diubah")
                    ->select('kategoriMK')
                    ->select('jenisMK')
                    ->select('semester')
                    ->type('sks',"12")
                    ->select('mat_kodeMK',"MK05")
                    ->type('prasyarat_tambahan',"tes")
                    ->pause(2000)
                    ->press('#submit')
                    ->pause(2000)
                    ->assertSee('Mata Kuliah');
        });
    }
    
}
