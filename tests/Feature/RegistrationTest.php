<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $this->post('/store',[
//            'name'=>'Audi'
//        ]);
        $this->assertDatabaseHas('tests',['name'=>'AudiQ7']);
    }
}
