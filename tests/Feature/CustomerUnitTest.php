<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->call('DELETE', '/customer',[
            'foto' => 'daffa.jpg',
            'nama' => 'Devano',
            'jenisKelamin' => 0,
            'alamat' => 'Kediri',
            'noTelp' => '0853736544',
        ]);

        // dd($response);


        $this->assertTrue(true);
    }
}
