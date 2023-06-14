<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RPSTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps')->assertSee('Cari RPS')
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->type('tahunAjaran', '2024')
            ->pause(500)
            ->press('submit')
            ->pause(500)
            ->click('a[id="buatRPS"]')
            ->pause(500)
            ->click('select[name="kodeMK"]')
            ->click('option[value="MK01"]')
            ->click('select[name="kps"]')
            ->click('option[value="123456789987654321"]')
            ->type('tahunAjaran', '2024')
            ->type('pustaka', 'Pustaka MK01 2024')
            ->press('submit')
            ->pause(500);
        });
    }
    public function testCreateMingguRPS(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian/MK0112024')->assertSee('Teknik Penilaian')
            ->pause(500)
            ->click('a[id="rencanaPembelajaran"]');
        });
    }
}
