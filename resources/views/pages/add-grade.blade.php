



@extends('partials.__sidebar')

@section('content')	
<h1 class=" text-xl decoration-8 pb-6 pl-4">{{$data->firstname}} {{$data->lastname}}</h1>
<div class="overflow-x-auto">
    
    <table class="min-w-full text-sm divide-y-2 divide-gray-200">
      <thead>
        <tr>
          <th
            class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"
          >
            Subject
          </th>
          <th
            class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"
          >
            1st
          </th>
          <th
            class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"
          >
            2nd
          </th>
          <th
            class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"
          >
            3rd
          </th>

          <th
          class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap"
        >
          4th
        </th>
        </tr>
      </thead>
  
      <tbody class="divide-y divide-gray-200">
        {{-- @foreach($stu as $studentgrade) --}}
        <tr>
          <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
            English
          </td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->english}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
        </tr>
  
        <tr>
          <td class="px-4 py-2 font-medium whitespace-nowrap">Filipino</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->filipino}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
        </tr>
  
        <tr>
          <td class="px-4 py-2 font-medium whitespace-nowrap">Mathematics</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->mathematics}}</td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
        </tr>

        <tr>
            <td class="px-4 py-2 font-medium whitespace-nowrap">Social Studies</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->social_studies}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>
    
          <tr>
            <td class="px-4 py-2 font-medium whitespace-nowrap">Science and Technology</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->science}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          {{-- <tr>
            <td class="px-4 py-2 font-medium whitespace-nowrap">Filipino</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr> --}}
    
          <tr>
            <td class="px-4 py-2 font-medium whitespace-nowrap">Home Economics</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->home_economics}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <tr>
            <td class="px-4 py-2 font-medium whitespace-nowrap">Values Education</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->values_education}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <td class="px-4 py-2 font-medium whitespace-nowrap"><strong>MAPEH</strong></td>
          <tr>
            <td class="px-4 py-2 pl-8 font-medium whitespace-nowrap">Music</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->music}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <tr>
            <td class="px-4 py-2 pl-8 font-medium whitespace-nowrap">Arts</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->arts}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <tr>
            <td class="px-4 py-2 pl-8 font-medium whitespace-nowrap">Physical Education</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->physical_education}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <tr>
            <td class="px-4 py-2 pl-8 font-medium whitespace-nowrap">Health</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{$data->health}}</td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
            <td class="px-4 py-2 text-gray-700 whitespace-nowrap"></td>
          </tr>

          <tr>
            <td class="px-4 py-2  font-medium whitespace-nowrap"><strong>General Average</strong></td>
          
          </tr>

          
          {{-- @endforeach --}}
          
      </tbody>
    </table>
  </div>
  <hr>
  
<!-- component -->
<!-- component -->
<form method="post" action="{{url('save-grade')}}" class="flex flex-col space-y-8" enctype="multipart/form-data"> 
    @csrf
    <input type="hidden" value="{{ $data->id }}" name="id" />
<div class="p-5">
    <div class="mt-2">

      <div class=" w-44 flex flex-col md:flex-row   pb-4 ">
      <div class="w-full flex-1 mx-2">      
        <label class="text-sm ">Grading Period</label>
     
                {{-- <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="gradingperiod">  --}}
                <select class="w-full appearance-none text-black text-opacity-90 rounded shadow-xl py-1 px-2 mr-2 focus:outline-none focus:shadow-outline border-none focus:border-blue-200 dark:bg-gray-600 dark:text-white" id="gradingperiod" name="gradingperiod" >
                  <option value="{{$data->gradingperiod}}"></option>
                  <option value="1" @if (old('gradingperiod') == "1") {{ 'selected' }} @endif>1</option>
                  <option value="2" @if (old('gradingperiod') == "2") {{ 'selected' }} @endif>2</option>    
                  <option value="3" @if (old('gradingperiod') == "2") {{ 'selected' }} @endif>3</option>
                  <option value="4" @if (old('gradingperiod') == "4") {{ 'selected' }} @endif>4</option>                
              </select>
          
      </div>
      </div>

        <div class="flex flex-col md:flex-row   pb-4 ">
            <div class=" font-bold h-8 mx-2 md:w-64 text-gray-800 ">
             
                  <img src="{{asset('uploads/students/'.$data->photo)}}"  alt="image" class=" hidden  w-44 h-52 ml-8 ">
            </div>

            
          
            <div class="flex-1 flex flex-col md:flex-row">
              
                <div class="w-full flex-1 mx-2">

                    
                    <label class="text-sm ">English</label>
                    {{-- <div class="w-full flex-1 mx-2"> --}}
                        {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                            <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="english" value="{{$data->english}}"> 
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Filipino</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="filipino" value="{{$data->filipino}}"> 
                    {{-- </div> --}}
                </div>

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Mathematics</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="mathematics" value="{{$data->mathematics}}"> 
                    {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Social Studies</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="social_studies" value="{{$data->social_studies}}">
                     {{-- </div> --}}
                </div>
            </div>

        </div>

        
        <div class="flex flex-col md:flex-row pb-2 ">
            <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"></div>

            <div class="flex-1 flex flex-col md:flex-row">

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Science and Technology</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="science" value="{{$data->science}}"> 
                    {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Home Econnomics</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="home_economics" value="{{$data->home_economics}}"> 
                    {{-- </div> --}}
                </div>

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Values Education</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="values_education" value="{{$data->values_education}}"> 
                    {{-- </div> --}}
                </div>
                
              
            </div>
        
        </div>

        <div class="flex flex-col md:flex-row pb-4 mb-1">
            <div class="w-64 font-bold h-6 mx-2 mt-3 text-gray-800"></div>

            <div class="flex-1 flex flex-col md:flex-row">

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Music</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="music" value="{{$data->music}}">
                     {{-- </div> --}}
                </div>
                
                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Arts</label>
                        <input class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="arts" value="{{$data->arts}}"> 
                    {{-- </div> --}}
                </div>

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Physical Education</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="physical_education" value="{{$data->physical_education}}"> 
                    {{-- </div> --}}
                </div>

                <div class="w-full flex-1 mx-2">
                    {{-- <div class="my-2 p-1 bg-white flex border border-gray-200 rounded"> --}}
                        <label class="text-sm ">Health</label>
                        <input  class="p-1 px-2 appearance-none outline-none w-full text-gray-800 shadow-xl border-none" type="number" name="health" value="{{$data->health}}"> 
                    {{-- </div> --}}
                </div>
                
              
            </div>
        
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="w-64 mx-2 font-bold h-6 mt-3 text-gray-800"></div>
            <div class="flex-1 flex flex-col md:flex-row">
                <button class="text-sm  mx-2 w-32  focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer 
        hover:bg-indigo-700 hover:text-teal-100 
        bg-indigo-900 
        text-slate-100 
        border duration-200 ease-in-out 
        border-teal-600 transition" type="submit">Add Grade</button>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
</form>
@endsection            