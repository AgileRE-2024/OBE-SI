<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class OrganisasiMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testReadData(): void
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
                ->clickLink("Organisasi Mata Kuliah")
                ->pause(2000)
                ->assertSee("Matriks Organisasi Mata Kuliah")
                ->pause(1000);
        });
    }

    public function testExportPDF(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit(
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah"
                )
                ->assertSee("Matriks Organisasi Mata Kuliah")
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
                    "http://fiturobe.test/dashboard/kurikulum/pemetaan/organisasi-mata-kuliah"
                )
                ->assertSee("Matriks Organisasi Mata Kuliah")
                ->pause(2000)
                ->clickLink("Export Excel")
                ->pause(1000);
        });
    }
}
