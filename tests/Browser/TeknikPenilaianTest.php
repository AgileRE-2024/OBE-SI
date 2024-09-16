<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverBy;

class TeknikPenilaianTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testView(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "32532425252");
            $browser->type('input[name="password"]', "coba123");

            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();
            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian/MK0112023"
                )
                // ->pause(60 * 60000);
                ->assertSee("Teknik Penilaian");
        });
    }

    public function testAdd(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "32532425252");
            $browser->type('input[name="password"]', "coba123");

            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();
            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian/MK0112023"
                )
                // ->pause(60 * 60000);
                ->assertSee("Teknik Penilaian");
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/addTeknikPenilaian/MK0112023"
                )
                ->assertSee("Tambah Teknik Penilaian");
            $browser->type('input[name="teknikPenilaian"]', "0004");
            $browser->type('input[name="bobotPenilaian"]', 30);
            $browser->type(
                'input[name="kriteriaPenilaian"]',
                "Isi kriteria penilaian"
            );
            $browser->select('select[name="tahapPenilaian"]', "Akhir Semester");
            $browser->type(
                'input[name="instrumenPenilaian"]',
                "Rubrik holistik"
            );
            $browser->driver
                ->findElement(WebDriverBy::cssSelector('button[name="submit"]'))
                ->click();
        });
    }

    public function testEdit(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "32532425252");
            $browser->type('input[name="password"]', "coba123");

            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();
            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian/MK0112023"
                )
                // ->pause(60 * 60000);
                ->assertSee("Teknik Penilaian");
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/editTeknikPenilaian/3"
                )
                ->assertSee("Edit Teknik Penilaian");
            $browser->type('input[name="teknikPenilaian"]', "0005");
            $browser->type('input[name="bobotPenilaian"]', 40);
            $browser->type(
                'input[name="kriteriaPenilaian"]',
                "Isi kriteria penilaian lain"
            );
            $browser->select(
                'select[name="tahapPenilaian"]',
                "Tengah Semester"
            );
            $browser->type(
                'input[name="instrumenPenilaian"]',
                "Rubrik holistik"
            );
            $browser->driver
                ->findElement(WebDriverBy::cssSelector('button[name="submit"]'))
                ->click();
        });
    }

    public function testDelete(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "32532425252");
            $browser->type('input[name="password"]', "coba123");

            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();
            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/rps/edit/teknik_penilaian/MK0112023"
                )
                // ->pause(60 * 60000);
                ->assertSee("Teknik Penilaian");
            $browser->clickLink("Delete");
        });
    }
}
