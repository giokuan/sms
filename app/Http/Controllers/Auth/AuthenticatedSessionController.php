<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
        public function store(LoginRequest $request)
        {
            $request->authenticate();

            $request->session()->regenerate();

            // This will check on what user type is the user and redirect them to page they belong
            if(Auth::user()->user_type === 'Student'){
                return redirect(RouteServiceProvider::StudentHOME);
            }
            else{
                return redirect()->intended(RouteServiceProvider::HOME);
            }
            // return redirect()->intended(RouteServiceProvider::HOME);
        }

 
        // public function login(Request $request)
        // {
        //     $input = $request->all();
        //     $this->validate($request,[
        //         'email'=>'required|email',
        //         'password'=> 'required'
        //     ]);

        //     if(auth()->attempt(['email'=>$input["email"], 'password'=>$input["password"]]));
        //     {
        //             if(auth()->user()->user_type == 'admin')
        //             {
        //                 return redirect()->route('home.admin');
        //             }

        //             else if(auth()->user()->user_type == 'student')
        //             {
        //                 return redirect()->route('home.student');
        //             }
                    
        //             else 
        //             {
        //                 return redirect()->route('home');
        //             }

              
        //     }
           
            
        //         return redirect()->route("login")->with("error", 'Incorrect email');
            
        // }



    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
