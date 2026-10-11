<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.auth')] class extends Component
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

<div class="auth-wrapper">
    <div class="auth-container">
        <!-- Main Card -->
        <div class="auth-card">
            <!-- Brand & Badging -->
            <div class="text-center mb-4">
                <a href="{{ route('welcome') }}" class="d-inline-block mb-3">
                    <img src="{{ asset('assets/img/bi-logo-mini-full2.png') }}" alt="Bimbo Ilori Logo" style="height: 48px; width: auto;" class="img-fluid">
                </a>
                <div>
                    <span class="auth-badge">
                        <i class="bi bi-shield-lock-fill"></i> Control Center
                    </span>
                </div>
                <h1 class="auth-title mt-3">Welcome Back</h1>
                <p class="auth-subtitle">Sign in to manage Bimbo Ilori programs and content</p>
            </div>

            <!-- Session Status Alert -->
            @if (session('status'))
                <div class="alert alert-success d-flex align-items-center gap-2 py-2 px-3 rounded-3 small mb-3 border-0" role="alert" style="background-color: #ECFDF5; color: #065F46;">
                    <i class="bi bi-check-circle-fill text-success"></i>
                    <div>{{ session('status') }}</div>
                </div>
            @endif

            <!-- Authentication Form -->
            <form wire:submit="login" method="POST" action="{{ route('login.post') }}">
                @csrf

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="auth-form-label">Email Address</label>
                    <div class="auth-input-group">
                        <input wire:model="form.email" 
                               id="email" 
                               class="form-control @error('form.email') is-invalid @enderror @error('email') is-invalid @enderror" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus 
                               autocomplete="username" 
                               placeholder="admin@bimboilori.com">
                        <i class="bi bi-envelope input-icon"></i>
                    </div>
                    @error('form.email')
                        <div class="text-danger small mt-1 d-flex align-items-center gap-1">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    @error('email')
                        <div class="text-danger small mt-1 d-flex align-items-center gap-1">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label for="password" class="auth-form-label mb-0">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="small text-decoration-none fw-semibold" style="color: #5B32AC; font-size: 0.8rem;">Forgot password?</a>
                        @endif
                    </div>
                    <div class="auth-input-group position-relative">
                        <input wire:model="form.password" 
                               id="password" 
                               class="form-control @error('form.password') is-invalid @enderror @error('password') is-invalid @enderror" 
                               type="password" 
                               name="password" 
                               required 
                               autocomplete="current-password" 
                               placeholder="••••••••••••">
                        <i class="bi bi-lock input-icon"></i>
                        <button type="button" class="auth-password-toggle" id="togglePasswordBtn" aria-label="Toggle password visibility">
                            <i class="bi bi-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                    @error('form.password')
                        <div class="text-danger small mt-1 d-flex align-items-center gap-1">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                    @error('password')
                        <div class="text-danger small mt-1 d-flex align-items-center gap-1">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <!-- Remember Me & Security Note -->
                <div class="d-flex align-items-center justify-content-between my-3">
                    <div class="d-flex align-items-center gap-2 mb-0">
                        <input wire:model="form.remember" 
                               id="remember" 
                               type="checkbox" 
                               class="form-check-input m-0" 
                               name="remember"
                               style="width: 17px; height: 17px; cursor: pointer;">
                        <label for="remember" class="text-muted small user-select-none mb-0" style="cursor: pointer;">
                            Remember me
                        </label>
                    </div>
                    <span class="badge bg-light text-muted border px-2 py-1 small" style="font-size: 0.725rem; font-weight: 500;">
                        <i class="bi bi-shield-check text-success me-1"></i> Encrypted
                    </span>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="auth-btn-submit mt-2" wire:loading.attr="disabled">
                    <span wire:loading.remove>
                        <i class="bi bi-box-arrow-in-right me-1"></i> Sign In to Dashboard
                    </span>
                    <span wire:loading style="display: none;">
                        <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Authenticating...
                    </span>
                </button>
            </form>
        </div>

        <!-- Back to Website Link & Footer -->
        <div class="text-center mt-4">
            <a href="{{ route('welcome') }}" class="auth-footer-link">
                <i class="bi bi-arrow-left"></i> Return to Public Website
            </a>
        </div>
        <div class="text-center mt-3">
            <span class="text-white-50" style="font-size: 0.775rem;">
                &copy; {{ date('Y') }} Bimbo Ilori Programs. All rights reserved.
            </span>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePasswordIcon');

        if (toggleBtn && passwordInput && toggleIcon) {
            toggleBtn.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                toggleIcon.classList.toggle('bi-eye', !isPassword);
                toggleIcon.classList.toggle('bi-eye-slash', isPassword);
            });
        }
    });
</script>
