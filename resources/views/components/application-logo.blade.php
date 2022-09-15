{{-- <svg viewBox="0 0 40 40" fill="#A855F7" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <path d="M20 3L40 8L39.5207 9.91704L20 5.03685L0.479258 9.91704L0 8L20 3Z" />
    <path d="M20 37.1475L40 32.1475L39.5207 30.2304L20 35.1106L0.479258 30.2304L0 32.1475L20 37.1475Z" />
    <path
        d="M1.16589 11.7373L5.17972 10.8111V18.1675L11.9723 10.1935L11.3548 8.95852L15.6774 8.03225L13.8249 9.88479V11.1198L6.7235 19.4562L15.0599 30.8802L16.6037 32.1152L15.9862 32.424L12.8986 31.1889L5.17972 21.095V28.4101L7.34101 29.9539L1.16589 28.4101L3.32718 27.4839V13.2811L1.16589 11.7373Z" />
    <path
        d="M16.9124 7.7235L20 7.10598L22.47 7.7235L20.9263 9.26727C20.9263 9.26727 20.7204 27.4839 20.9263 28.1014C21.1321 28.7189 21.729 30.0774 22.47 30.5714C23.3963 31.1889 27.9489 31.2883 29.1729 28.8823C29.556 28.1293 29.5872 27.9014 29.7171 26.9514C29.7393 26.7894 29.7643 26.6064 29.7945 26.3962C29.8955 25.6912 29.8895 24.8909 29.8832 24.0704C29.8817 23.8711 29.8802 23.6706 29.8802 23.47V12.3548L28.0277 9.57603V9.26727L38.8341 11.4286V12.3548L37.2903 12.9723V26.8664L38.8341 28.1014L34.2028 29.3725L35.4378 27.4839V12.9723L33.2765 11.4286L31.424 12.9723L31.1152 25.0138C31.1152 25.8618 31.017 27.1791 30.7193 28.3251C30.6106 28.7435 30.1101 29.5467 30.1101 29.5467C30.1101 29.5467 29.6731 30.2533 29.2627 30.5714C28.8853 30.8639 28.1871 31.1541 28.1871 31.1541C28.1871 31.1541 26.0347 32.0258 24.0721 32.4043C23.08 32.5957 22.1571 32.4413 21.5645 32.2043C21.541 32.1912 21.5168 32.1778 21.492 32.1641C20.9896 31.8865 20.243 31.4739 19.6681 30.5714C19.1558 29.767 18.765 28.7318 18.765 27.4839V9.57603L16.9124 7.7235Z" />
</svg> --}}
@if(Route::is('dashboard'))
    <img src="{{asset('/images/main-logo.png')}}" alt="logo" width="250px" class="mt-12">

{{-- if the route of the student is student-home --}}
@elseif (Route::is('student-home') || Route::is('student-profile') || Route::is('student-grades') || Route::is('student-schedule') || Route::is('student-classmates'))
    <div class="flex flex-col shrink ">
        <p class="text-xl font-medium leading-tight py-1 my-2 text-center text-[#FFFFFF] border-b-[1px] border-[#FFFFFF] w-11/12">
            {{ Auth::user()->user_type }}
        </p>

        <div class="flex flex-row gap-2 my-2 items-center">
            <img src="{{asset('/images/StudentProfile.jpg')}}" alt="logo" class="w-24 h-fit rounded-full">
            <div class="flex flex-col">
                <p class="font-light text-base mb-2 text-[#FFFFFF]">{{ Auth::user()->name }}</p>
                <p class="font-thin text-sm text-[#FFFFFF]">Grade</p>
                <p class="font-thin text-sm text-[#FFFFFF]">Section</p>
            </div>
        </div>
    </div>
@endif
