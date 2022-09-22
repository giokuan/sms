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
        return view('adminHome');
    }

    public function teacherHome()
    {
        $querys = Announcements::get();

        return view('teacherHome', compact('querys'));
        // return view('teacherHome');
    }
}
