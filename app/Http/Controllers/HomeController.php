<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    } 

    public function adminHome()
    {   
        $querys = Announcements::latest('updated_at')->get();

        return view('adminHome', compact('querys'));
        // return view('adminHome');
    }

    public function teacherHome()
    {
        $querys = Announcements::latest('updated_at')->get();

        return view('teacherHome', compact('querys'));
        // return view('teacherHome');
    }
}
