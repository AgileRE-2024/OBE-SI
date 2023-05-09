<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BahanKajianTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test adding a new Bahan Kajian successfully
     *
     * @return void
     */
    public function testAddBahanKajianSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('kodeBK', 'BK05')
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->press("#submit")
                    ->pause(2000)
                    ->assertSee('BK05');
        });

    }
    public function testAddBahanKajianErrorIDSama()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('kodeBK', 'BK05')
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->press("#submit")
                    ->pause(2000)
                    ->assertSee('BK05');
        });

    }
    public function testAddBahanKajianError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->pause(1000);
        });
    }

    public function testDeleteBahanKajianSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('kodeBK', 'BK04')
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->assertSee("Bahan Kajian")
                    ->clickLink('Delete')
                    ->pause(1000)
                    ->assertSee('Bahan Kajian');
        });
    }

    public function testEditBahanKajianSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->assertSee("Bahan Kajian")
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('kodeBK', 'BK04')
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->assertSee("Bahan Kajian")
                    ->clickLink('Edit')
                    ->assertSee('Edit Bahan Kajian')
                    ->type('kodeBK', 'BK06')
                    ->type('namaBK', 'tesBK anjay')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->assertSee('Bahan Kajian');
        });
    }

    public function testEditBahanKajianError()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dashboard/kurikulum/data/bahan_kajian')
                    ->assertSee("Bahan Kajian")
                    ->clickLink('Tambah')
                    ->assertSee("Tambah Bahan Kajian")
                    ->type('kodeBK', 'BK04')
                    ->type('namaBK', 'tesBKLagi')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->assertSee("Bahan Kajian")
                    ->clickLink('Edit')
                    ->assertSee('Edit Bahan Kajian')
                    ->type('kodeBK', '')
                    ->type('namaBK', 'tesBK anjay')
                    ->select('kategoriBK')
                    ->type('referensiBK',"tes")
                    ->pause(2000)
                    ->press("#submit")
                    ->pause(1000);
        });
    }
}