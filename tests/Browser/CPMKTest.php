<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddCpmk(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")

                // Add a new CPL
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/addCPMK"
                )
                ->select("kodeCPL", "LO-01")
                ->type("kodeCPMK", "CPMK0000")
                ->select("levelCPMK", 1)
                ->type("deskripsiCPMK", "ingat")
                ->press("Tambah CPMK")
                ->assertSee("CPMK0000");
        });
    }

    public function testEditCpmk(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")

                // Edit a CPMK
                ->visit("http://localhost:8000/dashboard/kurikulum/data/cpmk")
                ->click("table tr:nth-child(1) .btn-primary")
                ->type("deskripsiCPMK", "mengingat") // Change the verb from "ingat" to "mengingat"
                ->press("Edit")
                ->assertSee("mengingat");
        });
    }

    public function testLoCheckerCpmk(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")

                // Edit a CPMK
                ->visit("http://localhost:8000/dashboard/kurikulum/data/cpmk")
                ->click("table tr:nth-child(1) .btn-primary")
                ->type("deskripsiCPMK", "aaaa") // Change the verb from "ingat" to a non-LO verb
                ->assertSee(
                    "Deskripsi harus mengandung setidaknya satu kata kerja yang sesuai dengan level yang dipilih."
                );
        });
    }

    public function testDeleteCpmk(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")

                // Delete a CPMK
                ->visit("http://localhost:8000/dashboard/kurikulum/data/cpmk")
                ->click("table tr:nth-child(1) .btn-danger")
                ->assertDontSee("CPMK0000");
        });
    }
}
