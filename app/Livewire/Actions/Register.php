<?php

namespace App\Livewire\Actions;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string')]
    public string $firstName;

    #[Validate('string|nullable')]
    public string $lastName;

    #[Validate('required|email')]
    public string $emailAddress;

    public function register()
    {
        $this->validate();

        event(new Registered(
            $user = User::create([
                'first_name' => $this->firstName,
                'last_name'  => $this->lastName ?? null,
                'email'      => $this->emailAddress,
                'username'   => 'user' . mt_rand(10000, 99000),
                'password'   => Hash::make('password'),
            ])
        ));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), true);
    }

    public function render()
    {
        return view('livewire.actions.register');
    }
}
