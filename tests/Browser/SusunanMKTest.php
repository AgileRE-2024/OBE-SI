<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SusunanMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testInputSukses(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://fiturobe.test/login")
                ->assertSee("Selamat Datang")
                ->type("nip", "123456789987654321")
                ->type("password", "coba123")
                ->press("tombolLogin")
                ->pause(2000)
                ->clickLink("Pemetaan")
                ->clickLink("Susunan Mata Kuliah")
                ->pause(2000)
                ->assertSee("Matriks Susunan Mata Kuliah")
                ->pause(2000)
                ->press("Edit")
                ->pause(2000)
                ->type("sks", "6")
                ->type("semester", "1")
                ->select("kategoriMK", "1")
                ->press("Simpan")
                ->pause(2500)
                ->click("button.swal2-confirm") // Click the "Simpan" button in the confirmation dialog
                ->waitFor(".swal2-modal", 5) // Wait for the success dialog to appear
                ->waitForLocation(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/susunan-mata-kuliah"
                )
                ->assertSee("Sukses!")
                ->pause(1000);
        });
    }

    public function testSKSInputValid(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/susunan-mata-kuliah"
                )
                ->assertSee("Matriks Susunan Mata Kuliah")
                ->pause(2000)
                ->press("Edit")
                ->pause(2000)
                ->type("sks", "7") // Enter a value greater than the maximum allowed for SKS
                ->type("semester", "1") // Enter a value greater than the maximum allowed for Semester
                ->select("kategoriMK", "1")
                ->press("Simpan")
                ->pause(2000);
        });
    }

    public function testSemesterInputValid(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/susunan-mata-kuliah"
                )
                ->assertSee("Matriks Susunan Mata Kuliah")
                ->pause(2000)
                ->press("Edit")
                ->pause(2000)
                ->type("sks", "5") // Enter a value greater than the maximum allowed for SKS
                ->type("semester", "7") // Enter a value greater than the maximum allowed for Semester
                ->select("kategoriMK", "1")
                ->press("Simpan")
                ->pause(2000);
        });
    }

    public function testExportPDF(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/susunan-mata-kuliah"
                )
                ->assertSee("Matriks Susunan Mata Kuliah")
                ->pause(2000)
                ->clickLink("Export PDF")
                ->pause(1000);
        });
    }

    public function testExportExcel(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/susunan-mata-kuliah"
                )
                ->assertSee("Matriks Susunan Mata Kuliah")
                ->pause(2000)
                ->clickLink("Export Excel")
                ->pause(1000);
        });
    }
}