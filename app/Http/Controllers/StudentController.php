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
        // dd($request->all());
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $username = $request->username;
        $email = $request->email;
        $gender = $request->gender;
        $religion = $request->religion;
        $dob = $request->dob;
        $fathersname = $request->fathersname;
        $mothersname = $request->mothersname;
        $foccupation = $request->foccupation;
        $moccupation = $request->moccupation;
        $phone = $request->phone;
        $nationality = $request->nationality;
        $address = $request->address;

        $stud = new Student();
        $stud->lastname = $lastname;
        $stud->firstname = $firstname;
        $stud->middlename = $middlename;
        $stud->username = $username;
        $stud->email = $email;
        $stud->gender = $gender;
        $stud->religion = $religion;
        $stud->dateofbirth = $dob;
        $stud->fathersname = $fathersname;
        $stud->mothersname = $mothersname;
        $stud->foccupation = $foccupation;
        $stud->moccupation = $moccupation;
        $stud->phone = $phone;
        $stud->nationality = $nationality;
        $stud->address = $address;
        $stud->save();

        return redirect()->back()->with('success','Student Added Succesfuly');
    }
}
