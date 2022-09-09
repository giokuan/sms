<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        {{-- nav bar goes heres --}}
        {{-- <nav class="bg-teal-800 shadow py-3 bg-emerald-700 fixed top-0 left-0 right-0"> --}}
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

        @yield('content')

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
        {{-- <div class="absolute inset-0 bg-sky-700 bg-opacity-30"></div>
        <div 
            class="h-screen w-full bg-no-repeat bg-cover bg-center object-contain" 
            style="background-image: url({{ url('images/dashboard_imgw.webp') }})">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
        {{-- <div class="min-h-screen bg-no-repeat" style="background-image: url({{ url('images/dashboard_imgw.webp') }})">
            Background
        </div> --}}
        {{-- @include('sweetalert::alert') --}}

    </body>
</html>
