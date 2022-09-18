@extends('partials.__sidebar')
@section('content')	
  
        <form method="post" action="{{url('save-student')}}" class="flex flex-col space-y-1" enctype="multipart/form-data">
                   
            @csrf
        <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
            <div class="top h-60 w-full bg-blue-600 overflow-hidden relative" >
              <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
              <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                
                <img src="{{'uploads/students/profile-default.jpg'}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
                <h1 class="text-2xl font-semibold"></h1>
                <h4 class="text-sm font-semibold"></h4>
              </div>
            </div>
            <div class="grid grid-cols-12 bg-white dark:bg-dark-eval-1 ">
          
              <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid dark:border-none md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
          
                {{-- <a href="#" class="text-sm p-2 bg-indigo-900 text-white  text-center rounded font-bold">Basic Information</a>
          
                <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Another Information</a>
          
                <a href="#"  class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Another Something</a> --}}
        
                    <label class=" flex  uppercase tracking-wide text-gray-700 dark:text-gray-500 text-xs h-1" for="photo">
                        Add Photo
                    </label>
               
                    <div class="border-2 rounded-md bg-indigo-900 dark:bg-gray-700 dark:border-0">
                        <label>
                            <input type="file" class=" w-full text-sm text-grey-500 p-2 text-indigo-900 dark:text-gray-700
                            file:mr-5 pl-6 file:py-1 file:px-14
                            file:rounded-full file:border-0
                            file:text-sm file:font-medium
                            file:bg-indigo-900 file:dark:bg-gray-700 file:text-slate-50 file:dark:text-gray-500
                            hover:file:cursor-pointer hover:file:bg-indigo-900 
                            hover:file:text-amber-700
                        " id="photo" name="photo" >{{old('photo')}}
                        </label>
                        @error('photo')
                   
                        <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Info</span>
                            <div>
                                {{$message}}
                            </div>
                          </div>
                          @enderror
                        </div>
    
                <button type="submit" class="bg-indigo-900 hover:bg-indigo-700 hover:text-slate-500 text-slate-50 dark:bg-gray-700 dark:text-slate-400 border-gray-200 rounded py-2 px-10 shadow-lg">Save</button>
              
                   
               
          
              </div>
          
              <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                <div class="px-4 pt-4">

                  {{-- <form method="post" action="{{url('save-student')}}" class="flex flex-col space-y-8" enctype="multipart/form-data">
                   
                    @csrf --}}
          
                    <div>
                      <h3 class="text-2xl font-semibold dark:text-gray-500">Basic Information</h3>
                      <hr class="mb-4 ">
                    </div>
          
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Last Name</label>
                            <input type="text" value="{{old('lastname')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2  mr-2 mb-4  focus:outline-none focus:shadow-outline focus:border-blue-200" id="lastname" name="lastname">
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">First Name</label>
                            <input type="text" value="{{old('firstname')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="firstname" name="firstname" >
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Middle Name</label>
                            <input type="text" value="{{old('middlename')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="middlename" name="middlename" >
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Email</label>
                            <input type="text" value="{{Auth::user()->email}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200" id="email" name="email" disabled>
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Grade</label>
                            <select class="w-full appearance-none text-black text-opacity-70 rounded shadow py-1 px-2 mr-2 dark:bg-gray-400 focus:outline-none focus:shadow-outline focus:border-gray-900 " id="grade" name="grade" >
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

                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Section</label>
                            <input type="text" value="{{old('phone')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200" id="section" name="section">
                            @error('section')
                   
                            <div class="flex p-1 mb-1 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow-lg" role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    {{$message}}}
                                </div>
                              </div>
                              @enderror
                        </div>
          
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Date of Birth</label>
                            <input type="date" value="{{old('dateofbirth')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 " id="dateofbirth" name="dateofbirth">
                            @error('dateofbirth')
                   
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Phone</label>
                            <input type="text" value="{{old('phone')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200" id="phone" name="phone">
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Gender</label>
                            <select class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 dark:bg-gray-400 focus:outline-none focus:shadow-outline focus:border-blue-200 " id="gender" name="gender" >
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Religion</label>
                            <input type="text" value="{{old('religion')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="religion" name="religion">
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
          
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Nationality</label>
                            <input type="text" value="{{old('nationality')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="nationality" name="nationality">
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Fathers Name</label>
                            <input type="text" value="{{old('fathersname')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 mb-4 focus:outline-none focus:shadow-outline focus:border-blue-200 "  id="fathersname" name="fathersname" >
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Fathers Occupation</label>
                            <input type="text" value="{{old('foccupation')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="foccupation" name="foccupation">
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Mothers Name</label>
                            <input type="text" value="{{old('mothersname')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="mothersname" name="mothersname">
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
        
                        <div class="form-item w-full">
                            <label class="text-md dark:text-gray-500">Mothers Occupation</label>
                            <input type="text" value="{{old('moccupation')}}" class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 " id="moccupation" name="moccupation">
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
        
                    <div class="form-item w-full">
                        <label class="text-md dark:text-gray-500">Address</label>
                        <textarea type="text"  class="w-full appearance-none text-black dark:bg-gray-400 text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" id="address" name="address">{{old('address')}}</textarea>
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

@endsection



