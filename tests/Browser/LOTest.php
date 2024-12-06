<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Verbs;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LOTest extends DuskTestCase
{
    public function testAddVerb()
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/learning_outcome/add"
                )

                // Add a new verb
                ->select("level_lo", 1)
                ->type("kata_kerja", "menghitung")
                ->press("Tambah")
                ->assertSee("menghitung");
        });
    }

    public function testEditVerb()
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/learning_outcome"
                )
                // Target the edit button in row 8
                ->click("table tr:nth-child(8) .btn-primary")
                ->type("kata_kerja", "membaca") // Change the verb from "menghitung" to "membaca"
                ->press("Edit")
                ->assertSee("membaca");
        });
    }

    public function testDeleteVerb()
    {
        $this->browse(function (Browser $browser) {
            $browser
                // Login
                ->visit("http://localhost:8000")
                ->type("nip", "196901091993031000")
                ->type("password", "coba1234")
                ->press("tombolLogin")
                ->visit(
                    "http://localhost:8000/dashboard/kurikulum/data/learning_outcome"
                )
                // Target the delete button in row 8
                ->click("table tr:nth-child(8) .btn-danger")
                ->assertDontSee("membaca");
        });
    }
}
