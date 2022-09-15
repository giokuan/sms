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
        {{-- @if(Session::has('success'))
      

              <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                    {{Session::get('success')}} 
              </div>
        @endif --}}
        {{-- <form class="w-full  md:px-40 pt-6 pb-4" method="post" action="{{url('save-student')}}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-2">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="lastname">
                    Last Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg" id="lastname" name="lastname" type="text" value="{{old('lastname')}}" >
                 
                    @error('lastname')

                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-2">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="firstname">
                    first Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded mb-2 py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg " id="firstname" name="firstname" type="text" value="{{old('firstname')}}" >
                    @error('firstname')

                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}} 
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-2">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="middlename">
                    Middle Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700  dark:bg-gray-400 border border-gray-200 rounded mb-2 py-2 px-4 leading-tight focus:outline-none focus:bg-white shadow-lg" id="middlename" name="middlename" type="text" value="{{old('middlename')}}" >
                    @error('middlename')

                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="email">
                    Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg" id="email" name="email" type="text" value="{{old('email')}}" >
                @error('email')

                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>

                @enderror
                </div>
        
          
        
                <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="photo">
                    Photo
                </label>
                <input class="form-control block w-full px-0.75 py-0.75 text-lg text-gray-500 bg-gray-200 dark:bg-gray-400 bg-clip-padding border rounded transition ease-in-out m-0 mb-2  focus:text-gray-700 focus:bg-white  focus:outline-none shadow-lg" id="photo"  name="photo" type="file" value="{{old('photo')}}">
                @error('photo')

                <div class="flex p-1 mb-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>

                @enderror
            </div>
        
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/3 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="dob">
                    Date of Birth
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg" id="dob" name="dob" type="date" value="{{old('dob')}}">
                @error('dob')

                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>

                @enderror
                </div>
        
                <div class="w-full md:w-1/3 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="gender">
                    Gender
                </label>
        
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 dark:bg-gray-400 py-2 px-4 mb-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="gender" name="gender">
                 
                    <option value="">Select Gender</option>
                    <option value="M" @if (old('gender') == "M") {{ 'selected' }} @endif>Male</option>
                    <option value="F" @if (old('gender') == "F") {{ 'selected' }} @endif>Female</option>
                    </select>
              
                @error('gender')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                
            
                @enderror
                </div>
        
                <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="religion">
                Religion
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="religion" name="religion" type="text" value="{{old('religion')}}">
                @error('religion')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                
            
                @enderror
            
            </div>
        
            </div>

        

            <div class="flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="fathersname">
                    Fathers Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg" id="fathersname" name="fathersname" type="text"  value="{{old('fathersname')}}">
                    @error('fathersname')
                    
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                    <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="mothersname">
                        Mothers Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="mothersname" name="mothersname" type="text" value="{{old('mothersname')}}" >
                    
                    @error('mothersname')
                    <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{$message}}
                        </div>
                    </div>
                    @enderror
                </div>        
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="foccupation">
                    Fathers Occupation
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg" id="foccupation" name="foccupation" type="text" value="{{old('foccupation')}}" >
                @error('foccupation')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                     {{$message}}
                    </div>
                  </div>                            
                @enderror
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="moccupation">
                    Mothers Occupation
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="moccupation" name="moccupation" type="text" value="{{old('moccupation')}}">
                @error('moccupation')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
                </div>
            </div>

            <div class=" flex flex-wrap -mx-3 mb-2">

                <div class="w-full md:w-1/2 px-3 mb-2 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="phone">
                    Phone
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-gray-400 shadow-lg" id="phone" name="phone" type="text" value="{{old('phone')}}">
                @error('phone')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
                </div>
        
                <div class="w-full md:w-1/2 px-3 mb-2">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-1" for="nationality">
                    Nationality
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="natoinality" name="nationality" type="text" value="{{old('nationality')}}" >
                @error('nationality')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
            </div>
        
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs font-bold mb-2" for="address">
                Address
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 dark:bg-gray-400 border border-gray-200 rounded py-3 px-4 mb-2 leading-tight focus:outline-none focus:bg-white shadow-lg focus:border-gray-500" id="address" name="address" type="text" >{{old('address')}}</textarea>
                @error('address')
                   
                <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{$message}}
                    </div>
                  </div>
                  @enderror
            </div>
            </div>

        <button type="submit" class="bg-sky-500 border-gray-200 rounded py-2 px-10 shadow-lg">Submit</button>

        </form> --}}

        {{-- @if(Session::has('success'))
      

              <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                    {{Session::get('success')}} 
              </div>
        @endif --}}

        <form method="post" action="{{url('save-student')}}" class="flex flex-col space-y-1" enctype="multipart/form-data">
                   
            @csrf
        <div class="w-full relative shadow-2xl rounded my-24 overflow-hidden">
            <div class="top h-60 w-full bg-blue-600 overflow-hidden relative" >
              <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
              <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                
                <img src="{{'uploads/students/profile-default.jpg'}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
                <h1 class="text-2xl font-semibold"></h1>
                <h4 class="text-sm font-semibold"></h4>
              </div>
            </div>
            <div class="grid grid-cols-12 bg-white dark:bg-dark-eval-1">
          
              <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
          
                <a href="#" class="text-sm p-2 bg-blue-900 text-white text-center rounded font-medium hover:bg-blue-800">
                    Basic Information
                </a>
          
                <a href="#" class="text-sm p-2 bg-blue-900 text-white text-center rounded font-medium hover:bg-blue-800">
                    Another Information
                </a>
          
                <a href="#"  class="text-sm p-2 bg-blue-900 text-white text-center rounded font-medium hover:bg-blue-800">
                    Another Something
                </a>
        
                    <label class=" flex uppercase tracking-wide text-white text-xs h-1" for="photo">
                        Add Photo
                    </label>
               
                    <div class="border-2 rounded-md bg-blue-900">
                        <label>
                            <input type="file" class=" w-full text-sm text-grey-500 p-2 text-blue-900
                            file:mr-5 pl-6 file:py-1 file:px-14
                            file:rounded-full file:border-0
                            file:text-sm file:font-medium
                            file:bg-blue-900 file:text-slate-50
                            hover:file:cursor-pointer hover:file:bg-blue-800
                            hover:file:text-white-700
                            hover:bg-blue-800" id="photo" name="photo" />
                        </label>
                        </div>
    
                <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-slate-50 border-gray-200 rounded py-2 px-10 shadow-lg">
                    Save
                </button>
          
              </div>
          
              <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                <div class="px-4 pt-4">

                  {{-- <form method="post" action="{{url('save-student')}}" class="flex flex-col space-y-8" enctype="multipart/form-data">
                   
                    @csrf --}}
          
                    <div class="py-2">
                      <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">Students basic information</h3>
                      <hr>
                    </div>
                    
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        {{-- lastname --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Last Name</label>
                            <input type="text" value="{{old('lastname')}}" class="w-full appearance-none text-black text-opacity-75 rounded shadow py-1 px-2  mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Dela Cruz" id="lastname" name="lastname">
                            @error('lastname')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        {{-- Firstname --}}
                        <div class="form-item w-full">
                            <label class="text-md ">First Name</label>
                            <input type="text" value="{{old('firstname')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Juan" id="firstname" name="firstname" >
                            @error('firstname')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        {{-- Middle name --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Middle Name</label>
                            <input type="text" value="{{old('middlename')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Protacio" id="middlename" name="middlename" >
                            @error('middlename')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                    </div>    
        
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">  

                        {{-- email --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Email</label>
                            <input type="text" value="{{old('email')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Juan@gmail.com" id="email" name="email">
                            @error('email')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>                 
                        
                        {{-- Grade --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Grade</label>
                            <select class="w-full appearance-none text-black text-opacity-70 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="grade" name="grade" >
                                <option value="">Select Grade</option>
                                <option value="Grade 7" @if (old('grade') == "Grade 7") {{ 'selected' }} @endif>Grade 7</option>
                                <option value="Grade 8" @if (old('grade') == "Grade 8") {{ 'selected' }} @endif>Grade 8</option>     
                                <option value="Grade 9" @if (old('grade') == "Grade 9") {{ 'selected' }} @endif>Grade 9</option>
                                <option value="Grade 10" @if (old('grade') == "Grade 10") {{ 'selected' }} @endif>Grade 10</option>    
                                <option value="Grade 11" @if (old('grade') == "Grade 11") {{ 'selected' }} @endif>Grade 11</option>
                                <option value="Grade 12" @if (old('grade') == "Grade 12") {{ 'selected' }} @endif>Grade 12</option>            
                            </select>
                            @error('grade')
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                            </div>
                            @enderror
                            {{-- <input type="text" value="{{old('grade')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="grade" name="grade"> --}}
                        </div>
                        
                        {{-- Date of birth --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Date of Birth</label>
                            <input type="date" value="{{old('dateofbirth')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="dateofbirth" name="dateofbirth">
                            @error('dob')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <p>Date of birth field is required</p>
                                </div>
                              </div>
                              @enderror
                        </div>
                     
                    </div>
        
        
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        
                        {{-- Phone --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Phone</label>
                            <input type="text" value="{{old('phone')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="09123456789" id="phone" name="phone">
                            @error('phone')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                        {{-- Gender --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Gender</label>
                            <select class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="gender" name="gender" >
                                <option value="">Select Gender</option>
                                <option value="Male" @if (old('gender') == "Male") {{ 'selected' }} @endif>Male</option>
                                <option value="Female" @if (old('gender') == "Female") {{ 'selected' }} @endif>Female</option>               
                            </select>
                            @error('gender')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                            {{-- <input type="text" value="" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200  " disabled> --}}
                        </div>
                        
                        {{-- Religion --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Religion</label>
                            <input type="text" value="{{old('religion')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Catholic" id="religion" name="religion">
                            @error('religion')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                        {{-- Nationality --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Nationality</label>
                            <input type="text" value="{{old('nationality')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Filipino" id="nationality" name="nationality">
                            @error('nationality')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
            
                    </div>
        
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        
                        {{-- Fathers Name --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Fathers Name</label>
                            <input type="text" value="{{old('fathersname')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Raul Dela Cruz"  id="fathersname" name="fathersname" >
                            @error('fathersname')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                        {{-- Fathers Occupation --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Fathers Occupation</label>
                            <input type="text" value="{{old('foccupation')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Carpenter" id="foccupation" name="foccupation">
                            @error('foccupation')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <p>Fathers occupation field is required</p>
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                        {{-- Mothers Name --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Mothers Name</label>
                            <input type="text" value="{{old('mothersname')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Sonya Dela Cruz" id="mothersname" name="mothersname">
                            @error('mothersname')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                        {{-- Mothers Occupation --}}
                        <div class="form-item w-full">
                            <label class="text-md ">Mothers Occupation</label>
                            <input type="text" value="{{old('moccupation')}}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="Cashier" id="moccupation" name="moccupation">
                            @error('moccupation')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <p>Mothers occupation field is required</p>
                                </div>
                              </div>
                              @enderror
                        </div>
          
                    </div>
                    
                    {{-- Address --}}
                    <div class="form-item w-full">
                        <label class="text-md ">Address</label>
                        <textarea type="text"  class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 dark:bg-gray-600 dark:text-white" placeholder="1781 M. Adriatico St, Malate, Manila, 1004 Metro Manila" id="address" name="address">{{old('address')}}</textarea>
                        @error('address')
                   
                        <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div>
                                {{$message}}
                            </div>
                          </div>
                          @enderror
                   
                    </div>

                   

                </div>
                {{-- @include('sweetalert::alert') --}}
              </div>
            </form>
            @include('sweetalert::alert')
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



