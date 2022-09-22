@extends('partials.__sidebar')
@section('content')	

<div class="flex flex-col md:flex-row justify-between gap-4">

    {{-- section1 goes here --}}
    {{-- <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">
      <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">School Activity</h1>

      <div>
        <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        <img src="/images/News Winner.jpg" alt="announcement">
      </div>

    </div> --}}

    {{-- Section2 goes here --}}
    {{-- <div class="w-full h-full bg-white p-5 rounded-lg dark:bg-dark-eval-1 flex flex-col gap-y-4">

      <h1 class="bg-[#F3F4F6] dark:bg-[#151823] font-semibold text-md rounded-md p-2">School News</h1>

      <div>
        <p class="text-sm p-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, commodi enim! Accusantium, iure voluptatum alias architecto culpa dolores laborum vero!</p>
        <img src="/images/News Winner.jpg" alt="announcement">
      </div>

    </div>
</div> --}}

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  <title>Tailwind CSS CDN</title>
</head>
<body>


  <div class="p-10">
    <!--Card 1-->
    <div class=" w-full lg:max-w-full lg:flex">
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/mountain.jpg')" title="Mountain">
      </div>
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          <p class="text-sm text-gray-600 flex items-center">
            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
            </svg>
            Members only
          </p>
          <div class="text-gray-900 font-bold text-xl mb-2">Best Mountain Trails 2020</div>
          <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
        </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="/ben.png" alt="Avatar of Writer">
          <div class="text-sm">
            <p class="text-gray-900 leading-none">John Smith</p>
            <p class="text-gray-600">Aug 18</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

@endsection