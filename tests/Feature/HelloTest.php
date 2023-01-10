<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
        ->assertSeeText("yuska");
    }

    public function testHelloWorld()
    {
        $this->get('/world')
        ->assertSeeText("yuska");
    }

    public function testHelloView()
    {
        $this->view("hello",["name"=>"yuska"])
        ->assertSeeText("yuska");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world",["name"=>"yuska"])
        ->assertSeeText("yuska");
    }
}
