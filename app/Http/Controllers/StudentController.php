<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Announcements;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;



class StudentController extends Controller
{
    public function studentAllList(){
        $data = Student::get();
        // return $data;
        // $data = array("students", Student::table('students')->orderBy('created_at', 'desc'));
        return view('pages.student-all-list', compact('data'));
    }

    public function addStudent(){

        return view('pages.add-student');
    }

    public function saveStudent(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            // 'email'=>'required|email',
            'grade'=>'required',
            'section'=>'required',
            'photo'=>'required',
            'religion'=>'required',
            'gender'=>'required',
            'dateofbirth'=>'required',
            'fathersname'=>'required',
            'mothersname'=>'required',
            'foccupation'=>'required',
            'moccupation'=>'required',
            'phone'=>'required',
            'nationality'=>'required',
            'address'=>'required',
        ]);
        // dd($request->all());
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $grade = $request->grade;
        $section = $request->section;
        // $photo = $request->photo;
        $gender = $request->gender;
        $religion = $request->religion;
        $dateofbirth = $request->dateofbirth;
        $fathersname = $request->fathersname;
        $mothersname = $request->mothersname;
        $foccupation = $request->foccupation;
        $moccupation = $request->moccupation;
        $phone = $request->phone;
        $nationality = $request->nationality;
        $address = $request->address;

        $stud = new Student();
        $stud->user_id = auth()->user()->id;
        $stud->lastname = $lastname;
        $stud->firstname = $firstname;
        $stud->middlename = $middlename;
        $stud->email = auth()->user()->email;
        $stud->grade = $grade;
        $stud->section = $section;

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $stud->photo = $filename;
        }
        
        $stud->gender = $gender;
        $stud->religion = $religion;
        $stud->dateofbirth = $dateofbirth;
        $stud->fathersname = $fathersname;
        $stud->mothersname = $mothersname;
        $stud->foccupation = $foccupation;
        $stud->moccupation = $moccupation;
        $stud->phone = $phone;
        $stud->nationality = $nationality;
        $stud->address = $address;
        $stud->save();

        if(auth()->user()->user_type === 'Student'){
            return redirect()->to('student/home');
        }
        else{
            return redirect()->back()->with('success','Student Added Succesfuly');
        }
    }

    public function editStudent($id){
        $data = Student::where('id', '=', $id)->first();
        return view('pages.edit-student', compact('data'));
    }

    public function updateStudent(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            // 'email'=>'required|email',
            'grade'=>'required',
            'section'=>'required',
            // 'photo'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'gender'=>'required',
            'dateofbirth'=>'required',
            'fathersname'=>'required',
            'mothersname'=>'required',
            'foccupation'=>'required',
            'moccupation'=>'required',
            'phone'=>'required',
            'nationality'=>'required',
            'address'=>'required',
        ]);

        $data = Student::find($request->id);

        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->email = $request->email;
        $data->grade = $request->grade;
        $data->section = $request->section;

        if($request->hasfile('photo'))
        {
            $destination = 'uploads/students/'.$data->photo;
            if(File::exists($destination))
            {
             File::delete($destination);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $data->photo = $filename;
        }


        // $data->photo = $request->photo;
        $data->gender = $request->gender;
        $data->dateofbirth = $request->dateofbirth;
        $data->fathersname = $request->fathersname;
        $data->mothersname = $request->mothersname;
        $data->foccupation = $request->foccupation;
        $data->moccupation = $request->moccupation;
        $data->phone = $request->phone;
        $data->nationality = $request->nationality;
        $data->address = $request->address;
        $data->save();

      
        return redirect()->back()->with('success','Student Updated Succesfuly');
       
        
    }

    public function deleteStudent($id){
        Student::where('id', '=', $id)->delete();
        return redirect()->to('/student-all-list')->with('success','Student deleted Succesfuly');
    }

    public function studentProfile($id){
        $data = Student::where('id', '=', $id)->first();
        return view('student-pages.profile', compact('data'));
    }

   
    public function showStudentData(){

        $datas = Student::where('user_id', '=', auth()->id())->first();
        
        return view('student-pages.profile', compact('datas'));
    }
    public function showStudentGrade(){

        return view('student-pages.grades');
    }
    public function showStudentSchedule(){

        return view('student-pages.schedule');
    }
    public function showStudentClassmates(){

        // $countryID = 1;
        // $countryData = Country::find($countryID);

        $student = Student::where('user_id', '=', auth()->id())->first();

        // dd($student->user_id);

        $datas = Student::all()->where('section', '=', $student->section)->where('grade', '=', $student->grade);
        
        // ->where('section', '=', $student->section)

        return view('student-pages.classmates', compact('datas'));
    }
}

