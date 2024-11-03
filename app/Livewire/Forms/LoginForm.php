<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    public string $userNameEmail = '';

    #[Validate('required|string')]
    public string $userPassword = '';
}
