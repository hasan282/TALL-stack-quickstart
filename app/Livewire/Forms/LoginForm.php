<?php

namespace App\Livewire\Forms;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string')]
    public string $userNameEmail = '';

    #[Validate('required|string')]
    public string $userPassword = '';

    protected bool $remember = true;

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (Support\Facades\Auth::attempt($this->only([]), $this->remember)) {

            Support\Facades\RateLimiter::hit(
                $this->throttleKey()
            );
            throw ValidationException::withMessages([]);
        }

        Support\Facades\RateLimiter::clear($this->throttleKey());
    }

    protected function ensureIsNotRateLimited()
    {
        if (!Support\Facades\RateLimiter::tooManyAttempts($this->throttleKey(), 5)) return;

        event(new Lockout(request()));

        throw ValidationException::withMessages([]);
    }

    protected function throttleKey(): string
    {
        return Support\Str::transliterate(

            Support\Str::lower($this->userNameEmail) . '|' . request()->ip()
        );
    }
}
