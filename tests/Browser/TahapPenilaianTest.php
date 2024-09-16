<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TahapPenilaianTest extends DuskTestCase
{
    /**
     * Login
     */
    public function login($browser)
    {
        $browser
            ->pause(500)
            ->type("nip", "198110282006041003")
            ->pause(500)
            ->type("password", "coba123")
            ->pause(500)
            ->click('button[name="tombolLogin"]')
            ->pause(500)
            ->visit("http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian")
            ->pause(1000);
    }

    /**
     * User dapat mengakses halaman mekanisme dan tahap penilaian
     * serta dapat memilih informasi yang ditampilkan berdasarkan tahun ajaran
     */
    public function testAccess(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(
                "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
            );

            /**
             *  Jika url tidak mengarah yang dituju
             * (error pada assertUrlIs('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian'))
             *  dan mengarah pada url login (assertUrlIs('http://127.0.0.1:8000/login'))
             * maka akan memanggil function login untuk melakukan login
             * */
            try {
                $browser->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
                );
                $browser->pause(1000);
            } catch (\Exception $e) {
                $browser->assertUrlIs("http://127.0.0.1:8000/login");
                $this->login($browser);
            }

            $browser
                ->assertSee("Mekanisme dan Tahap Penilaian")
                ->pause(500)
                ->select("#tahunAjaran")
                ->pause(800)
                ->assertSee("Kode CPL")
                ->assertSee("Kode CPMK")
                ->assertSee("Kode MK")
                ->assertSee("Tahap Penilaian")
                ->assertSee("Teknik Penilaian")
                ->assertSee("Instrumen")
                ->assertSee("Kriteria")
                ->assertSee("Bobot")
                ->pause(1000);
        });
    }

    /**
     * User tidak dapat melakukan export ke pdf maupun excel apabila tidak memilih
     * tahun ajaran
     */
    public function testTidakDapatExport()
    {
        // Tidak bisa export PDF
        $this->browse(function (Browser $browser) {
            $browser->visit(
                "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
            );

            /**
             *  Jika url tidak mengarah yang dituju
             * (error pada assertUrlIs('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian'))
             *  dan mengarah pada url login (assertUrlIs('http://127.0.0.1:8000/login'))
             * maka akan memanggil function login untuk melakukan login
             * */
            try {
                $browser->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
                );
                $browser->pause(1000);
            } catch (\Exception $e) {
                $browser->assertUrlIs("http://127.0.0.1:8000/login");
                $this->login($browser);
            }

            $browser
                ->click("#exportPDF")
                ->waitFor(".swal2-popup", 10)
                ->assertSee("Oops")
                ->pause(2000);
        });

        // Tidak bisa export excel
        $this->browse(function (Browser $browser) {
            $browser->visit(
                "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
            );

            /**
             *  Jika url tidak mengarah yang dituju
             * (error pada assertUrlIs('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian'))
             *  dan mengarah pada url login (assertUrlIs('http://127.0.0.1:8000/login'))
             * maka akan memanggil function login untuk melakukan login
             * */
            try {
                $browser->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
                );
                $browser->pause(1000);
            } catch (\Exception $e) {
                $browser->assertUrlIs("http://127.0.0.1:8000/login");
                $this->login($browser);
            }

            $browser
                ->click("#exportExcel")
                ->waitFor(".swal2-popup", 10)
                ->assertSee("Oops")
                ->pause(2000);
        });
    }

    /**
     * User dapat melakukan export ke pdf dan excel setelah memilih tahun ajaran
     */
    public function testExportPdfAndExcel()
    {
        // Export PDF
        $this->browse(function (Browser $browser) {
            $browser->visit(
                "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
            );

            /**
             *  Jika url tidak mengarah yang dituju
             * (error pada assertUrlIs('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian'))
             *  dan mengarah pada url login (assertUrlIs('http://127.0.0.1:8000/login'))
             * maka akan memanggil function login untuk melakukan login
             * */
            try {
                $browser->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
                );
                $browser->pause(1000);
            } catch (\Exception $e) {
                $browser->assertUrlIs("http://127.0.0.1:8000/login");
                $this->login($browser);
            }

            $browser
                ->select("#tahunAjaran")
                ->pause(800)
                ->click("#exportPDF")
                // ->pause(500)
                ->assertDontSee("Oops")
                ->pause(3000);
        });

        // Export Excel
        $this->browse(function (Browser $browser) {
            $browser->visit(
                "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
            );

            /**
             *  Jika url tidak mengarah yang dituju
             * (error pada assertUrlIs('http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian'))
             *  dan mengarah pada url login (assertUrlIs('http://127.0.0.1:8000/login'))
             * maka akan memanggil function login untuk melakukan login
             * */
            try {
                $browser->assertUrlIs(
                    "http://127.0.0.1:8000/dashboard/penilaian/tahap-penilaian"
                );
                $browser->pause(1000);
            } catch (\Exception $e) {
                $browser->assertUrlIs("http://127.0.0.1:8000/login");
                $this->login($browser);
            }

            $browser
                ->select("#tahunAjaran")
                ->pause(800)
                ->click("#exportExcel")
                // ->pause(500)
                ->assertDontSee("Oops")
                ->pause(3000);
        });
    }
}
