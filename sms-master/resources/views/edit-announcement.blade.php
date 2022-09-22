@extends('partials.__sidebar')
@section('content')	

<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
      <h1 class="text-xl font-semibold">Edit Announcements and Activity</h1>
      
      <form  method="post" action="{{url('update-announcement')}}" class="mt-6" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" value="{{ $data->id }}" name="id" />
        {{-- <div class="flex justify-between gap-3">
        
          <span class="w-1/2">
            <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
          <input id="photo" type="file" name="photo"   class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          </span>
        </div> --}}
        <div class="flex items-center justify-center ww-full mb-4">
            <img src="{{asset('uploads/announcement/'.$data->photo)}}"  alt="image" class="h-24 w-24 object-cover rounded-full">
        </div>

        <div class=" rounded-md bg-blue-900">
            <label>
                <input type="file" class=" w-full text-md text-grey-500 p-2 text-blue-900
                file:mr-5 pl-6 file:py-1 file:px-14
                file:rounded-full file:border-0
                file:text-md file:font-medium
                file:bg-blue-900 file:text-slate-50
                hover:file:cursor-pointer hover:file:bg-blue-800
                hover:file:text-white-700
                hover:bg-blue-800" id="photo" name="photo" />
            </label>
            </div>

        <label for="title" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Title</label>
        <input id="title" value="{{$data->title}}" type="text" name="title"   class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
     

        <label for="message" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Message</label>
        <textarea  class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" name="message">{{$data->title}}</textarea>
        
        <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-blue-800  shadow-lg focus:outline-none hover:bg-blue-900 hover:shadow-none  rounded-md">
          Update Announcement
        </button>

      </form>
    </div>
    @include('sweetalert::alert')
  </div>

@endsection