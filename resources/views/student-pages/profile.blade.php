@extends('partials.__sidebar')
@section('content')	

<div class="bg-white dark:bg-dark-eval-1 py-4 rounded-lg">
    <div class="flex flex-col items-center gap-2 bg-white dark:bg-dark-eval-1 py-4 rounded-lg">
        <img src="{{ url('uploads/students/'.$students->photo) }}" alt="studentprofile" class="w-24 h-fit rounded-full">
        
        {{-- <p class="font-light text-sm">Keep moving forward</p> --}}
        <h3 class="font-medium text-lg">{{ $students->firstname." ".$students->middlename." ".$students->lastname  }}</h3>
        <p class="font-light">Student Number</p>
    
        <p class="font-light">{{ $students->grade}}</p>
        <p class="font-light">{{ $students->gender }}</p>
    
        <h3 class="font-medium text-lg pt-2 border-t-2 border-[#001F52] dark:border-[#FFFFFF] w-11/12 text-center mx-10">Other information</h3>
    
        <p class="font-light">{{ $students->email }}</p>
        <p class="font-light">{{ $students->address }}</p>
        <p class="font-light">{{ $students->phone }}</p>
        <p class="font-light">{{ $students->dateofbirth }}</p>
    </div>

</div>


@endsection