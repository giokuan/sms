@extends('layouts.navbarfooter')
@section('register')
<div class="h-screen w-full bg-no-repeat bg-cover bg-center object-contain" 
style="background-image: url({{ url('images/hallway.webp') }})">
    <div class="dark:bg-gray-900 dark:bg-opacity-75 w-full h-full flex flex-col justify-center items-center ">    

    <x-auth-card>

        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <div class="grid grid-cols-6 gap-6">
                <!-- Name -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="name" :value="__('Name')" class="py-2 pl-2"/>
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="name" class="block w-full" type="text" name="name" :value="old('name')"
                            required autofocus placeholder="{{ __('Name') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Email Address -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="email" :value="__('Email')" class="py-2 pl-2"/>
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="email" class="block w-full" type="email" name="email"
                            :value="old('email')" required placeholder="{{ __('Email') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Password -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="password" :value="__('Password')" class="py-2 pl-2"/>
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password" class="block w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="col-span-6 sm:col-span-3">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" class="py-2 pl-2"/>
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password_confirmation" class="block w-full" type="password"
                            name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>
                
                {{-- User type --}}
                <div class="col-span-6 sm:col-start-2 sm:col-span-4 ">
                    <x-label for="user_type" :value="__('User Type')" class="text-center py-2"/>
                    <select x-model="color" id="user_type" name="user_type" class=" w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring-1
                    focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                    dark:text-gray-300 dark:focus:ring-offset-dark-eval-1">
                        
                        <option value="">User Type</option>
                        <option value="Student" @if (old('user_type') == "Student") {{ 'selected' }} @endif>Student</option>
                        <option value="Teacher" @if (old('user_type') == "Teacher") {{ 'selected' }} @endif>Teacher</option>
                        {{-- <option value="Admin" @if (old('user_type') == "Admin") {{ 'selected' }} @endif>Admin</option> --}}
                    </select>

                    @error('user_type')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                </div>

                {{-- Register Button --}}
                <div class="col-span-6 sm:col-start-2 sm:col-span-4 ">
                    <x-button class="justify-center w-full gap-2 bg-blue-900" variant="danger">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                        <span>{{ __('Register') }}</span>
                    </x-button>
                </div>

                {{-- Login Button --}}
                <p class="col-span-6 sm:col-start-2 sm:col-span-4 text-center text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="hover:underline">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
    </x-auth-card>

    </div>
</div>

@section('register')