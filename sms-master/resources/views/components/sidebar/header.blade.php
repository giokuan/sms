<div class="flex items-center justify-between flex-shrink-0 px-3">
    
    {{-- This is the logic on what destination it going based on route --}}
    {{-- @if (Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates'))
        <a href="{{ route('student-profile') }}" class="inline-flex items-center gap-2">
            <x-application-logo aria-hidden="true" class="w-10 h-auto" />
            <span class="sr-only">K UI Logo</span>
        </a>
    @elseif((Route::is('home')))
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2">
            <x-application-logo aria-hidden="true" class="w-10 h-auto" />
            <span class="sr-only">K UI Logo</span>
        </a>
    @else --}}
        <!-- Profile -->
        {{-- <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2"> --}}
            <x-application-logo aria-hidden="true" class="w-10 h-auto" />
            <span class="sr-only">K UI Logo</span>
        {{-- </a>
    @endif --}}
    

    <!-- Toggle button -->
    {{-- <x-button type="button" iconOnly srText="Toggle sidebar" variant="secondary"
        x-show="isSidebarOpen || isSidebarHovered" @click="isSidebarOpen = !isSidebarOpen">
        <x-icons.menu-fold-right x-show="!isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-icons.menu-fold-left x-show="isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-heroicon-o-x aria-hidden="true" class="w-6 h-6 lg:hidden" />
    </x-button> --}}
</div>