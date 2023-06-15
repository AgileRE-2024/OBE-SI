<?php

namespace Tests\Browser;

// use DateTime;
// use Facebook\WebDriver\WebDriverKeys;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanCPLPLTest extends DuskTestCase
{
    /**
     * login
     */
    public function login($browser)
    {
        $browser->pause(500)
            ->type('nip', '123456789987654321')
            ->pause(500)
            ->type('password', 'coba123')
            ->pause(500)
            ->click('button[name="tombolLogin"]')
            ->pause(1000);
    }

    /**
     * Check one checkbox
     */
    public function testOneCheck(): void
    {
        $this->browse(function (Browser $browser) {
            // Login
            $browser->visit('http://127.0.0.1:8000/login');
            $this->login($browser);

            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
                ->pause(1000)
                ->check('#checkbox_CPL-01-PL01')
                ->pause(1000)
                ->scrollIntoView('#submitbutton')
                ->pause(1000)
                ->click('#submitbutton')
                ->waitFor('.swal2-popup')
                ->pause(500)
                ->click('.swal2-confirm')
                ->pause(1000)
                ->assertSee('Sukses')
                ->pause(1500);
        });
    }

    /**
     * Uncheck one checkbox
     */
    public function testUnCheck(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
                ->pause(1000)
                ->uncheck('#checkbox_CPL-01-PL01')
                ->pause(1000)
                ->scrollIntoView('#submitbutton')
                ->pause(1000)
                ->click('#submitbutton')
                ->waitFor('.swal2-popup')
                ->pause(500)
                ->click('.swal2-confirm')
                ->pause(1000)
                ->assertSee('Sukses')
                ->pause(1500);
        });
    }

    /**
     * Check more than one checkbox
     */
    public function testCheckMoreThanOne(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
                ->pause(1000)
                ->check('#checkbox_CPL-01-PL01')
                ->pause(500)
                ->check('#checkbox_CPL-02-PL04')
                ->pause(500)
                ->check('#checkbox_CPL-02-PL03')
                ->pause(500)
                ->check('#checkbox_CPL-03-PL02')
                ->pause(500)
                ->check('#checkbox_CPL-03-PL03')
                ->pause(500)
                ->check('#checkbox_CPL-04-PL02')
                ->pause(500)
                ->scrollIntoView('#checkbox_CPL-10-PL01')
                ->pause(1000)
                ->check('#checkbox_CPL-06-PL01')
                ->pause(500)
                ->check('#checkbox_CPL-07-PL01')
                ->pause(1000)
                ->scrollIntoView('#submitbutton')
                ->pause(1000)
                ->click('#submitbutton')
                ->waitFor('.swal2-popup')
                ->pause(500)
                ->click('.swal2-confirm')
                ->pause(1000)
                ->assertSee('Sukses')
                ->pause(1500);
        });
    }

    /**
     * Uncheck more than one checkbox
     */
    public function testUnCheckMoreThanOne(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
                ->pause(1000)
                ->uncheck('#checkbox_CPL-01-PL01')
                ->pause(500)
                ->uncheck('#checkbox_CPL-02-PL04')
                ->pause(500)
                ->uncheck('#checkbox_CPL-03-PL03')
                ->pause(500)
                ->scrollIntoView('#submitbutton')
                ->pause(1000)
                ->click('#submitbutton')
                ->waitFor('.swal2-popup')
                ->pause(500)
                ->click('.swal2-confirm')
                ->pause(1000)
                ->assertSee('Sukses')
                ->pause(1500);
        });
    }

    /**
     * Check and Uncheck check box at the same time
     */
    public function testCheckAndUncheck(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Profil Lulusan (PL)')
                ->pause(1000)
                ->check('#checkbox_CPL-01-PL01')
                ->pause(500)
                ->check('#checkbox_CPL-02-PL04')
                ->pause(500)
                ->uncheck('#checkbox_CPL-04-PL02')
                ->pause(500)
                ->scrollIntoView('#checkbox_CPL-10-PL01')
                ->pause(1000)
                ->uncheck('#checkbox_CPL-06-PL01')
                ->pause(500)
                ->uncheck('#checkbox_CPL-07-PL01')
                ->pause(1000)
                ->scrollIntoView('#submitbutton')
                ->pause(1000)
                ->click('#submitbutton')
                ->waitFor('.swal2-popup')
                ->pause(500)
                ->click('.swal2-confirm')
                ->pause(1000)
                ->assertSee('Sukses')
                ->pause(1500);
        });
    }

    /**
     * Export to PDF
     */
    public function testExportToPDF(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->pause(500)
                ->click("#exportPDF")
                ->pause(1000)
                ->assertUrlIs('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl/export/pdf')
                ->pause(1000);

            // $browser->driver->getKeyboard()->sendKeys(WebDriverKeys::CONTROL, 's');
        });
    }

    public function testExportToExcel(): void
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-pl')
                ->pause(500)
                ->click("#exportExcel")
                ->pause(1000);
        });

        // sleep(5);

        // // mencari timestamp file terbaru pada direktori unduhan default pada sistem operasi Windows
        // $path = implode(DIRECTORY_SEPARATOR, [env('USERPROFILE'), 'Downloads', 'Pemetaan CPL dan PL_*.xlsx']);
        // $files = glob($path);
        // $latestTime = null;
        // foreach ($files as $file) {
        //     $time = filemtime($file);
        //     if ($latestTime === null || $time > $latestTime) {
        //         $latestTime = $time;
        //     }
        // }

        // // memeriksa apakah file terbaru memiliki timestamp kurang dari 5 menit
        // $now = new DateTime();
        // $latestDateTime = (new DateTime())->setTimestamp($latestTime);
        // $diff = $now->getTimestamp() - $latestDateTime->getTimestamp();
        // $this->assertLessThanOrEqual(300, $diff);
    }
}
