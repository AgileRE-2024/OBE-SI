<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testLoginFailed(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','082011633045')
                    ->type('password','pwadminpalsu')
                    ->press('tombolLogin')
                    ->pause(2000);
        });
    }
    public function testLoginLogoutSuccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','32525252523')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->assertSee('Selamat')
                    ->pause(2000)
                    ->press('Keluar')
                    ->pause(2000);
        });
    }
    public function testResetPWFailed(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->clickLink('Klik disini')
                    ->assertSee('Reset')
                    ->type('email','userngawur@gmail.com')
                    ->press('Request Password Reset')
                    ->pause(2000);
                    
        });
    }
    public function testResetPWSuccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->clickLink('Klik disini')
                    ->assertSee('Reset')
                    ->type('email','admin@gmail.com')
                    ->press('Request Password Reset')
                    ->pause(2000);
                    
        });
    }
    public function testChangePWFailed(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','32525252523')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->assertSee('Selamat')
                    ->clickLink('Ubah Kata Sandi')
                    ->assertSee('Ubah Kata Sandi Pengguna')
                    ->type('old_password','contohpwlamasalah')
                    ->type('new_password','coba12345')
                    ->type('new_password_confirmation','coba12345')
                    ->press('Ubah Kata Sandi')
                    ->pause(2000)
                    ->type('old_password','coba123')
                    ->type('new_password','contohpwbarusalah1')
                    ->type('new_password_confirmation','contohpwbarusalah2')
                    ->press('Ubah Kata Sandi')
                    ->pause(2000)
                    ->press('Keluar');
        });
    }
    public function testChangePWSuccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','32525252523')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->assertSee('Selamat')
                    ->clickLink('Ubah Kata Sandi')
                    ->assertSee('Ubah Kata Sandi Pengguna')
                    ->type('old_password','coba123')
                    ->type('new_password','coba12345')
                    ->type('new_password_confirmation','coba12345')
                    ->press('Ubah Kata Sandi')
                    ->pause(2000)
                    ->press('Keluar')
                    ->assertSee('Selamat Datang')
                    ->type('nip','32525252523')
                    ->type('password','coba123')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->assertSee('Selamat Datang')
                    ->type('nip','32525252523')
                    ->type('password','coba12345')
                    ->press('Masuk')
                    ->assertSee('Selamat')
                    ->pause(2000)
                    ->press('Keluar');
        });
    }
}
