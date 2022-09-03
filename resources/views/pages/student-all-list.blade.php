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
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="overflow-hidden overflow-x-auto border border-gray-100 rounded">
        <table class="min-w-full text-sm divide-y  divide-gray-200">
          <thead>
            <tr class="bg-gray-50 uppercase">
              
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
         
     
          <tbody class="divide-y divide-gray-100">
            @php
                // $i = 1
            @endphp

            @foreach($data as $stud)
            
            
                <tr class="capitalize ">
                   
                  <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap"> {{$stud->id}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->lastname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->firstname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$stud->middlename}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{$stud->gender}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">  {{$stud->email}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->username}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$stud->religion}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{$stud->dateofbirth}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->fathersname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->mothersname}}</td>
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$stud->foccupation}}</td>
                  <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{$stud->moccupation}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->phone}}</td>
                  {{-- <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> {{$stud->nationality}}</td> --}}
                  <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$stud->address}}</td>

                  <td class="flex items-center py-4 px-6 space-x-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
                </tr>


            {{-- <tr class="bg-white border-b dark:bg-gray-800 uppercase dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$i++}}
                </th>
                <th class="py-4 px-6">
                    {{$stud->lastname}}
                 </th>
                <td class="py-4 px-6">
                    {{$stud->firstname}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->middlename}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->gender}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->email}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->username}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->religion}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->dateofbirth}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->fathersname}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->mothersname}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->foccupation}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->moccupation}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->phone}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->nationality}}
                </td>
                <td class="py-4 px-6">
                    {{$stud->address}}
                </td>
                <td class="flex items-center py-4 px-6 space-x-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr> --}}
            @endforeach
            
        </tbody>
    </table>
</div>

</body>
</html>


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
