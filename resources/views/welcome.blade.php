@extends('layouts.navbarfooter')
@section('LandingContent')
        {{-- Content --}}
        <div class="h-full w-full bg-no-repeat bg-cover bg-center object-contain flex flex-col justify-center items-center " 
        {{-- <div class="h-5/6 w-full bg-no-repeat bg-cover bg-center object-contain flex flex-col justify-center items-center "  --}}
            style="background-image: url({{ url('images/hallway.webp') }})">
            <div class="dark:bg-gray-900 dark:bg-opacity-80 w-full h-full ">    
                {{-- content goes here --}}
                <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 h-5/6 mx-auto">
                {{-- <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 h-full mx-auto"> --}}
                    <img src="/images/main-logo.png" alt="main logo" class="max-w-xs my-4">

                    <h1 class="text-center text-2xl md:text-4xl  text-sky-50 bg-[#004AAD] dark:bg-[#222738] bg-opacity-80 px-6 py-2 mb-5 rounded-md font-medium">
                        KodeGo High School provides quality education
                    </h1>

                </div>
            </div>    
        </div>

        {{-- Features of the website --}}
        <section class="dark:bg-[#222738] grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:px-10 lg:px-20 w-full py-4 text-center">    
            <div class="w-full"> 
                {{-- img --}}
                <img src='/images/undraw1.png' class="p-2 relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw2.png' class="p-2 relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw3.png' class="p-2 relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/undraw4.png' class="p-2 relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga expedita deserunt corrupti repellendus dicta harum!</p>
            </div>
        </section>

        {{-- Carousel --}}
        <section class="bg-[#012560] dark:bg-[#151823] border-y-2 dark:border-gray-500 pb-5 bg-opacity-90">
            <h1 class="text-1xl md:text-3xl font-light text-sky-50 text-center py-5">Announcement</h1>
            
            <div    x-data="{ activeSlide: 1, slides: [1, 2, 3] }"
                    {{-- x-init="() => { setTimeout(() => { activeSlide = activeSlide + 1 }, 3000); }" --}}
                    x-if="{activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1}"
                    
                    class="px-10">
                <div class="relative ">
                    <!-- Slides -->
                    <div x-show="activeSlide === 1" class="duration-300">
                    <!-- Slide -->
                        <img src='/images/1.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
    
                    <div x-show="activeSlide === 2" class="duration-300">
                    <!-- Slide -->
                        <img src='/images/2.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
                    
                    <div x-show="activeSlide === 3" class="duration-300">
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
        
                            <button class="text-[#012560] bg-gray-900 bg-opacity-50 h-12 w-12 bg-color-transparent cursor-pointer" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                            >
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
        <section class="dark:bg-[#222738] flex flex-col md:flex-row justify-between align-center px-10 md:px-15 lg:px-20 py-4 md:gap-10">
            {{-- Picture of the one of the main features --}}
            <div>
                <img src='/images/dashboard_img.jpg' class="relative block object-cover rounded-md" alt="features-img">
            </div>

            {{-- Short description about it and about button --}}
            <div class="flex flex-col justify-center gap-2">
                <p class="dark:text-[#FFFFFF] my-2 lg:my-10 xl:mb-7 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque impedit officiis perferendis temporibus doloremque, magni officia praesentium iure amet reprehenderit.</p>
                <div>
                    <button class="bg-[#012560] dark:bg-[#151823] rounded-md text-sky-50 text-sm font-light border-solid px-1.5 md:px-2.3 lg:px-3 py-1 md:py-1.25 lg:py-1.5 cursor-pointer duration-300  hover:scale-110 hover:bg-opacity-75 hover:text-sky-200">
                        Learn more.
                    </button>
                </div>
            </div>
        </section>
@section('LandingContent')
