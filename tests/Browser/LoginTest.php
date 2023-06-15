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
                    ->type('nip','082011633044')
                    ->type('password','pwadminasli')
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
                    ->type('email','emailadminn@gmail.com')
                    ->press('Request Password Reset')
                    ->pause(2000);
                    
        });
    }
    public function testChangePWFailed(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->assertSee('Selamat Datang')
                    ->type('nip','082011633044')
                    ->type('password','pwadminasli')
                    ->press('tombolLogin')
                    ->assertSee('Selamat')
                    ->clickLink('Ubah Kata Sandi')
                    ->assertSee('Ubah Kata Sandi Pengguna')
                    ->type('old_password','pwadminsalah')
                    ->type('new_password','pwadminbaru')
                    ->type('new_password_confirmation','pwadminbaru')
                    ->press('Ubah Kata Sandi')
                    ->pause(2000)
                    ->type('old_password','pwadminasli')
                    ->type('new_password','pwadminbaru')
                    ->type('new_password_confirmation','pwadminbener')
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
                    ->type('nip','082011633044')
                    ->type('password','pwadminasli')
                    ->press('tombolLogin')
                    ->assertSee('Selamat')
                    ->clickLink('Ubah Kata Sandi')
                    ->assertSee('Ubah Kata Sandi Pengguna')
                    ->type('old_password','pwadminasli')
                    ->type('new_password','pwadminbaru')
                    ->type('new_password_confirmation','pwadminbaru')
                    ->press('Ubah Kata Sandi')
                    ->pause(2000)
                    ->press('Keluar')
                    ->assertSee('Selamat Datang')
                    ->type('nip','082011633044')
                    ->type('password','pwadminasli')
                    ->press('tombolLogin')
                    ->pause(2000)
                    ->assertSee('Selamat Datang')
                    ->type('nip','082011633044')
                    ->type('password','pwadminbaru')
                    ->press('Masuk')
                    ->assertSee('Selamat')
                    ->pause(2000)
                    ->press('Keluar');
        });
    }
}
