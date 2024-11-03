<?php

namespace Tests\Feature\Livewire\Actions;

use App\Livewire\Actions\Login;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Login::class)->assertStatus(200);
    }
}
