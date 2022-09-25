@extends('partials.__sidebar')
@section('content')	

{{-- <div class="bg-white dark:bg-dark-eval-1 py-4 rounded-lg">
    <div class="flex flex-col items-center gap-2 bg-white dark:bg-dark-eval-1 py-4 rounded-lg">
        <img src="{{ url('uploads/students/'.$datas->photo) }}" alt="studentprofile" class="w-24 h-fit rounded-full">
        
   
        <h3 class="font-medium text-lg">{{ $datas->firstname." ".$datas->middlename." ".$datas->lastname  }}</h3>
        <p class="font-light">{{ $datas->grade}}</p>
        <p class="font-light">Section {{ $datas->section}}</p>
        <p class="font-light">{{ $datas->gender }}</p>
    
        <h3 class="font-medium text-lg pt-2 border-t-2 border-[#001F52] dark:border-[#FFFFFF] w-11/12 text-center mx-10">Other information</h3>
    
        <p class="font-light">{{ $datas->email }}</p>
        <p class="font-light">{{ $datas->address }}</p>
        <p class="font-light">{{ $datas->phone }}</p>
        <p class="font-light">{{ $datas->dateofbirth }}</p>
        
    </div>

</div> --}}

{{-- <div class="flex items-center justify-center">

<div class="pb-8">
<a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 keychainify-checked">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg pl-4" src="{{ url('uploads/students/'.$datas->photo) }}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal mb-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $datas->firstname." ".$datas->middlename." ".$datas->lastname  }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $datas->grade}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Section:</strong> {{ $datas->section}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Gender:</strong> {{ $datas->gender}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Email:</strong> {{ $datas->email}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Phone:</strong> {{ $datas->phone}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>Date of Birht:</strong> {{ $datas->dateofbirth}}</p>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong>address:</strong> {{ $datas->address}}</p>
    </div>
</a>
</div>
</div> --}}

<!-- component -->
<div class="bg-white shadow-xl dark:bg-[#222738]">

    <div class="rounded-full flex justify-between">
       <div class="pl-4">
          <h4 class="font-black text-gray-700 dark:text-gray-200  translate-y-2  text-xl">{{ $datas->grade}}</h4>
       </div>
   
       <h4 class="text-gray-700  dark:text-gray-200  -translate-y-2 pt-5 pr-5">
       <p class="font-black">  Section: {{ $datas->section}}</p>
       </h4>
      
       </Link>
     </div>
   <hr />
</div>

<div class="bg-white shadow-xl dark:bg-[#222738]">
<div class"py-16 bg-zinc-900">
   <div class="container m-auto px-6">
 
    <div class="lg:flex justify-between items-center">
        <div class="lg:w-6/12 lg:p-0 p-7">
           <h1 class="sm:text-5xl text-4xl text-gray-700 font-medium dark:text-gray-200 leading-tight mb-5 capitalize">{{ $datas->firstname." ".$datas->middlename." ".$datas->lastname  }}</h1>
         
           <p class="text-xl text-gray-700 dark:text-gray-200 "><strong class="dark:text-sky-500">Email:</strong>{{ $datas->email}}</p>
           <p class="text-xl text-gray-700 dark:text-gray-200 "><strong class="dark:text-sky-500">Phone: </strong>{{ $datas->phone}}</p>
           <p class="text-xl text-gray-700 dark:text-gray-200 "><strong class="dark:text-sky-500">Date of Birth:</strong> {{ $datas->dateofbirth}}</p>
           <p class="text-xl text-gray-700 dark:text-gray-200 "><strong class="dark:text-sky-500">Address:</strong> {{ $datas->address}}</p>

           {{-- <div class="py-5 flex gap-x-4">
             <a class="text-white border px-5 py-2 border-white rounded-lg border-t-2 border-l-2">Projects</a>
             <a class="text-white border px-5 py-2 border-white rounded-lg border-t-2 border-l-2">Social Links</a>
        </div>           --}}
         </div>
         <div class="lg:w-4/12 rounded-full scale-100  ">
           <img class="rounded-full pb-8" alt="sahil logo" width="350" height="350" src="{{ url('uploads/students/'.$datas->photo) }}" />
         </div>
     </div>
 
   </div>
 </div>

</div>


@endsection