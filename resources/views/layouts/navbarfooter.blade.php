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
            
            <div class="md:flex md:justify-between items-center">
                {{-- logo --}}
                <div class="flex items-center">
                    <a href="#">
                        <img src="/images/main-logo.png" alt="main logo" class="w-12 h-12">
                    </a>
                    
                    {{-- primary --}}
                    <h1 class="text-xl md:text-2xl font-light text-sky-50">Philippine Integrated High School</h1>
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
                                    {{-- <a href="{{ route('login') }}" class="md:text-lg font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200">Log in</a> --}}

                                    <div x-data="{ open: false }">
                                        <button class="md:text-lg font-light text-sky-50 dark:text-gray-500 hover:underline hover:text-sky-200"
                                        x-on:click="() => { setTimeout(() => { open = true }, 200); }">Log in</button>

                                        <!-- Modal -->
                                        <div 
                                        x-show.transition.duration.100ms="open"
                                        class="fixed inset-0 bg-gray-800 bg-opacity-80 flex items-center justify-center px-4 md:px-0"
                                        >

                                            <div class="flex flex-col max-w-lg bg-[#004AAD] shadow-2xl rounded-lg border-2 border-[#FFFFFF] p-6 gap-3 text-center" @click.away="open = false">
                                                <div class="flex justify-between mb-2">
                                                    <h3 class="font-medium text-2xl">Log in as?</h3>
                                                    <button @click="open = false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-light-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                          </svg>                                                          
                                                    </button>
                                                </div>
                                                <a href="{{ url('login') }}" class="bg-[#FFFFFF] font-semibold text-[#001F52] rounded-md py-1 px-2 mx-10 hover:scale-110 hover:bg-opacity-75 duration-300">
                                                    Student
                                                </a>
                                                <button class="bg-[#FFFFFF] font-semibold text-[#001F52] rounded-md py-1 px-2 mx-10 hover:scale-110 hover:bg-opacity-75 duration-300">
                                                    Parent/Guardian
                                                </button>
                                                <button class="bg-[#FFFFFF] font-semibold text-[#001F52] rounded-md py-1 px-2 mx-10 hover:scale-110 hover:bg-opacity-75 duration-300">
                                                    Teacher
                                                </button>
                                            </div>
                                        </div>
                                    </div>

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

        {{-- content goes here --}}
        @yield('LandingContent')

        {{-- content goes here --}}
        @yield('LoginContent')

    {{-- footer goes here --}}
    <footer class="bg-[#001F52] py-3">
        <div class="flex flex-col md:flex-row justify-around items-center px-5 md:px-12.5 lg:px-20">
            {{-- logo --}}
            <a href="#">
                <img src="/images/main-logo.png" alt="main logo">
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