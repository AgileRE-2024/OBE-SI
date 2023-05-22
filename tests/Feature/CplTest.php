<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CplTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        //Given: User has already in site profil
        $response->assertRedirect('/profil');

        //When: user want to add profil
        $response = $this->post('/profil/add',[
            'Kode' => 'P2',
            'Profil' => 'teknologi informasi',
            'Deskripsi_Profil' => 'deskripsi teknologi informasi',
        ]);

        //Then: user can add data and redirect to profil index and sees success message
        $response->assertRedirect('/profil');
        $response->assertSessionHas('Data profil berhasil disimpan');
    }
}
