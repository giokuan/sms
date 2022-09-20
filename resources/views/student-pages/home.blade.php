@extends('partials.__sidebar')
@section('content')	

<div class="flex flex-col md:flex-row justify-between gap-4">

    {{-- section1 goes here --}}
    <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">
      <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">School Activity</h1>

      <div>
        <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        <img src="/images/News Winner.jpg" alt="announcement">
      </div>

    </div>

    {{-- Section2 goes here --}}
    <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">

      <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">School News</h1>

      <div>
        <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        <img src="/images/News Winner.jpg" alt="announcement">
      </div>

    </div>
</div>

@endsection