@extends('layouts.navbarfooter')
@section('login')

<div class="h-screen w-full bg-no-repeat bg-cover bg-center object-contain" 
style="background-image: url({{ url('images/hallway.jpg') }})">
    <div class="dark:bg-gray-900 dark:bg-opacity-75 w-full h-full flex flex-col justify-center items-center ">    
        {{-- content goes here --}}
        <x-auth-card>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="grid gap-6">
                    <!-- Email Address -->
                    <div class="space-y-2">
                        <x-label for="email" :value="__('Email')" />

                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="email" class="block w-full" type="email" name="email"
                                :value="old('email')" placeholder="{{ __('Email') }}" required autofocus />
                        </x-input-with-icon-wrapper>
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <x-label for="password" :value="__('Password')" />

                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="password" class="block w-full" type="password" name="password" required
                                autocomplete="current-password" placeholder="{{ __('Password') }}" />
                        </x-input-with-icon-wrapper>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="text-gray-700 border-gray-300 rounded focus:border-gray-500 focus:ring focus:ring-gray-700 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 dark:text-gray-400 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                    <div>
                        <x-button class="bg-blue-700 hover:bg-blue-600 justify-center w-full gap-2">
                            <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" />
                            <span>{{ __('Log in') }}</span>
                        </x-button>
                    </div>

                    @if (Route::has('register'))
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Don’t have an account?') }}
                        <a href="{{ route('register') }}" class="hover:underline">
                            {{ __('Register') }}
                        </a>
                    </p>
                    @endif
                </div>
            </form>
            

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
        </x-auth-card>
    </div>
</div>

@section('login')