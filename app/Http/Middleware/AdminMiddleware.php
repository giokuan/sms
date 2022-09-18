<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
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
        return redirect()->to('/student/home');
       }
       else if (auth()->user()->user_type === 'Teacher'){
        return redirect()->to('/teacher/home');
       }
       else
       {
<<<<<<< HEAD
     
        return response()->json(['You do not have permission to access for this page.']);
=======
        return $next($request);
        // return redirect('/teachers-dashboard');
        // return response()->json(['You do not have permission to access for this page.']);
>>>>>>> 466f0cbd77aff6577269b8ddf37e409ceb90d8bd
       }
       
    }
}
