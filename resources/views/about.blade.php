@extends('layouts.navbarfooter')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>
        <script src="https://cdn.tailwindcss.com"></script>      
    </head>
    
    <body>

        

        <section class="flex items-center justify-center py-16 bg-gray-100 dark:bg-[#151823] min-w-screen tails-selected-element mt-5" contenteditable="true">
            <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10 dark:bg-[#151823]">
                <div class="flex flex-col items-center lg:flex-row  my-5">
                    {{-- Our team --}}
                    <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2 ">
                        
                        <h2 class="text-4xl font-medium leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl dark:text-[#FFFFFF]">Developers</h2>
                        <p class="mt-6 mb-2 text-base font-medium tracking-tight text-blue-900 dark:text-sky-500 uppercase" data-primary="indigo-500">Helping Schools to build their website</p>
                        {{-- <p class="my-6 text-lg text-gray-600">Don't just take our word for it, read from our extensive list of case studies and customer testimonials.</p> --}}
                        {{-- <a href="#" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-900 border border-transparent rounded-md shadow hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10" style="cursor: pointer" data-primary="indigo-600" data-rounded="rounded-md">Contact Us</a> --}}
                    </div>
                    <div class="w-full lg:w-1/2">
                        
                        {{-- Gio --}}
                        <div class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow dark:bg-[#222738]" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-900 dark:text-sky-500 fill-current" data-primary="indigo-500"  viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base dark:text-[#FFFFFF]">have seen the immediate need for a robust School Management System to handle the enormous amount of administrative work involved in managing school records. And for most schools, manual recording is still a common practice.</p>
                                </div>
        
                                <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-indigo-900 truncate sm:text-base lg:text-sm dark:text-sky-500">
                                    GIO KUAN <br>  
                                    <span class="mt-1 text-sm leading-5 text-gray-500 dark:text-white truncate">Full Stack Developer</span>
                                </h3>
                            </div>
                            <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24" src="/images/giokuan.jpg" alt="">
                        </div>

                        {{-- Michael --}}
                        <div class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow dark:bg-[#222738]" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-900 dark:text-sky-500 fill-current" data-primary="indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base dark:text-[#FFFFFF]">Specializes in both back-end coding and front-end coding when creating applications, websites and software.</p>
                                </div>
        
                                <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-indigo-900 truncate sm:text-base lg:text-sm dark:text-sky-500">
                                    MICHAEL PABAYA <br> 
                                    <span class="mt-1 text-sm leading-5 text-gray-500 dark:text-white truncate">Full Stack Developer</span>
                                </h3>

                            </div>
                            <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24" src="/images/michael.jpg" alt="">
                        </div>

                        {{-- Bryant --}}
                        <div class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow dark:bg-[#222738]" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-900 dark:text-sky-500 fill-current" data-primary="indigo-500"  viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base dark:text-[#FFFFFF]">Ensure that security and compliance are not compromised in a bid to release products on an accelerated timeline.</p>
                                </div>
        
                                <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-indigo-900 truncate sm:text-base lg:text-sm dark:text-sky-500">
                                    BRYANT ROSILLO <br>
                                    <span class="mt-1 text-sm leading-5 text-gray-500 dark:text-white truncate">Full Stack Developer</span>
                                </h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                            </div>
                            <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="/images/bryant.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </body>

</html>
