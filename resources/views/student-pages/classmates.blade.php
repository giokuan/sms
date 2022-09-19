@extends('partials.__sidebar')
@section('content')	

    <div class="grid grid-cols-12 gap-4">

        @foreach($datas as $data)
        <div class="col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">

            <div class="flex flex-col p-4 rounded-lg bg-gray-300 dark:bg-dark-eval-1">
                {{-- Classmates info goes here --}}
                <div class="border-b-2 border-[#001F52] dark:border-[#FFFFFF]">
                    <img src="/images/StudentProfile.jpg" alt="Classmates Profile" class="w-24 h-fit rounded-full">
                    <p>{{ $data->firstname." ".$data->middlename." ".$data->lastname  }}</p>
                    <p>{{ $data->grade }}</p>
                    <p>Section {{ $data->section }}</p>
                </div>

                {{-- Classmates interest goes here --}}
                {{-- <div>
                    Interest
                    <ul class="list-disc ml-6">
                        <li>Sample</li>
                        <li>Sample</li>
                        <li>Sample</li>
                    </ul>
                </div> --}}
            </div>

        </div>
        @endforeach
        
    </div>

@endsection