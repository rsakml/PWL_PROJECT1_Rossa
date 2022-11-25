<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteUnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
         // $this->assertTrue(true);
         $this->get("/product")->assertStatus(500);
         $this->get("/supplier")->assertStatus(500);
         $this->get("/employee")->assertStatus(500);
         $this->get("/customer")->assertStatus(500);
    }
}
