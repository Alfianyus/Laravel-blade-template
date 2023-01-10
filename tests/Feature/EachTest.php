<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users"=>[
                [
                    "name"=>"Yuska",
                    "hobbies"=>["Coding","Gaming"]
                ],
                [
                    "name"=>"Alfian",
                    "hobbies"=>["Coding","Gaming"]
                ]
        ]])
            ->assertSeeInOrder([
                ".red",
                "Yuska",
                "Coding",
                "Gaming",
                "Alfian",
                "Coding",
                "Gaming"
            ]);
    }
}
