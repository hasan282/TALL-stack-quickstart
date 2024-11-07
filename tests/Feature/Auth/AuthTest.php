<?php

namespace Tests\Feature\Auth;

use App\Livewire\Actions\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_login_component_is_exists(): void
    {
        $this->get('/login')
            ->assertOk()
            ->assertSeeLivewire(Login::class);
    }

    public function test_users_can_login_with_email(): void
    {
        $user = User::factory()->create();

        $component = Livewire::test('actions.login')
            ->set('form.useremail', $user->email)
            ->set('form.password', 'password');

        $component->call('login');
        $component
            ->assertHasNoErrors()
            ->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticated();
    }

    public function test_users_can_login_with_username()
    {
        $user = User::factory()->create();

        $component = Livewire::test('actions.login')
            ->set('form.useremail', $user->username)
            ->set('form.password', 'password');

        $component->call('login');
        $component
            ->assertHasNoErrors()
            ->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticated();
    }
}
