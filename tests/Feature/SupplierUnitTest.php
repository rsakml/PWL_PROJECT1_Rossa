<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupplierUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->call('PUT', '/supplier',[
            'gambar' => 'a.jpg',
            'nama' => 'iFurn Holic',
            'kategori' => 'Perabotan yang dijual toko furniture lokal ini bergaya minimalis modern',
            'email' => 'ifurnholic@gmail.com',
        ]);

        // dd($response);


        $this->assertTrue(true);
    }
}
