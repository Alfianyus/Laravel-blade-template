<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user"=>[
                "premium"=>true,
                "name"=>"Yuska",
                "admin"=>true
        ]])
            ->assertSee("checked")
            ->assertSee("Yuska")
            ->assertDontSee("readonly");

        $this->view("form", ["user"=>[
            "premium"=>false,
            "name"=>"Yuska",
            "admin"=>false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Yuska")
            ->assertSee("readonly");    
    }
}
