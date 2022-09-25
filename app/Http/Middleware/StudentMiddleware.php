<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class StudentMiddleware
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
        if(auth()->user()->user_type === 'Teacher')
       {
        // return redirect()->to('student-all-list');
        return redirect()->back();
       }
       else if (auth()->user()->user_type === 'admin'){
        return redirect()->to('student-all-list');
        // return redirect()->back();
        // return $next($request);
       }
       else
       {
        return $next($request);
        // return redirect('student-dashboard');
        // return response()->json(['student']);
       }
       
    }
}
