<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        sleep(5);

        $this->validate();
        $this->form->authenticate();

        Session::regenerate();

        // $this->redirectIntended(route('dashboard', absolute: false), true);

        $this->redirect('/', true);
    }

    public function render()
    {
        return view('livewire.actions.login');
    }
}
