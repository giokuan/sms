<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;
use Illuminate\Support\Facades\File;
use App\Models\Student;

class AnnouncementsController extends Controller
{
    
    public function announcementAllList()
    {
        $data = Announcements::get();
        return view('pages.announcement-all-list', compact('data'));

    }
    
    
    public function announcementsfunc()
    {
        return view('add-announcement');

    }

    public function editAnnouncement($id)
    {
        $data = Announcements::where('id', '=', $id)->first();
        return view('edit-announcement', compact('data'));

    }

 

    public function saveAnnouncement(Request $request)
    {
        $request-> validate([
            'photo'=>'required',
            'title'=>'required',
            'message'=>'required'
        ]);

        $title = $request->title;
        $message = $request->message;


        $ann = new Announcements();

        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/announcement/',$filename);
            $ann->photo = $filename;
        }
        $ann->title = $title;
        $ann->message = $message;
        $ann->save();

        return redirect()->back()->with('success','Announcement Posted Succesfuly');
    }


    public function updateAnnouncement(Request $request){
        $request-> validate([
            // 'photo'=>'required',
            'title'=>'required',
            'message'=>'required'

        ]);

        $data = Announcements::find($request->id);

        
        if($request->hasfile('photo'))
        {
            $destination = 'uploads/announcement/';
            if(File::exists($destination))
            {
             File::delete($destination);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/announcement/',$filename);
            $data->photo = $filename;
        }


        $data->title = $request->title;
        $data->message = $request->message;
        $data->save();

        return redirect()->back()->with('success','Announcement Updated Succesfuly');

    }

    public function deleteAnnouncement($id){
        Announcements::where('id', '=', $id)->delete();
        return redirect()->to('announcement-all-list')->with('success','Announcement deleted Succesfuly');
    }


    public function studentHome(){

        $query = Announcements::get();
        // return $data;
        // $data = array("students", Student::table('students')->orderBy('created_at', 'desc'));
        return view('student-pages.home', compact('query'));

        // $query = Student::select('gender', DB::raw('count(*) as total'))
        // ->groupBy('gender')
        // ->get();
        // return view('adminHome', compact('query'));

        // $data = Student::with('gender')->where([

        //     ['grade', 'grade 7'],['gender','Male']
          
        //   ])->count();

        //   return view('admin.home', compact('data'));
        // $data = Student::where("grade",'grade 7')->get()->count();
        // return view('admin.home', compact('data'));
    }

    public function countGender()
    {
        $data = Student::where("grade",'grade 7')->get()->count();
        return view('admin.home', compact('data'));
    }


}



