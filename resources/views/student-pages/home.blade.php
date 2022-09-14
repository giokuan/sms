@extends('partials.__sidebar')
@section('content')	

<div class="flex justify-between gap-4">
    <div class="w-full flex flex-col gap-y-4">

        {{-- Class Schedule goes here --}}
        <div class="w-full">

            <h1 class="bg-[#F3F4F6] font-semibold text-md rounded-md p-2">Classes for today</h1>
            
            <table class="table-auto w-full text-left m-2 border-separate border-spacing-2">
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
            
            <h1 class="bg-[#F3F4F6] font-semibold text-md rounded-md p-2">Dates to remember</h1>
            {{-- Date --}}
            <h3 class="text-sm p-2 font-semi-bold">09/21/2022</h3>

            {{-- Content --}}
            <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        </div>

    </div>
    <div class="bg-[#F3F4F6] w-full">Section2</div>
</div>

@endsection