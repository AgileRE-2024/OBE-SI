<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverBy;


class PeranDosenTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testView(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser->visit('http://127.0.0.1:8000/login')
                        // ->pause(60 * 60000);
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', '32532425252');
            $browser->type('input[name="password"]', 'coba123');

            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();     
            $browser->pause(1*6000);       
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/peran_dosen/MK0112023')
                        // ->pause(60 * 60000);
                        ->assertSee('Detail Peran Dosen');
        });
    }
    public function testAdd(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser->visit('http://127.0.0.1:8000/login')
                        // ->pause(60 * 60000);
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', '32532425252');
            $browser->type('input[name="password"]', 'coba123');

            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();     
            $browser->pause(1*6000);     

            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/add_peran_dosen/MK0112023')
                        // ->pause(60 * 60000);
                        ->assertSee('Tambah Peran Dosen');

            $browser->select('select[name="nip"]', '123456789987654323');
            $browser->select('select[name="peranDosen"]', 'Dosen Pengampu');
            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="submit"]'))->click();
            // $browser->click('button', 'Confirm');
            // $browser->pause(60 * 60000);
        });
    }

    public function testEdit(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser->visit('http://127.0.0.1:8000/login')
                        // ->pause(60 * 60000);
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', '32532425252');
            $browser->type('input[name="password"]', 'coba123');

            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();                 
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/peran_dosen/MK0112023')
                        // ->pause(60 * 60000);
                        ->assertSee('Detail Peran Dosen');

            // $browser->click('a', 'Edit');
            $browser->pause(10000);
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/edit_peran_dosen/123456789987654323/MK0112023/Dosen%20Pengampu')
            // ->pause(60 * 60000);
            ->assertSee('Edit Peran Dosen');
            // $browser->click('a', 'Edit');
            // $browser->select('select[name="peranDosen"]', 'Dosen Pengampu');
            $browser->select('select[name="nip"]', '32525252523');
            $browser->select('select[name="peranDosen"]', 'Koordinator BK');
            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="submit"]'))->click();

            // $browser->pause(60 * 60000);
        });
    }

    public function testDelete(): void
    {
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser->visit('http://127.0.0.1:8000/login')
                        // ->pause(60 * 60000);
                        ->assertSee('Silakan memasukkan NIP dan kata sandi');
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', '32532425252');
            $browser->type('input[name="password"]', 'coba123');

            $browser->driver->findElement(WebDriverBy::cssSelector('button[name="tombolLogin"]'))->click();                 
            $browser->visit('http://127.0.0.1:8000/dashboard/rps/edit/peran_dosen/MK0112023')
                        // ->pause(60 * 60000);
                        ->assertSee('Detail Peran Dosen');

            // $browser->click('a', 'Edit');
            $browser->pause(1000);
            $browser->driver->findElement(WebDriverBy::cssSelector('a[name="delete"]'))->click();
            $browser->pause(1000);
            // $browser->click('a', 'Edit');
            // $browser->select('select[name="peranDosen"]', 'Dosen Pengampu');
            // $browser->select('select[name="nip"]', '32525252523');
            // $browser->select('select[name="peranDosen"]', 'Koordinator BK');
            // $browser->driver->findElement(WebDriverBy::cssSelector('button[name="submit"]'))->click();

            // $browser->pause(60 * 60000);
        });
    }
}
