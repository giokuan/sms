@extends('partials.__sidebar')
@section('content')	

@foreach($querys as $query)
<div class="p-10 flex flex-row">
  <!--Card 1-->
  <div class=" w-full lg:max-w-full items-center">
      <div class="mb-8">
     
          <p class="text-gray-900 dark:text-gray-100 font-semibold text-xl">{{$query->title}}</p>

          <p class="text-gray-800 dark:text-gray-300 font-normal text-base my-2 ">{{$query->message}}</p>

          <div class="flex justify-center">
            <img src="{{url('uploads/announcement/'.$query->photo)}}" alt="announcement photo">
          </div>

      </div>
  </div>
</div>
@endforeach


@endsection