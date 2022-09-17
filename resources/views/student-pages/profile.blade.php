@extends('partials.__sidebar')
@section('content')	

<div class="flex flex-col items-center gap-2 bg-white dark:bg-dark-eval-1 py-4 rounded-lg">
    <img src="/images/StudentProfile.jpg" alt="studentprofile" class="w-24 h-fit rounded-full">

    {{-- <p class="font-light text-sm">Keep moving forward</p> --}}
    <h3 class="font-medium text-lg">{{ Auth::user()->name }}</h3>
    <p class="font-light">Student Number</p>

    <p class="font-light">year and section</p>
    <p class="font-light">school name</p>

    <h3 class="font-medium text-lg pt-2 border-t-2 border-[#001F52] dark:border-[#FFFFFF] w-11/12 text-center mx-10">Other information</h3>

    <p class="font-light">{{ Auth::user()->email }}</p>
    <p class="font-light">Home Address</p>
    <p class="font-light">Contact Address</p>
    <p class="font-light">birthday</p>
</div>

@foreach($students as $student)
    <p class="font-light">{{ $student->name }}</p>
    <p class="font-light">{{ $student->firstname }}</p>
    <p class="font-light">{{ $student->lastname }}</p>
    <p class="font-light">{{ $student->email }}</p>
    <p class="font-light">{{ $student->dateofbirth }}</p>
@endforeach

@endsection