<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">
    
    {{-- This is the logic on what dashboard route it is going based on routes --}}
    @if((Auth::user()->user_type === 'Student'))
        <x-sidebar.link title="Dashboard" href="{{ route('student-home') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <img src="/images/icons8-school-50.png" alt="info logo" class="w-5">
            </x-slot>
        </x-sidebar.link>
    @elseif((Auth::user()->user_type === 'Teacher'))
        <x-sidebar.link title="Dashboard" href="{{ route('teacher.home') }}" :isActive="request()->routeIs('home')">
            <x-slot name="icon">
                <img src="/images/icons8-school-50.png" alt="info logo" class="w-5">
            </x-slot>
        </x-sidebar.link>
    @elseif((Auth::user()->user_type === 'admin'))
        <x-sidebar.link title="Dashboard" href="{{ route('admin.home') }}" :isActive="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <img src="/images/icons8-school-50.png" alt="info logo" class="w-5">
            </x-slot>
        </x-sidebar.link>
    @endif
    

    {{-- This is the logic on what dashboard route it is going based on routes --}}
    {{-- @if((Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates')))
        <div>
            <h1 class="text-xl font-normal text-white">Information</h1>

            <ul class="font-light text-base text-white ml-5">
                
                <a href='/student/profile'><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Profile</li></a>

                <a href={{ route('student-grades') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Grades</li></a> --}}

                {{-- <a href={{ route('student-schedule') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Class Schedule</li></a> --}}

                {{-- <a href={{ route('student-classmates') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Classmates</li></a> --}}

                {{-- <a href='#'><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Teachers</li></a> --}}
{{-- 
            </ul>
        </div> --}}
    {{-- @else --}}
{{-- 
    @endif --}}
    

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
    @if((Auth::user()->user_type === 'Student') && !(Route::is('home')))
    <x-sidebar.dropdown title="Information" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/icons8-information-32.png" alt="info logo" class="w-5">
        </x-slot>

        <x-sidebar.link title="Profile" href="/student/profile" />
        {{-- <x-sidebar.link title="Grades" href='/student/grades'/> --}}
        <x-sidebar.link title="Clasmates" href='/student/classmates'/>

        {{-- <a href={{ route('student-schedule') }}><li class="my-1 p-1 hover:bg-white hover:text-dark-eval-1 dark:hover:text-[#FFFFFF] dark:hover:bg-dark-eval-2 transition duration-200 ease-in-out rounded-md">Class Schedule</li></a> --}}
    </x-sidebar.dropdown>
    @elseif((Route::is('home')))

    @elseif((Auth::user()->user_type === 'Teacher'))
    <x-sidebar.dropdown title="Information" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/icons8-information-32.png" alt="info logo" class="w-5">
        </x-slot>

        <x-sidebar.link title="All Students" href="/student-all-list" />
    </x-sidebar.dropdown>
        {{-- <x-sidebar.link title="Add Student" href="/add-student" /> --}}
    @else
    {{-- <div x-transition x-show="isSidebarOpen || isSidebarHovered" class="text-sm text-[#FFFFFF]">Dummy Links</div> --}}
   
    {{-- @foreach ($links as $index => $link) --}}
    <x-sidebar.dropdown title="Information" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            {{-- <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" /> --}}
            <img src="/images/icons8-information-32.png" alt="info logo" class="w-5">
        </x-slot>
        
        <x-sidebar.link title="All Students" href="/student-all-list" />
        <x-sidebar.link title="All Teachers" href="/teacher-all-list" />
        {{-- <x-sidebar.link title="Add Student" href="/add-student" /> --}}
        <x-sidebar.link title="Add Teacher" href="/add-teacher" />
    </x-sidebar.dropdown>


    <x-sidebar.dropdown title="Announcements" :active="Str::startsWith(request()->route()->uri(), 'buttons')">

        {{-- <x-sidebar.link title="Email" href="/studentemail" /> --}}
        <x-sidebar.link title="Make Announcement" href="/add-announcement" />
        <x-sidebar.link title="View Announcements" href="/announcement-all-list" />
    </x-sidebar.dropdown>
        
        {{-- <x-sidebar.link title="Calendar" href="/homecalendar" /> --}}

        {{-- <x-sidebar.link title="Add Grade" href="/add-grade" /> --}}
    {{-- @endforeach --}}

    @endif
    
       
</x-perfect-scrollbar>