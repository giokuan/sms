@extends('partials.__sidebar')
@section('content')	

<div class="grid grid-cols-4 gap-4">

    <div class="col-span-7 md:col-start-1 md:col-end-3 inline-flex flex-col gap-2 bg-white dark:bg-dark-eval-1 p-4 rounded-lg">
        {{-- Subject Name and teacher goes here --}}
        <div class="border-b-2 py-2 border-[#001F52] dark:border-[#FFFFFF]">
            <p>Subject : Subject Number 1</p>
        </div>
    
        {{-- 1st to 4th grading goes here --}}
        <div id="grades" class="inline-flex flex-col justify-between gap-2">
            <div class="inline-flex flex-row">
                <div class="flex flex-col">
                    <p class="inline p-2 rounded-md bg-[#F3F4F6] dark:bg-[#151823]">1st Grading</p>
                    <p class="p-2">75</p>
                </div>
            </div>
            <div class="inline-flex flex-row">
                <div class="flex flex-col">
                    <p class="inline p-2 rounded-md bg-[#F3F4F6] dark:bg-[#151823]">2nd Grading</p>
                    <p class="p-2">75</p>
                </div>
            </div>
            <div class="inline-flex flex-row">
                <div class="flex flex-col">
                    <p class="inline p-2 rounded-md bg-[#F3F4F6] dark:bg-[#151823]">3rd Grading</p>
                    <p class="p-2">75</p>
                </div>
            </div>
            <div class="inline-flex flex-row">
                <div class="flex flex-col">
                    <p class="inline p-2 rounded-md bg-[#F3F4F6] dark:bg-[#151823]">4th Grading</p>
                    <p class="p-2">75</p>
                </div>
            </div>
        </div>
    
        {{-- Final grade goes here --}}
        <div class="inline-flex flex-row">
            <div class="flex flex-col">
                <p class="inline p-2 rounded-md bg-[#F3F4F6] dark:bg-[#151823]">Final Grade</p>
                <p class="p-2 font-semibold">75</p>
            </div>
        </div>
    </div>

</div>

<style>
@media screen and (min-width: 390px) {
    #grades {
        flex-direction: row;
    }
}
</style>

@endsection