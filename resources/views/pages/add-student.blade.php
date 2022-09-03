<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Add Student') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    {{-- <div class="p-5 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 flex items-center justify-center "> --}}
    {{-- <div class="bg-white rounded-md shadow-md dark:bg-dark-eval-1"> --}}
        @if(Session::has('success'))
            {{-- <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div> --}}

            <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium"> {{Session::get('success')}}</span>
                </div>
              </div>
        @endif
        <form class="w-full max-w-lg pl-8 pr-8 pt-6 pb-4" method="post" action="{{url('save-student')}}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-2">

            <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="lastname">
                Last Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="lastname" name="lastname" type="text" >
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                @error('lastname')

                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium"> Last Name field is required</span> 
                    </div>
                  </div>

                @enderror
            </div>

            <div class="w-full md:w-1/3 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="firstname">
                first Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="firstname" name="firstname" type="text">
            </div>

            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="middlename">
                Middle Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="middlename" name="middlename" type="text" >
            </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="email">
                    Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="email" name="email" type="text" >
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
        
                <div class="w-full md:w-1/3 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="username">
                    Username
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="username" name="username" type="text" >
                </div>
        
                <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="photo">
                    Photo
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="photo" name="photo" type="text" >
                </div>
        
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="dob">
                    Date of Birth
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="dob" name="dob" type="date">
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
        
                <div class="w-full md:w-1/3 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="gender">
                    Gender
                </label>
                {{-- <div class="relative"> --}}
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="gender" name="gender">
                        <option>Select</option>
                        <option>Male</option>
                    <option>Female</option>
                    </select>
                {{-- </div> --}}
                </div>
        
                <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="religion">
                Religion
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="religion" name="religion" type="text">
                </div>
        
            </div>

        

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="fathersname">
                    Fathers Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="fathersname" name="fathersname" type="text" >
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="mothersname">
                    Mothers Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="mothersname" name="mothersname" type="text" >
                </div>
        
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="foccupation">
                    Fathers Occupation
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="foccupation" name="foccupation" type="text" >
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="moccupation">
                    Mothers Occupation
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="moccupation" name="moccupation" type="text" >
                </div>
        
            </div>

            <div class=" flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="phone">
                    Phone
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg" id="phone" name="phone" type="text" >
                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="nationality">
                    Nationality
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="natoinality" name="nationality" type="text" >
                </div>
        
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">
                Address
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="address" name="address" type="text"></textarea>
            
            </div>
            </div>

        <button type="submit" class="bg-sky-500 border-gray-200 rounded py-2 px-10 shadow-lg">Submit</button>

        </form>
    {{-- </div> --}}

{{-- </div> --}}
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



