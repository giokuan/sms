<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->user_type === 'Student')
       {
        // return $back($request);
        // return redirect()->to('/teacher/home');
        return redirect()->to('student/home');
       }
       else if (auth()->user()->user_type === 'admin'){
        return redirect()->to('dashboard');
       }
       else
       {
        return $next($request);
        // return redirect('/teachers-dashboard');
        // return response()->json(['teacher']);
       }
       
    }
}
