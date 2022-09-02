<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $data = Student::get();
        // return $data;
        return view('pages.student-all-list', compact('data'));
    }

    public function addStudent(){

        return view('pages.add-student');
    }

    public function saveStudent(Request $request){

    }
}
