
{{-- <x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('All Students') }}
            </h2>
      
        </div>
    </x-slot> --}}

    
    

            {{-- <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>All Students</title>
                @vite('resources/css/app.css')
                @livewireStyles
            </head>
            <body> --}}
                @extends('partials.__sidebar')

                @section('content')	
                <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
                @livewireStyles

                <div> <livewire:students-table></div>
                </div>
               

                @livewireScripts
                @endsection
                {{-- </body>
                
            </html> --}}

           
{{-- 
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
</style> --}}
    {{-- </div>
</x-app-layout> --}}




