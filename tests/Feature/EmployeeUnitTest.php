<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->call('PUT', '/employee',[
            'gambar' => 'dino.jpg',
            'nama' => 'Dino',
            'jenisKelamin' => 1,
            'jabatan' => 'Manajer',
            'nohp' => '0853736544',
        ]);

        // dd($response);


        $this->assertTrue(true);
    }
}
