<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('All Students') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
 
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    @vite('resources/css/app.css')
</head>
<body> --}}
    @if(Session::has('success'))
      
              <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                    {{Session::get('success')}} 
                {{-- </div> --}}
              </div>
        @endif
    
    <div class="overflow-hidden overflow-x-auto border border-gray-100 rounded">
        <table class="min-w-full text-sm divide-y  divide-gray-200">
          <thead>
            <tr class="bg-gray-50 uppercase dark:bg-gray-600 dark:text-white">
              
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Id</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Last Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">First Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Middle Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Gender</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Email</th>
              {{-- <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Username</th> --}}
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Religion</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Date of Birth</th>
              {{-- <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Fathers Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Mothers Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Fathers Occupation</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Mothers Occupation</th> --}}
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Phone Number</th>
              {{-- <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"> Nationality</th> --}}
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Address</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Action</th>
            </tr>
          </thead>
         
     
          <tbody class="divide-y divide-gray-100 ">
           {{-- @php
                $i = 1
           @endphp --}}

            @foreach($data as $stud)
            
            
                <tr class="capitalize">
                   
                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap"> {{$stud->id}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$stud->lastname}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$stud->firstname}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$stud->middlename}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap">{{$stud->gender}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap lowercase">  {{$stud->email}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->username}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$stud->religion}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap">{{$stud->dateofbirth}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->fathersname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->mothersname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$stud->foccupation}}</td>
                  <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{$stud->moccupation}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$stud->phone}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->nationality}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$stud->address}}</td>

                  <td class="flex items-center py-4 px-6 space-x-3">
                    {{-- <a href="{{url('edit-student/'.$stud->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}

                    <a href="{{url('edit-student/'.$stud->id)}}" >  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3F83F8" class="w-6 h-6">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                      </svg>
                      </a>
                   
                    <a href="{{url('delete-student/'.$stud->id)}}" > <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F05252" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                      </svg>
                      
                      </a>
                </td>
                </tr>

                
                
            @endforeach
            
        </tbody>
    </table>
</div>

{{-- </body>
</html> --}}


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
