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
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A5')
                ->type('namaMK', 'tesMKLagi')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('submit');
        });
    }
    public function testAddMataKuliahErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A5')
                ->type('namaMK', 'tesMKLagi')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('submit');
        });
    }
    public function testAddMataKuliahError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', '')
                ->type('namaMK', 'tesMKLagi')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('submit');
        });
    }

    public function testAddMataKuliahPrasyaratSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A3')
                ->type('namaMK', 'tesMKLagi')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->select('mat_kodeMK')
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press("#submit");
        });
    }

    public function testDeleteMataKuliahSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A0')
                ->type('namaMK', 'tesMK1')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('submit')
                ->clickLink('Tambah')
                ->type('kodeMK', 'A1')
                ->type('namaMK', 'tesMKLagi')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->select('mat_kodeMK', "A0")
                ->type('prasyarat_tambahan', "tes")
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
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A0')
                ->type('namaMK', 'tesMK1')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('#submit')
                ->clickLink('Edit')
                ->type('kodeMK', 'A8')
                ->type('namaMK', 'tesMK3')
                ->type('deskripsi', "tes udah diubah")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->select('mat_kodeMK')
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(3000)
                ->press('#submit')
                ->assertSee('Mata Kuliah');
        });
    }
    public function testEditMataKuliahError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->clickLink('Tambah')
                ->assertSee("Tambah Mata Kuliah")
                ->type('kodeMK', 'A0')
                ->type('namaMK', 'tesMK1')
                ->type('deskripsi', "tes")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('#submit')
                ->clickLink('Edit')
                ->type('kodeMK', '')
                ->type('namaMK', 'tesMK3')
                ->type('deskripsi', "tes udah diubah")
                ->select('kategoriMK')
                ->select('jenisMK')
                ->select('semester')
                ->type('sks', "12")
                ->select('mat_kodeMK')
                ->type('prasyarat_tambahan', "Kkkk")
                ->pause(2000)
                ->press('#submit')
                ->pause(2000)
                ->assertSee('Mata Kuliah');
        });
    }
    public function testPDFExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->pause(1000)
                ->click('.btn-outline-danger:nth-child(1)')
                ->pause(1000);
        });
    }
    public function testExcelExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Selamat Datang')
                ->type('nip', '197102111997021001')
                ->type('password', 'coba123')
                ->press('tombolLogin')
                ->pause(2000)
                ->clickLink('Data')
                ->clickLink('Mata Kuliah')
                ->pause(1000)
                ->click('a.btn.btn-success i.bi.bi-file-earmark-excel')
                ->pause(1000);
        });
    }
}
