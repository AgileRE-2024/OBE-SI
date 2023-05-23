<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\WebDriverWait;

class CPLBKTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('Laravel');
        // });
        $this->browse(function (Browser $browser) {
            // File::ensureDirectoryExists(base_path('tests/Browser/console'));
            // Visit the login page
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-bk/')
                        // ->pause(60 * 60000);
                        ->assertSee('Matriks Capaian Pembelajaran Lulusan (CPL) & Bahan Kajian (BK)');
            // Click the login button
            $browser->driver->findElement(WebDriverBy::cssSelector('input[id="checkbox_BK01-CPL01"]'))->click();
            // $browser->pause(1*6000);
            // $browser->driver->findElement(WebDriverBy::cssSelector('button[id="buttonsimpan"]'))->click();
            
            $browser->driver->executeScript("document.querySelector('#submitbutton').click()");
            $browser->pause(1*600);
            $browser->driver->executeScript("document.querySelector('.swal2-confirm.swal2-styled').click()");
            $browser->pause(1*600);

            
            // $browser->pause(1*600000);
        });
        
    }
}
