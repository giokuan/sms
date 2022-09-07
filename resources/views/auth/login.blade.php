

<x-guest-layout>

    <nav class="bg-[#001F52] shadow py-2 fixed top-0 left-0 right-0 z-10">
        <div x-data="{isOpen: false}" class="mx-auto px-5 md:px-12.5 lg:px-20">
            
            <div class="md:flex md:justify-between items-center">
                {{-- logo --}}
                <div class="flex items-center">
                    <a href="#">
                        <svg class="text-sky-50 mr-2 h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                    </a>
                    
                    {{-- primary --}}
                    <h1 class="text-xl md:text-2xl font-light text-sky-50">High School Name goes here</h1>
                    {{-- hamburger menu --}}
                    <div class="flex md:hidden ml-auto">
                        <button    
                            aria-label="toggle menu"
                            @click="isOpen = !isOpen">
                                <svg class="text-sky-50  h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                        </button>
                    </div>
                </div>

                {{-- secondary nav --}}
                <div :class="isOpen ? 'show' : 'hidden' " class="md:flex items-center font-light text-sky-50 ml-1 pb-1 pt-3">
                    <div class="flex flex-col md:flex-row gap-3 md:gap-x-7">
                        <a href="#" class="md:text-lg hover:underline hover:text-sky-200">Contacts</a>
                        <a href="#" class="md:text-lg hover:underline hover:text-sky-200">About</a>
                        {{-- login logout --}}
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="md:text-lg font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="md:text-lg font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="md:text-lg font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Register</a>
                                    @endif
                                @endauth
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </nav>
    
<div 
class="h-screen w-full bg-no-repeat bg-cover bg-center object-contain" 
style="background-image: url({{ url('images/hallway.jpg') }})">
    <x-auth-card>
        <!-- Session Status -->
       
        
        <x-auth-session-status class="mb-4" :status="session('status')" />
     
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

 

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
                            class="text-sky-500 border-gray-300 rounded focus:border-sky-300 focus:ring focus:ring-sky-500 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" />
                        <span>{{ __('Log in') }}</span>
                    </x-button>
                </div>

                @if (Route::has('register'))
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Don’t have an account?') }}
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                        {{ __('Register') }}
                    </a>
                </p>
                @endif
            </div>
        </form>
   
    </x-auth-card>
</div>
</x-guest-layout>
