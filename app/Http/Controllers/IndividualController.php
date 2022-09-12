<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class IndividualController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function studentDashboard() {
        return view('student-dashboard');
      }
}
