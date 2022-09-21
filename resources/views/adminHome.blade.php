@extends('partials.__sidebar')
@section('content')	
{{-- <h1>admin</h1> --}}


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


  <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-5">
    <!--Card 1-->
    <div class="rounded overflow-hidden shadow-lg">
      {{-- <img class="w-full" src="/mountain.jpg" alt="Mountain"> --}}
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Grade 7</div>
        <p class="text-gray-700 text-base">
        Male
        </p>

        <p class="text-gray-700 text-base">
            Female
        </p>
      </div>
      {{-- <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">female</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
      </div> --}}
    </div>

    <!--Card 2-->
    <div class="rounded overflow-hidden shadow-lg">
      {{-- <img class="w-full" src="/river.jpg" alt="River"> --}}
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Grade 8</div>
        <p class="text-gray-700 text-base">
            Male
        </p>
        <p class="text-gray-700 text-base">
            Female
        </p>
      </div>
      {{-- <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Female</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
      </div> --}}
    </div>

    <!--Card 3-->
    <div class="rounded overflow-hidden shadow-lg">
      {{-- <img class="w-full" src="/forest.jpg" alt="Forest"> --}}
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Grade 9</div>
        <p class="text-gray-700 text-base">
          Male
        </p>
        <p class="text-gray-700 text-base">
            Female
        </p>
      </div>
      {{-- <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Female</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
      </div> --}}
    </div>

      <!--Card 4-->
      <div class="rounded overflow-hidden shadow-lg">
        {{-- <img class="w-full" src="/forest.jpg" alt="Forest"> --}}
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Grade 10</div>
          <p class="text-gray-700 text-base">
           Male
          </p>
          <p class="text-gray-700 text-base">
            Female
           </p>
        </div>
        {{-- <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Female</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
        </div> --}}
      </div>

         <!--Card 5-->
    <div class="rounded overflow-hidden shadow-lg">
        {{-- <img class="w-full" src="/forest.jpg" alt="Forest"> --}}
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Grade 11</div>
          <p class="text-gray-700 text-base">
            Male
          </p>
          <p class="text-gray-700 text-base">
            Female
          </p>
        </div>
        {{-- <div class="px-6 pt-4 pb-2">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Female</span>
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
        </div> --}}
      </div>
  
        <!--Card 6-->
        <div class="rounded overflow-hidden shadow-lg">
          {{-- <img class="w-full" src="/forest.jpg" alt="Forest"> --}}
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Grade 12</div>
            <p class="text-gray-700 text-base">
              Male
            </p>
            <p class="text-gray-700 text-base">
                Female
              </p>
          </div>
          {{-- <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Male</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Female</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
          </div> --}}
        </div>

  </div>
</div>

</body>
</html>


@endsection