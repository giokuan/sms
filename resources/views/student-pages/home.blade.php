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
        <div class="mb-8">
       
            <p class="text-gray-900 dark:text-gray-100 font-semibold text-xl">{{$query->title}}</p>

            <p class="text-gray-800 dark:text-gray-300 font-normal text-base my-2 ">{{$query->message}}</p>

            <img src="{{url('uploads/announcement/'.$query->photo)}}" alt="announcement photo">

        </div>
    </div>
  </div>
  @endforeach

</body>
</html>

@endsection