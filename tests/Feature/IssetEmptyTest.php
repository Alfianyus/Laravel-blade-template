<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("isset-empty", [])
        ->assertDontSeeText("Hello")
        ->assertSeeText("I don't have any hobbies", false);

        $this->view("isset-empty", ["name" => "Yuska"])
            ->assertSeeText("Hello, my name is Yuska")
            ->assertSeeText("I don't have any hobbies", false);

        $this->view("isset-empty", ["name" => "Yuska", "hobbies" => "Coding"])
        ->assertSeeText("Hello, my name is Yuska")
        ->assertDontSeeText("I don't have any hobbies");
    }
}
