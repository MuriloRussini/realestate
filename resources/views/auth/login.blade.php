@extends('layouts.main')

@section('page-title', 'Login - Creampie Realty')

@section('content')
<div class="auth-page auth-page--login">
  <form method="POST" action="{{ route('login') }}" class="auth-page__form">
    @csrf
    <h3 class="auth-page__title">Login</h3>
    <div class="auth-page__form-group">
      <label for="email" class="auth-page__form-label">Email</label>
      <input type="email" name="email" class="auth-page__form-input" value="{{ old('email') }}">
      @error('email')
        <div class="error-sub-text">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="auth-page__form-group">
      <label for="password" class="auth-page__form-label">Password</label>
      <input type="password" name="password" class="auth-page__form-input" required autocomplete="current-password">
      @error('password')
        <div class="error-sub-text">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="auth-page__form-group">
        <label for="password" class="auth-page__form-label">Remember me
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
        </label>
    </div>

    <div class="auth-page__form-group">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif
    </div>

    <div class="auth-page__form-group">
     <button type="submit" class="auth-page__form-button">
      Login
     </button>
    </div>
  </form>
</div>
@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}