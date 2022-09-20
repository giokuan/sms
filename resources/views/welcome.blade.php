@extends('layouts.navbarfooter')
@section('LandingContent')
        {{-- Content --}}
        <div class="h-full w-full bg-no-repeat bg-cover bg-center object-contain flex flex-col justify-center items-center " 
        {{-- <div class="h-5/6 w-full bg-no-repeat bg-cover bg-center object-contain flex flex-col justify-center items-center "  --}}
            style="background-image: url({{ url('images/hallway.webp') }})">
            <div class="dark:bg-gray-900 dark:bg-opacity-80 w-full h-full ">    
                {{-- content goes here --}}
                {{-- <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 h-5/6 mx-auto"> --}}
                <div class="flex flex-col justify-center items-center w-10/12 md:w-6/12 h-full mx-auto">
                    <img src="/images/main-logo.png" alt="main logo" class="max-w-xs my-4">

                    <h1 class="text-center text-2xl md:text-4xl  text-sky-50 bg-[#004AAD] dark:bg-[#151823] bg-opacity-80 px-2 py-4 mb-5 rounded-md font-light">
                        KodeGo High School provides quality education
                    </h1>

                </div>
            </div>    
        </div>

        {{-- Features of the website --}}
        {{-- <section class="dark:bg-[#222738] grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:px-10 lg:px-20 w-full py-4 text-center">     --}}
        <section class="flex flex-col md:flex-row py-5 gap-10 px-10  dark:bg-[#151823] text-center">   
            <div class="w-full">
                {{-- img --}}
                <img src='/images/SchoolFeatures3.jpg' class="rounded relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Quality Education.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">KodeGo High School provides quality education and assures, every student will learn all the knowledge they need once they graduate on KodeGo High School</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/SchoolFeatures1.jpg' class="rounded relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Interactive Discussion.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Discussion can be better if all the participants in the room are engaged for every lesson. That is why some discussion has interactive activity to make the discussion alive</p>
            </div>
            <div class="w-full">
                {{-- img --}}
                <img src='/images/SchoolFeatures2.jpg' class="rounded relative block object-cover h-48 mx-auto" alt="features-img">
                {{-- section header --}}
                <p class="py-2 font-semibold dark:text-[#FFFFFF]">Flexible learning.</p>
                {{-- paragraph --}}
                <p class="text-sm dark:text-[#FFFFFF]">Student can choose what type of learning he wants to. KodeGo High School has Blended learning, Online Learning, and Face to Face Learning</p>
            </div>
        </section>

        {{-- Carousel --}}
        <section class="bg-[#012560] dark:bg-[#222738] border-y-2 dark:border-gray-500 py-5 bg-opacity-90">
            {{-- <h1 class="text-1xl md:text-3xl font-light text-sky-50 text-center py-5">Announcement</h1> --}}
            
            <div    x-data="{ activeSlide: 1, slides: [1, 2, 3] }"
                    {{-- x-init="() => { setTimeout(() => { activeSlide = activeSlide + 1 }, 3000); }" --}}
                    x-if="{activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1}"
                    
                    class="px-10">
                <div class="relative ">
                    <!-- Slides -->
                    <div x-show="activeSlide === 1" class="duration-300">
                    <!-- Slide -->
                        <img src='/images/School1.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
    
                    <div x-show="activeSlide === 2" class="duration-300">
                    <!-- Slide -->
                        <img src='/images/School2.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
                    </div>
                    
                    <div x-show="activeSlide === 3" class="duration-300">
                    <!-- Slide -->
                        <img src='/images/School3.jpg' class="relative block w-full h-96 object-cover rounded-md" alt="carousel_img">
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

        <section class="dark:bg-[#151823] py-4">
            <div class="flex flex-col items-center text-center">
                <h1 class="inline-block text-lg md:text-2xl px-4 text-sky-50 bg-[#004AAD] dark:bg-[#222738] py-1 mb-2 rounded-md font-light">
                    Mission
                </h1>
                <p class="dark:text-[#FFFFFF] text-md w-10/12 md:w-6/12">
                    KodeGo High School's main goals is to provide accessible and quality eduaction for students to achieve their dream goals. We are here to help students to push to their limits and see their max potential as a student.
                </p>
            </div>
        </section>

        {{-- One of the main features --}}
        <section class="dark:bg-[#151823] flex flex-col md:flex-row justify-between items-center px-10 md:px-15 lg:px-20 pt-1 pb-4 md:gap-10">
            {{-- Picture of the one of the main features --}}
            <div class="w-full mx-auto">
                <img src='/images/principal.jpg' class="relative block object-cover rounded-md" alt="features-img">
            </div>

            {{-- Short description about it and about button --}}
            <div class="flex flex-col justify-center gap-2">
                <p class="dark:text-[#FFFFFF] my-2 lg:my-10 xl:mb-7 text-md">From its humble beginnings on August 21, 2012 Christian Yumol founded this school as a computer training center. Until today, KodeGo High school are giving quality education to its student and help them to achieve their goals and push to their limits and see their max potential as a student</p>
                <div>
                    <button class="bg-[#012560] dark:bg-[#222738] rounded-md text-sky-50 text-sm font-light border-solid px-1.5 md:px-2.3 lg:px-3 py-1 md:py-1.25 lg:py-1.5 cursor-pointer duration-300  hover:scale-110 hover:bg-opacity-75 hover:text-sky-200 bg-opacity-90 ">
                        Learn more.
                    </button>
                </div>
            </div>
        </section>
@section('LandingContent')
