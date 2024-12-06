<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CPLTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testAddCpl(): void
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
                    "http://localhost:8000/dashboard/kurikulum/data/addCPLProdi"
                )
                ->type("kodeCPL", "LO-00")
                ->select("levelCPL", 1)
                ->type("deskripsiCPL", "ingat")
                ->type("referensiCPL", "-")
                ->press("Tambah CPL")
                ->assertSee("LO-00");
        });
    }

    public function testEditCpl(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/cpl_prodi"
                )
                // Target the edit button in row 1
                ->click("table tr:nth-child(1) .btn-primary")
                ->type("deskripsiCPL", "mengingat") // Change the verb from "ingat" to "mengingat"
                ->press("Edit")
                ->assertSee("mengingat");
        });
    }

    public function testLoCheckerCpl(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/cpl_prodi"
                )
                // Target the edit button in row 1
                ->click("table tr:nth-child(1) .btn-primary")
                ->type("deskripsiCPL", "aaaa") // Change the verb from "ingat" to a non-LO verb
                ->assertSee(
                    "Deskripsi harus mengandung setidaknya satu kata kerja yang sesuai dengan level yang dipilih."
                );
        });
    }

    public function testDeleteCpl(): void
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/cpl_prodi"
                )
                // Target the delete button in row 1
                ->click("table tr:nth-child(1) .btn-danger")
                ->assertDontSee("LO-00");
        });
    }
}
