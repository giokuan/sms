<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
        
        @yield('content')

    </div>
    <style>
    .table {
        border-spacing: 0 15px;
    }
    
    i {
        font-size: 1rem !important;
    }
    
    .table tr {
        border-radius: 20px;
    }
    
    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }
    
    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
    </style>
        </div>
    </x-app-layout>
    