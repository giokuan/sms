@extends('partials.__sidebar')
@section('content')	

@foreach($querys as $query)
<div class="p-10 flex flex-row bg-gray-200 dark:bg-gray-800 mb-8 rounded-md ">
  <!--Card 1-->
  <div class=" w-full lg:max-w-full items-center">
     
          <p class="text-gray-900 dark:text-gray-100 font-semibold text-xl">{{$query->title}}</p>

          <p class="text-gray-800 dark:text-gray-300 font-normal text-base my-2 ">{{$query->message}}</p>

          <div class="flex justify-center">
            <img src="{{url('uploads/announcement/'.$query->photo)}}" alt="announcement photo">
          </div>

  </div>
</div>
<hr class="mb-5 text-gray-900">
@endforeach


@endsection