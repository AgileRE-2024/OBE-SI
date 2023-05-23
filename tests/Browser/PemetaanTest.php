<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Facebook\WebDriver\WebDriverBy;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PemetaanTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
     public function Pemetaantest(): void
    
         {$this->browse(function (Browser $browser){
             $browser->visit('http://127.0.0.1:8000/dashboard/home')->assertSee('Kurikulum');
             $browser->driver->findElement(WebDriverBy::cssSelector('li[id="kurikulum"]'))->click();
             $browser->pause(1*6000);
             $browser->driver->findElement(WebDriverBy::cssSelector('li[id="pemetaan"]'))->click();
             $browser->pause(1*6000);
             $browser->driver->findElement(WebDriverBy::cssSelector('li[id= "cplbkmk"]'))->click();
             $browser->assertUrlIs('http://127.0.0.1:8000/dashboard/kurikulum/pemetaan/cpl-bk-mk');
             $browser->pause(1*6000);
         });
    }
    
}
