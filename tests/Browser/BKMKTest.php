<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverWait;

class BKMKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testChecked()
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
            $browser->type('input[name="nip"]', "123456789987654321");
            $browser->type('input[name="password"]', "coba123");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();

            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk"
                )
                // ->pause(60 * 60000);
                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('input[id="checkbox_MK01-BK01"]')
                )
                ->click();

            $browser->driver->executeScript(
                "document.querySelector('#submitbutton').click()"
            );
            $browser->pause(1 * 600)->click(".swal2-confirm");
            // $browser->driver->findElement(WebDriverBy::cssSelector('button[fdprocessedid="3jsrjw"]'))->click();
            // $browser->press('Simpan');
            // $browser->driver->executeScript("document.querySelector('.swal2-confirm.swal2-styled').click()");
            // $browser->pause(1*600);

            // $browser->pause(1*600000);
        });
    }

    public function testUnChecked()
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
            $browser->type('input[name="nip"]', "123456789987654321");
            $browser->type('input[name="password"]', "coba123");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();

            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk"
                )
                // ->pause(60 * 60000);
                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('input[id="checkbox_MK01-BK01"]')
                )
                ->click();

            $browser->driver->executeScript(
                "document.querySelector('#submitbutton').click()"
            );
            $browser->pause(1 * 600)->click(".swal2-confirm");
            // $browser->driver->findElement(WebDriverBy::cssSelector('button[fdprocessedid="3jsrjw"]'))->click();
            // $browser->press('Simpan');
            // $browser->driver->executeScript("document.querySelector('.swal2-confirm.swal2-styled').click()");
            // $browser->pause(1*600);

            // $browser->pause(1*600000);
        });
    }

    public function testCancel()
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
            $browser->type('input[name="nip"]', "123456789987654321");
            $browser->type('input[name="password"]', "coba123");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();

            $browser->pause(1 * 6000);
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk"
                )
                // ->pause(60 * 60000);
                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk"
                )
                // ->pause(60 * 60000);
                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('input[id="checkbox_MK01-BK01"]')
                )
                ->click();

            $browser->driver->executeScript(
                "document.querySelector('#submitbutton').click()"
            );
            $browser->pause(1 * 600)->click(".swal2-cancel");
            // $browser->driver->findElement(WebDriverBy::cssSelector('button[fdprocessedid="3jsrjw"]'))->click();
            // $browser->press('Simpan');
            // $browser->driver->executeScript("document.querySelector('.swal2-confirm.swal2-styled').click()");
            // $browser->pause(1*600);

            // $browser->pause(1*600000);
        });
    }

    public function testExcel()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "123456789987654321");
            $browser->type('input[name="password"]', "coba123");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();

            $browser->pause(1 * 6000);

            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk/"
                )

                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            // Click
            $browser->driver
                ->findElement(WebDriverBy::cssSelector('a[id="excel"]'))
                ->click();
            $browser->pause(1 * 600);
        });
    }

    public function testPDF()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit("http://127.0.0.1:8000/login")
                // ->pause(60 * 60000);
                ->assertSee("Silakan memasukkan NIP dan kata sandi");
            // Click the login button
            // $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_AGH101-BK01"]'))->click();
            $browser->type('input[name="nip"]', "123456789987654321");
            $browser->type('input[name="password"]', "coba123");
            $browser->driver
                ->findElement(
                    WebDriverBy::cssSelector('button[name="tombolLogin"]')
                )
                ->click();

            $browser->pause(1 * 6000);

            $browser
                ->visit(
                    "http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/bk-mk/"
                )

                ->assertSee("Matriks Bahan Kajian (BK) & Mata Kuliah (MK)");
            // Click
            $browser->driver
                ->findElement(WebDriverBy::cssSelector('a[id="pdf"]'))
                ->click();
            $browser->pause(1 * 600);
        });
    }
}
