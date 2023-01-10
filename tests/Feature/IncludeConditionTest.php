<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition",[
            "user"=>[
                "name"=>"Yuska",
                "owner"=> true
            ]
        ])
                ->assertSeeText("Selamat datang owner")
                ->assertSeeText("Selamat datang Yuska");

        $this->view("include-condition",[
            "user"=>[
                "name"=>"Yuska",
                "owner"=>false
            ]
        ])
                ->assertDontSeeText("Selamat datang owner")
                ->assertSeeText("Selamat datang Yuska");
    }
    
}
