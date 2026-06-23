<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-gray-900 relative overflow-hidden">

<!-- BACKGROUND IMAGE (like screenshot) -->
<div class="absolute inset-0">
    <img src="{{ asset('images/bg-barangay.jpg') }}"
         class="w-full h-full object-cover opacity-40">
    <div class="absolute inset-0 bg-blue-900/70"></div>
</div>

<!-- TOP NAV STYLE (optional feel like portal) -->
<div class="absolute top-0 w-full flex justify-between items-center px-8 py-4 text-white z-10">
    <div class="font-bold tracking-wide">
        🏛️ BARANGAY PORTAL
    </div>

    <div class="flex gap-6 text-sm">
        <a href="/" class="hover:text-amber-300">HOME</a>
        <a href="{{ route('register') }}" class="hover:text-amber-300">REGISTER</a>
        <a href="{{ route('login') }}" class="text-amber-300 font-bold">LOGIN</a>
    </div>
</div>

<!-- LOGIN CARD -->
<div class="relative z-10 w-full max-w-md">

    <div class="bg-white/10 backdrop-blur-2xl border border-white/20 shadow-2xl rounded-2xl p-8">

        <!-- LOGO -->
        <div class="text-center mb-6">
            <img src="{{ asset('images/logo.png') }}"
                 class="w-20 h-20 mx-auto rounded-full bg-white p-1 shadow-lg">

            <h1 class="text-2xl font-black text-white mt-4">
                BARANGAY PORTAL
            </h1>

            <p class="text-blue-100 text-sm">
                Secure Resident Access System
            </p>
        </div>

        <!-- STATUS -->
        <x-auth-session-status class="mb-4 text-green-200" :status="session('status')" />

        <form wire:submit="login" class="space-y-5">

            <!-- USERNAME / EMAIL -->
            <div>
                <label class="text-white text-sm">Username / Email / Resident No.</label>

                <x-text-input
                    wire:model="form.email"
                    type="text"
                    class="w-full mt-1 rounded-xl bg-white/10 border-white/20 text-white placeholder-gray-200 focus:ring-amber-400 focus:border-amber-400"
                    placeholder="Enter username or resident number"
                />

                <x-input-error :messages="$errors->get('form.email')" class="mt-2 text-red-300" />
            </div>

            <!-- PASSWORD -->
            <div>
                <label class="text-white text-sm">Password</label>

                <x-text-input
                    wire:model="form.password"
                    type="password"
                    class="w-full mt-1 rounded-xl bg-white/10 border-white/20 text-white focus:ring-amber-400 focus:border-amber-400"
                    placeholder="Enter password"
                />

                <x-input-error :messages="$errors->get('form.password')" class="mt-2 text-red-300" />
            </div>

            <!-- REMEMBER -->
            <div class="flex items-center">
                <input wire:model="form.remember" type="checkbox"
                       class="rounded border-white/30 bg-white/10 text-amber-400">
                <span class="text-white text-sm ml-2">Remember me</span>
            </div>

            <!-- BUTTON -->
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-3 rounded-xl transition shadow-lg">
                Sign In
            </button>

            <!-- FORGOT -->
            <div class="text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-sm text-blue-200 hover:text-white underline">
                        Forgot Password?
                    </a>
                @endif
            </div>

        </form>

    </div>

    <!-- FOOTER TEXT -->
    <p class="text-center text-white/60 text-xs mt-6">
        © {{ date('Y') }} Barangay Digital Portal System
    </p>

</div>

</div>
