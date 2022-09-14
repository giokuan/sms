@extends('partials.__sidebar')
@section('content')	

<div class="flex flex-col md:flex-row justify-between gap-4">

    {{-- section1 goes here --}}
    <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">

        {{-- Class Schedule goes here --}}
        <div class="w-full">

            <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">Classes for today</h1>
            
            <table class="table-auto w-full text-left my-2 border-separate border-spacing-2" >
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Time</th>
                    <th>Professor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Subject of the Student</td>
                    <td>Time</td>
                    <td>Professor Name</td>
                  </tr>
                  <tr>
                    <td>Subject of the Student</td>
                    <td>Time</td>
                    <td>Professor Name</td>
                  </tr>
                  <tr>
                    <td>Subject of the Student</td>
                    <td>Time</td>
                    <td>Professor Name</td>
                  </tr>
                  <tr>
                    <td>Subject of the Student</td>
                    <td>Time</td>
                    <td>Professor Name</td>
                  </tr>
                </tbody>
              </table>

        </div>
        
        {{-- Dates to remember goes here --}}
        <div class="w-full">
            
            <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">Dates to remember</h1>
            
            <div class="my-2">
              {{-- Date --}}
              <h3 class="inline-block mx-2 text-sm pt-2 px-2 font-semi-bold border-b-2 border-[#001F52] dark:border-[#FFFFFF]">09/21/2022</h3>

              {{-- Content --}}
              <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
            </div>
        </div>

    </div>

    {{-- Section2 goes here --}}
    <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">

      <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">Annnouncement</h1>

      <div>
        <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        <img src="/images/News Winner.jpg" alt="announcement">
      </div>

    </div>
</div>

@endsection