<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        sleep(5);
    }

    public function render()
    {
        return view('livewire.actions.login');
    }
}
