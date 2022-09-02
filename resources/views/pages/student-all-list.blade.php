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
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th> --}}
                <th scope="col" class="py-3 px-6">
                    Id
                 </th>
                <th scope="col" class="py-3 px-6">
                   Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Middle Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Username
                </th>
                <th scope="col" class="py-3 px-6">
                    Religion
                </th>
                <th scope="col" class="py-3 px-6">
                    Date of Birth
                </th>
                <th scope="col" class="py-3 px-6">
                    Fathers Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Mothers Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Fathers Ocuppation
                </th>
                <th scope="col" class="py-3 px-6">
                    Mothers Occupation
                </th>
                <th scope="col" class="py-3 px-6">
                    Phone Number
                </th>
                <th scope="col" class="py-3 px-6">
                   Nationality
                </th>
                <th scope="col" class="py-3 px-6">
                    Address
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1
            @endphp

            @foreach($data as $stud)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
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
            </tr>
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
