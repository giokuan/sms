<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Teachers;

class teachersController extends Controller
{
    public function teacherAllList(){
        $data = Teachers::get();
        // return $data;
        // $data = array("students", Student::table('students')->orderBy('created_at', 'desc'));
        return view('pages.teacher-all-list', compact('data'));
    }

    public function addTeacher(){

        return view('pages.add-teacher');
    }

    public function saveTeacher(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'email'=>'required|email',
            'photo'=>'required',
            'religion'=>'required',
            'gender'=>'required',
            'dateofbirth'=>'required',
            'phone'=>'required',
            'nationality'=>'required',
            'address'=>'required',
        ]);
        // dd($request->all());
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $email = $request->email;
        $grade = $request->grade;
        $photo = $request->photo;
        $gender = $request->gender;
        $religion = $request->religion;
        $dateofbirth = $request->dateofbirth;
        $phone = $request->phone;
        $nationality = $request->nationality;
        $address = $request->address;


        $teach = new Teachers();
        $teach->lastname = $lastname;
        $teach->firstname = $firstname;
        $teach->middlename = $middlename;
        $teach->email = $email;
       
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/teachers/',$filename);
            $teach->photo = $filename;
        }
        
        $teach->gender = $gender;
        $teach->religion = $religion;
        $teach->dateofbirth = $dateofbirth;
        $teach->phone = $phone;
        $teach->nationality = $nationality;
        $teach->address = $address;
        $teach->save();

        return redirect()->back()->with('success','Teacher Added Succesfuly');
    }

    public function editTeacher($id){
        $data = Teachers::where('id', '=', $id)->first();
        return view('pages.edit-teacher', compact('data'));
    }

    public function updateTeacher(Request $request){
        $request-> validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'email'=>'required|email',
            
            // 'photo'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'gender'=>'required',
            'dateofbirth'=>'required',
           
            'phone'=>'required',
            'nationality'=>'required',
            'address'=>'required',
        ]);

        $data = Teachers::find($request->id);
        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->email = $request->email;

        if($request->hasfile('photo'))
        {
            $destination = 'uploads/teachers/'.$data->photo;
            if(File::exists($destination))
            {
             File::delete($destination);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/teachers/',$filename);
            $data->photo = $filename;
        }


        // $data->photo = $request->photo;
        $data->gender = $request->gender;
        $data->dateofbirth = $request->dateofbirth;
        $data->phone = $request->phone;
        $data->nationality = $request->nationality;
        $data->address = $request->address;
        $data->save();

      
        return redirect()->back()->with('success','Teacher Updated Succesfuly');
       
        
    }

    public function deleteTeacher($id){
        Teachers::where('id', '=', $id)->delete();
        return redirect()->to('/teacher-all-list')->with('success','Teacher deleted Succesfuly');
    }


    public function teachersDashboard(){
        return view('/teachers-dashboard');
    }

}
