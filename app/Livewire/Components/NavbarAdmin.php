<?php

namespace App\Livewire\Components;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class NavbarAdmin extends Component
{
    public function logout(Logout $logout)
    {
        $logout();

        $this->redirect('/', true);
    }

    public function render()
    {
        return view('livewire.components.navbar-admin');
    }
}
