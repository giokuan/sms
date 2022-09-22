{{-- 
<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('All Teachers') }}
            </h2>
          
        </div>
    </x-slot>

    
    <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
 

    
    <div class="overflow-hidden overflow-x-auto border border-gray-100 rounded">
        <table class="min-w-full text-sm divide-y  divide-gray-200">
          <thead>
            <tr class="bg-gray-50 uppercase dark:bg-gray-600 dark:text-white">
              
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">photo</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Id</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Last Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">First Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Middle Name</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Gender</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Email</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Religion</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Date of Birth</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Phone Number</th>
         
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Address</th>
              <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Action</th>
            </tr>
          </thead>
         
     
          <tbody class="divide-y divide-gray-100 ">
       

            @foreach($data as $teach)
            
            
                <tr class="capitalize">
                   
                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap">
             
                        <a href="{{url('edit-teacher/'.$teach->id)}}"><img src="{{asset('uploads/teachers/'.$teach->photo)}}" width="40" height="40" alt="image" class="rounded-md"></a>
                  
                </td>
                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap"> {{$teach->id}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$teach->lastname}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$teach->firstname}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$teach->middlename}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap">{{$teach->gender}}</td>
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap lowercase">  {{$teach->email}}</td>
                 
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$teach->religion}}</td>

                  <td class="px-4 py-2 font-medium text-gray-900 dark:text-gray-400 whitespace-nowrap">{{$teach->dateofbirth}}</td>
        
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap"> {{$teach->phone}}</td>
  
                  <td class="px-4 py-2 text-gray-700 dark:text-gray-400 whitespace-nowrap">{{$teach->address}}</td>

                  <td class="flex items-center py-4 px-6 space-x-3">
       

                    <a href="{{url('edit-teacher/'.$teach->id)}}" >  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3F83F8" class="w-6 h-6">
                        <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                        <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                      </svg>
                      </a>
                   
                    <a href="{{url('delete-teacher/'.$teach->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#F05252" class="w-6 h-6" >
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                      </svg>
                      
                      </a>

                </td>
                </tr>

                
                
            @endforeach
            @include('sweetalert::alert')
          
           
        </tbody>
    </table>
    
</div>





</div>
<style>
.table {
    border-spacing: 0 15px;
}

i {
    font-size: 1rem !important;
}

.table tr {
    border-radius: 20px;
}

tr td:nth-child(n+5),
tr th:nth-child(n+5) {
    border-radius: 0 .625rem .625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
    border-radius: .625rem 0 0 .625rem;
}
</style>
    </div>
</x-app-layout>



 --}}
 @extends('partials.__sidebar')

 @section('content')	
 <div class="p-10 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 ">
 @livewireStyles

 <div> <livewire:teachers-table></div>
 </div>

 @livewireScripts
 @endsection