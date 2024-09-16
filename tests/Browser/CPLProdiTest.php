<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPLProdiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddCPLProdiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "CPL-99")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit");
        });
    }
    public function testAddCPLProdiError()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->pause(1000);
        });
    }
    public function testAddCPLProdiErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "CPL-99")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->pause(1000);
        });
    }
    public function testDeleteCPLProdiSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "CPL-00")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->clickLink("Delete")
                ->pause(1000);
        });
    }
    public function testCPLEditSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "CPL-00")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->assertSee("CPL Program Studi")
                ->clickLink("Edit")
                ->type("kodeCPL", "CPL-80")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->pause(1000);
        });
    }
    public function testCPLEditError()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->clickLink("Tambah")
                ->assertSee("Tambah CPL Prodi")
                ->type("kodeCPL", "CPL-00")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->assertSee("CPL Program Studi")
                ->clickLink("Edit")
                ->type("kodeCPL", "")
                ->type("deskripsiCPL", "tes")
                ->type("referensiCPL", "tes")
                ->pause(2000)
                ->press("submit")
                ->pause(1000);
        });
    }
    public function testPDFExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->pause(1000)
                ->click(".btn-outline-danger:nth-child(1)")
                ->pause(1000);
        });
    }
    public function testExcelExportSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "197102111997021001")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Data")
                ->clickLink("CPL Prodi")
                ->pause(1000)
                ->click("a.btn.btn-success i.bi.bi-file-earmark-excel")
                ->pause(1000);
        });
    }
}
