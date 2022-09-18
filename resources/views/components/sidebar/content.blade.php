<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">
    
    {{-- This is the logic on what dashboard route it is going based on routes --}}
    @if((Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates')))
        <x-sidebar.link title="Dashboard" href="{{ route('student-home') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @elseif((Route::is('home')))
        <x-sidebar.link title="Dashboard" href="{{ route('home') }}" :isActive="request()->routeIs('home')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @else
        <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>
        </x-sidebar.link>
    @endif
    

    {{-- This is the logic on what dashboard route it is going based on routes --}}
    @if((Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates')))
        <div>
            <h1 class="text-xl font-normal text-white">Information</h1>

            <ul class="font-light text-base text-white ml-5">
                <a href={{ route('student-grades') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Grades</li></a>

                <a href={{ route('student-schedule') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Class Schedule</li></a>

                <a href='#'><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Daily Attendance</li></a>

                <a href={{ route('student-classmates') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Classmates</li></a>

                <a href='#'><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Teachers</li></a>

            </ul>
        </div>
    {{-- @else --}}

    @endif
    

    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}

    {{-- @php
        $links = array_fill(0, 20, '');
    @endphp --}}
    @if((Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates')))
    
    @elseif((Route::is('home')))

    @else
    {{-- <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-[#FFFFFF]">Dummy Links</div> --}}
    
    {{-- @foreach ($links as $index => $link) --}}
        <x-sidebar.link title="All Students" href="/student-all-list" />
        <x-sidebar.link title="All Teachers" href="/teacher-all-list" />
        <x-sidebar.link title="Add Student" href="/add-student" />
        <x-sidebar.link title="Add Teacher" href="/add-teacher" />
        <x-sidebar.link title="Calendar" href="/homecalendar" />

        {{-- <x-sidebar.link title="Add Grade" href="/add-grade" /> --}}
    {{-- @endforeach --}}

    @endif
    
       
</x-perfect-scrollbar>