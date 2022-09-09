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

        {{-- Content --}}
        <div 
            class="h-screen w-full bg-no-repeat bg-cover bg-center object-contain" 
            style="background-image: url({{ url('images/hallway.jpg') }})">

            {{-- content goes here --}}
            <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 h-5/6 mx-auto">

                <img src="/images/main-logo.png" alt="main logo" class="max-w-lg">

                <h1 class="text-center text-2xl md:text-4xl font-light text-sky-50 bg-[#004AAD] bg-opacity-75 px-6 py-2 mb-5 rounded-md font-medium">
                    Philippine Integrated High School provides quality education
                </h1>

                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}">
                                <button 
                                class="bg-[#012560] rounded-md text-sky-50 text-lg font-light border-solid px-1 md:px-3 lg:px-4 py-1 cursor-pointer duration-300  hover:scale-110 hover:bg-opacity-75 hover:text-sky-200">
                                    Go to Dashboard
                                </button>
                            </a>
                        @else
                            <a href="{{ url('login') }}">
                                <button 
                                class="bg-[#012560] rounded-md text-sky-50 text-lg font-light border-solid px-1 md:px-3 lg:px-4 py-1 cursor-pointer duration-300  hover:scale-110 hover:bg-opacity-75 hover:text-sky-200">
                                Log in
                                </button>
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        {{-- Features of the website --}}
        <section class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:px-10 lg:px-20 w-full py-4 text-center">    
            <div class="w-full"> 
                {{-- img --}}
                <img src='/images/undraw1.png' class="p-2 relative block object-cover max-h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw2.png' class="p-2 relative block object-cover max-h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw3.png' class="p-2 relative block object-cover max-h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw4.png' class="p-2 relative block object-cover max-h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
        </section>

        {{-- Carousel --}}
        <section class="bg-[#012560] border-y-2 border-light-500 pb-5 bg-opacity-90">   
            <h1 class="text-1xl md:text-3xl font-light text-sky-50 text-center py-5">Announcement</h1>
            
            <div x-data="{ activeSlide: 1, slides: [1, 2, 3] }" class="px-10">
                <div class="relative ">
                    <!-- Slides -->
                    <div x-show="activeSlide === 1">
                    <!-- Slide -->
                        <img src='/images/1.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
    
                    <div x-show="activeSlide === 2">
                    <!-- Slide -->
                        <img src='/images/2.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
                    
                    <div x-show="activeSlide === 3">
                    <!-- Slide -->
                        <img src='/images/3.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
    
                    <!-- Prev/Next arrow buttons -->
                    <div class="absolute top-2/4 h-full w-full">
                        <div class="flex justify-between">
                            <button class="text-[#012560] bg-gray-900 bg-opacity-50 h-12 w-12 bg-color-transparent cursor-pointer" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  mx-auto">
                                    <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 010 1.06l-2.47 2.47H21a.75.75 0 010 1.5H4.81l2.47 2.47a.75.75 0 11-1.06 1.06l-3.75-3.75a.75.75 0 010-1.06l3.75-3.75a.75.75 0 011.06 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
        
                            <button class="text-[#012560] bg-gray-900 bg-opacity-50 h-12 w-12 bg-color-transparent cursor-pointer" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  mx-auto">
                                    <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
    
                    <!-- Indicator buttons -->
                    {{-- <div class="abosolute left-2/4 top-0 w-full">
                        <div class="flex justify-center">
                            <template x-for="slide in slides" :key="slide">
                                <button class="w-4 h-4 px-3 rounded-pill b-thin mx-1 cursor-pointer bg-sky-800" 
                                        :class="{
                                    'bg-sky-900': activeSlide === slide,
                                    '': activeSlide !== slide
                                }" x-on:click="activeSlide = slide"></button>
                            </template>
                        </div>
                    </div> --}}
                </div>
                
            </div>
        </section>

        {{-- One of the main features --}}
        <section class="flex flex-col md:flex-row justify-between align-center mx-10 md:mx-15 lg:mx-20 py-4 md:gap-10">
            {{-- Picture of the one of the main features --}}
            <div>
                <img src='/images/dashboard_img.jpg' class="relative block object-cover rounded-md" alt="features-img">
            </div>

            {{-- Short description about it and about button --}}
            <div class="flex flex-col justify-center gap-2">
                <p class="my-2 lg:my-10 xl:mb-7 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque impedit officiis perferendis temporibus doloremque, magni officia praesentium iure amet reprehenderit.</p>
                <div>
                    <button class="bg-[#012560] rounded-md text-sky-50 text-sm font-light border-solid px-1.5 md:px-2.3 lg:px-3 py-1 md:py-1.25 lg:py-1.5 cursor-pointer duration-300  hover:scale-110 hover:bg-opacity-75 hover:text-sky-200">
                        Learn more.
                    </button>
                </div>
            </div>
        </section>

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
