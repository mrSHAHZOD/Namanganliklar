<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StileTest extends TestCase
{
    public function test_can_stle()
    {
       $respons =  $this->post(url: '/'[
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'content' => $request->content,
            'file' => $request->file,
            'status' => 0,

        ]);

        $respons->assert(url: '/')

    }
}
