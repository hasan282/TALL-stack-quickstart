<?php

namespace Tests\Feature\Pages;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_home_page_is_rendered(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
