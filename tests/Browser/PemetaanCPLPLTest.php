<?php

namespace Tests\Browser;

use DateTime;
use Facebook\WebDriver\WebDriverKeys;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanCPLPLTest extends DuskTestCase
{

    public function testPemetaanCPLPL(): void
    {
        date_default_timezone_set('Asia/Jakarta');

        // Check
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->check('#checkbox_CPL01-PL01')
            ->pause(1000)
            ->scrollIntoView('#submitbutton')
            ->pause(1000)
            ->click('#submitbutton')
            ->pause(1000)
            ->click('.swal2-confirm')
            ->pause(1000)
            ->assertSee('Sukses')
            ->pause(1500);
        });

        // Uncheck
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->uncheck('#checkbox_CPL01-PL01')
            ->pause(1000)
            ->scrollIntoView('#submitbutton')
            ->pause(1000)
            ->click('#submitbutton')
            ->pause(1000)
            ->click('.swal2-confirm')
            ->pause(1000)
            ->assertSee('Sukses')
            ->pause(1500);
        });

        // Check more than one checkbox
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->check('#checkbox_CPL01-PL01')
            ->pause(500)
            ->check('#checkbox_CPL02-PL04')
            ->pause(500)
            ->check('#checkbox_CPL02-PL03')
            ->pause(500)
            ->check('#checkbox_CPL03-PL02')
            ->pause(500)
            ->check('#checkbox_CPL03-PL03')
            ->pause(500)
            ->check('#checkbox_CPL04-PL02')
            ->pause(500)
            ->scrollIntoView('#checkbox_CPL10-PL01')
            ->pause(1000)
            ->check('#checkbox_CPL06-PL01')
            ->pause(500)
            ->check('#checkbox_CPL07-PL01')
            ->pause(1000)
            ->scrollIntoView('#submitbutton')
            ->pause(1000)
            ->click('#submitbutton')
            ->pause(1000)
            ->click('.swal2-confirm')
            ->pause(1000)
            ->assertSee('Sukses')
            ->pause(1500);
        });

        // Uncheck more than one checkbox
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->uncheck('#checkbox_CPL01-PL01')
            ->pause(500)
            ->uncheck('#checkbox_CPL02-PL04')
            ->pause(500)
            ->uncheck('#checkbox_CPL03-PL03')
            ->pause(500)
            ->scrollIntoView('#submitbutton')
            ->pause(1000)
            ->click('#submitbutton')
            ->pause(1000)
            ->click('.swal2-confirm')
            ->pause(1000)
            ->assertSee('Sukses')
            ->pause(1500);
        });

        // Check and Uncheck
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
            ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
            ->pause(1000)
            ->check('#checkbox_CPL01-PL01')
            ->pause(500)
            ->check('#checkbox_CPL02-PL04')
            ->pause(500)
            ->uncheck('#checkbox_CPL04-PL02')
            ->pause(500)
            ->scrollIntoView('#checkbox_CPL10-PL01')
            ->pause(1000)
            ->uncheck('#checkbox_CPL06-PL01')
            ->pause(500)
            ->uncheck('#checkbox_CPL07-PL01')
            ->pause(1000)
            ->scrollIntoView('#submitbutton')
            ->pause(1000)
            ->click('#submitbutton')
            ->pause(1000)
            ->click('.swal2-confirm')
            ->pause(1000)
            ->assertSee('Sukses')
            ->pause(1500);
        });

        // Export PDF
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
                ->pause(500)
                ->click("#exportPDF")
                ->pause(1000)
                ->assertUrlIs(route('kurikulum.pemetaan.export_cpl_pl', ['pdf']))
                ->pause(1000);

            $browser->driver->getKeyboard()->sendKeys(WebDriverKeys::CONTROL, 's');
        });

        // Export Excel
        $this->browse(function (Browser $browser) {
            $browser->visit(route('kurikulum.pemetaan.cpl_pl'))
                ->pause(500)
                ->click("#exportExcel")
                ->pause(1000);
        });

        sleep(5);

        // mencari timestamp file terbaru pada direktori unduhan default pada sistem operasi Windows
        $path = implode(DIRECTORY_SEPARATOR, [env('USERPROFILE'), 'Downloads', 'Pemetaan CPL dan PL_*.xlsx']);
        $files = glob($path);
        $latestTime = null;
        foreach ($files as $file) {
            $time = filemtime($file);
            if ($latestTime === null || $time > $latestTime) {
                $latestTime = $time;
            }
        }

        // memeriksa apakah file terbaru memiliki timestamp kurang dari 5 menit
        $now = new DateTime();
        $latestDateTime = (new DateTime())->setTimestamp($latestTime);
        $diff = $now->getTimestamp() - $latestDateTime->getTimestamp();
        $this->assertLessThanOrEqual(300, $diff);
    }
}
