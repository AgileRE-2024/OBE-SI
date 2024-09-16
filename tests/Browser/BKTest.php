<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BKTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test adding a new Bahan Kajian successfully
     *
     * @return void
     */
    public function testAddBahanKajianSuccess()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("kodeBK", "BK88")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddBahanKajianErrorIDSama()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("kodeBK", "BK88")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->press("#submit")
                ->pause(2000);
        });
    }
    public function testAddBahanKajianError()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
                ->pause(1000);
        });
    }

    public function testDeleteBahanKajianSuccess()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("kodeBK", "BK00")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
                ->assertSee("Bahan Kajian")
                ->clickLink("Delete")
                ->pause(1000);
        });
    }

    public function testEditBahanKajianSuccess()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->assertSee("Bahan Kajian")
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("kodeBK", "BK00")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
                ->assertSee("Bahan Kajian")
                ->clickLink("Edit")
                ->assertSee("Edit Bahan Kajian")
                ->type("kodeBK", "BK99")
                ->type("namaBK", "tesBK anjay")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
                ->assertSee("Bahan Kajian");
        });
    }

    public function testEditBahanKajianError()
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->assertSee("Bahan Kajian")
                ->clickLink("Tambah")
                ->assertSee("Tambah Bahan Kajian")
                ->type("kodeBK", "BK00")
                ->type("namaBK", "tesBKLagi")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
                ->assertSee("Bahan Kajian")
                ->clickLink("Edit")
                ->assertSee("Edit Bahan Kajian")
                ->type("kodeBK", "")
                ->type("namaBK", "tesBK anjay")
                ->select("kategoriBK")
                ->type("referensiBK", "tes")
                ->pause(2000)
                ->press("#submit")
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->assertSee("Bahan Kajian")
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
                ->clickLink("Bahan Kajian")
                ->pause(2000)
                ->assertSee("Bahan Kajian")
                ->pause(1000)
                ->click("a.btn.btn-success i.bi.bi-file-earmark-excel")
                ->pause(1000);
        });
    }
}
