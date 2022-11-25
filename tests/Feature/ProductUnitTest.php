<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example2()
    {
        $response = $this->call('POST', '/product',[
            'foto' => 'arrivals1.png.jpg',
            'nama_product' => 'Wooden Chair',
            'merk' => 'iFurn Holic',
            'harga_beli' => 600000,
            'harga_jual' => 850000,
            'stok' => 2,
        ]);

        // dd($response);


        $this->assertTrue(true);
      
    }
}
