<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>
    {{-- nav bar goes heres --}}
    <nav class="bg-[#001F52] shadow py-2 fixed top-0 left-0 right-0 z-10">
        <div x-data="{isOpen: false}" class="mx-auto px-5 md:px-12.5 lg:px-20">
            
            <div class="md:flex md:justify-between items-center gap-4">
                {{-- logo --}}
                <div class="flex items-center">
                    <a href="/">
                        <img src="/images/main-logo.png" alt="Logo" class="w-8 h-8 md:w-12 md:h-12">
                    </a>
                    
                    {{-- primary --}}
                    <h1 class="text-lg md:text-2xl font-light text-sky-50">Philippine Integrated High School</h1>
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
                <div :class="isOpen ? 'show' : 'hidden' " x-data="{isChildNavOpen: false}" class="md:flex items-center font-light text-sky-50 ml-1 pb-1 pt-3">
                    <div class="flex flex-col md:flex-row gap-3 md:gap-x-3 lg:gap-x-7 text-center">
                        <a href="#" class="md:text-md hover:underline hover:text-sky-200">Contacts</a>
                        <a href="#" class="md:text-md hover:underline hover:text-sky-200">About</a>
                        {{-- login logout --}}
                        
                        @if(Route::is('student-login'))
                            <a href="{{ route('register') }}" class="md:text-md font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Register</a>
                        @elseif (Route::has('student-login'))
                                @auth
                                    <a href="{{ url('/student-dashboard') }}" class="md:text-md font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Dashboard</a>
                                @else
                                    <div>
                                        <button  @click="isChildNavOpen = !isChildNavOpen" class="md:text-md font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Log in</button>
                                    
                                        {{-- <a href="{{ route('login') }}" class="md:text-md font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Log in</a> --}}

                                        <ul :class="isChildNavOpen ? 'list-item' : 'hidden' " class="relative md:absolute list-none">
                                            <li class="bg-[#001F52] bg-opacity-70 p-2 border border-dash border-[#001F52] rounded-md md:mt-5 md:mb-1">As Teacher</li>
                                            <li class="bg-[#001F52] bg-opacity-70 p-2 border border-dash border-[#001F52] rounded-md"><a href="{{ route('student-login') }}">As Student</a></li>
                                        </ul>
                                    </div>
                                     
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="md:text-md font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Register</a>
                                    @endif
                                @endauth
                        @endif
                        <div>
                            <x-button type="button" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
                                <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-5 h-5 sm:w-6 sm:h-6" />
                                <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-5 h-5 sm:w-6 sm:h-6" />
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    
        {{-- content goes here --}}
        @yield('LandingContent')

        {{-- content goes here --}}
        @yield('LoginContent')

    {{-- footer goes here --}}
    <footer class="bg-[#001F52] py-3">
        <div class="flex flex-col md:flex-row justify-around items-center px-5 md:px-12.5 lg:px-20">
            {{-- logo --}}
            <a href="/">
                <img src="/images/main-logo.png" alt="Logo" class="md:w-62 md:h-62">
            </a>

            <div class="flex flex-col md:flex-row justify-around w-full text-sky-50 gap-y-2  gap-x-4">
                {{-- primary footer --}}
                <div  class="text-center bg-[#012560] px-full py-2 w-full rounded-md border border-sky-300 text-tiny">
                    Source Footer
                    <ul class="text-center py-3 md:py-0">
                        <li><a href="#">Dummy</a></li>
                        <li><a href="#">Dummy</a></li>
                        <li><a href="#">Dummy</a></li>
                    </ul>
                </div>
                
                {{-- secondary footer --}}
                <div  class="text-center bg-[#012560] px-full py-2 w-full rounded-md border border-sky-300 text-tiny">
                    Developers Footer
                    <ul class="text-center py-3 md:py-0">
                        <li><a href="#">Gio</a></li>
                        <li><a href="#">Bryant</a></li>
                        <li><a href="#">Michael</a></li>
                    </ul>
                </div>

                {{-- contacts --}}
                <div  class="text-center bg-[#012560] px-full py-2 w-full rounded-md border border-sky-300 text-tiny">
                    Contacts Footer
                    <ul class="text-center py-3 md:py-0">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>