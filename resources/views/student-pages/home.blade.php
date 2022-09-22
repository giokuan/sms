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


  <title>Announcement</title>
</head>
<body>



  @foreach($query as $query)
  <div class="p-10 flex flex-row">
    <!--Card 1-->
    <div class=" w-full lg:max-w-full lg:flex">
      <div class="h-24 lg:h-24 lg:w-24 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url({{asset('uploads/announcement/'.$query->photo)}})" title="photo">
        {{-- <img src="{{asset('uploads/announcement/'.$query->photo)}}"  alt="image" class="h-24 w-24 object-cover rounded-full"> --}}
      </div>
      <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
       
          <div class="text-gray-900 font-bold text-xl mb-2">{{$query->title}}</div>
          <p class="text-gray-700 text-base">{{$query->message}}</p>
        </div>
        {{-- <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="/ben.png" alt="Avatar of Writer">
          <div class="text-sm">
            <p class="text-gray-900 leading-none"></p>
            <p class="text-gray-600">Aug 18</p>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  @endforeach

</body>
</html>

@endsection