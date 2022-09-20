


@extends('partials.__sidebar')

@section('content')	


<div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
    @livewireStyles
   
    <div> <livewire:student-grade-table></div>
    </div>
   

{{-- 
<div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
@livewireStyles

<div> <livewire:student-grade></div>
</div> --}}

  

{{-- @livewireStyles
@powerGridStyles --}} 
{{-- <h1 class=" text-xl decoration-8 pb-6 pl-4">{{$data->firstname}} {{$data->lastname}}</h1> --}}
{{-- <div class="overflow-x-auto"> --}}

  {{-- <livewire:grades-table/> --}}
    
    {{-- <table class="min-w-full text-sm divide-y-2 divide-gray-200">
      <thead>
        <tr>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Grading Period</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">English</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Filipino</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Mathematics</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Social Studies</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Science and Technolgy</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Home Economics</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Values Education</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Music</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Arts</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Physical Education</th>
          <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Health</th>

        </tr>
      </thead>
      
  
      <tbody class="divide-y divide-gray-200">
  
        <tr>
      
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->gradingperiod}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->english}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->filipino}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->mathematics}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->social_studies}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->science}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->home_economics}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->values_education}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->music}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->arts}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->physical_education}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->health}}</td>
          </tr>
          
   
          
      </tbody>
    </table>
  </div> --}}
  <hr>
  
<!-- component -->
<!-- component -->
<form method="post" action="{{url('save-grade')}}" class="flex flex-col space-y-8" enctype="multipart/form-data"> 
    @csrf
    {{-- <input type="hidden" value="{{ $data->id }}" name="id" /> --}}

    {{-- <input type="hidden" value="{{$data->gradingperiod}}" name="gradingper" /> --}}
<div class="p-5">
    <div class="mt-2">

      <div class=" w-44 flex flex-col md:flex-row   pb-4 ">
        <div class="w-full flex-1 mx-2">      
          <label class="text-sm ">Grading Period</label>
      
                  {{-- <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="gradingperiod">  --}}
                  <select class="w-full appearance-none text-black text-opacity-90 rounded shadow-xl py-1 px-2 mr-2 focus:outline-none focus:shadow-outline border-none focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="gradingperiod" name="gradingperiod" >
                    <option value=""></option>
                    <option value="1" @if (old('gradingperiod') == "1") {{ 'selected' }} @endif>1</option>
                    <option value="2" @if (old('gradingperiod') == "2") {{ 'selected' }} @endif>2</option>    
                    <option value="3" @if (old('gradingperiod') == "2") {{ 'selected' }} @endif>3</option>
                    <option value="4" @if (old('gradingperiod') == "4") {{ 'selected' }} @endif>4</option>                
                </select>

                @error('gradingperiod')
                    
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

      <div class="flex flex-col md:flex-row   pb-4 ">
        {{-- <div class=" font-bold h-8 mx-2 md:w-64 text-gray-800 "> --}}
          {{-- <img src="{{asset('uploads/students/'.$data->photo)}}"  alt="image" class=" hidden  w-44 h-52 ml-8 "> --}}
        {{-- </div> --}}


        <div class="flex-1 flex flex-col md:flex-row">
            <div class="w-full flex-1 mx-2">
                <label class="text-sm ">Last Name</label>
                <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="text" name="lastname" value="{{$data->lastname}}">    
            </div>
            
            <div class="w-full flex-1 mx-2">
               <label class="text-sm ">First Name</label>
               <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="text" name="firstname" value="{{$data->firstname}}">  
            </div>

           
        </div>

    </div>

        <div class="flex flex-col md:flex-row   pb-4 ">
            {{-- <div class=" font-bold h-8 mx-2 md:w-64 text-gray-800 ">
                  <img src="{{asset('uploads/students/'.$data->photo)}}"  alt="image" class=" hidden  w-44 h-52 ml-8 ">
            </div> --}}

            <div class="flex-1 flex flex-col md:flex-row">
                <div class="w-full flex-1 mx-2">
                    <label class="text-sm ">English</label>
                    <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="english" value="">    
                </div>
                
                <div class="w-full flex-1 mx-2">
                   <label class="text-sm ">Filipino</label>
                   <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="filipino" value="">  
                </div>

                <div class="w-full flex-1 mx-2">
                    <label class="text-sm ">Mathematics</label>
                    <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="mathematics" value=""> 
                </div>
                
                <div class="w-full flex-1 mx-2">
                    <label class="text-sm ">Social Studies</label>
                    <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="social_studies" value="">
                </div>
            </div>

        </div>

        
        <div class="flex flex-col md:flex-row pb-2 ">
            {{-- <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"></div> --}}

            <div class="flex-1 flex flex-col md:flex-row">

                <div class="w-full flex-1 mx-2">
                  
                        <label class="text-sm ">Science and Technology</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="science" value=""> 
                    {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
                 
                        <label class="text-sm ">Home Econnomics</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="home_economics" value=""> 
             
                </div>

                <div class="w-full flex-1 mx-2">
                  
                        <label class="text-sm ">Values Education</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="values_education" value=""> 
                
                </div>
                
              
            </div>
        
        </div>

        <div class="flex flex-col md:flex-row pb-4 mb-1">
            {{-- <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"></div> --}}

            <div class="flex-1 flex flex-col md:flex-row">

                <div class="w-full flex-1 mx-2">
                 
                        <label class="text-sm ">Music</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="music" value="">
                     {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
               
                        <label class="text-sm ">Arts</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="arts" value=""> 
                
                </div>

                <div class="w-full flex-1 mx-2">
                   
                        <label class="text-sm ">Physical Education</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="physical_education" value=""> 
                    {{-- </div> --}}
                </div>

                <div class="w-full flex-1 mx-2">
                    
                        <label class="text-sm ">Health</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="health" value=""> 
                    {{-- </div> --}}
                </div>
                
              
            </div>
        
        </div>
        <div class="flex flex-col md:flex-row">
            {{-- <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div> --}}
            <div class="flex-1 justify-center flex flex-col md:flex-row mt-4">
                <button class="text-sm  mx-2   focus:outline-none   px-4 py-2 rounded font-bold cursor-pointer 
                hover:bg-indigo-700 hover:text-teal-100 
                bg-indigo-900 
                text-slate-100 
                border duration-200 ease-in-out 
                border-teal-600 transition" type="submit">
                    Add Grade
                </button>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
</form>


@livewireScripts

@endsection  