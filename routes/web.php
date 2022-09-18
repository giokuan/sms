<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentGradeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Student;
use App\Models\User;
use App\Models\StudentGrade;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Auth::routes();

// this is student home
Route::middleware(['auth','student-middleware'])->group(function(){

    Route::get('/home',[HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth','admin-middleware'])->group(function(){

    Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('admin.home');
});


Route::middleware(['auth','teacher-middleware'])->group(function(){

    Route::get('/teacher/home',[HomeController::class, 'teacherHome'])->name('teacher.home');
});

// student-dashboard
Route::get('home', function () {
    return view('home');
})->middleware(['auth', 'verified','student-middleware'])->name('home');

// for completing information of the student
Route::get('home', function () {
    return view('home');
})->middleware(['auth','student-middleware'])->name('home');

Route::get('student/home', function() {
    return view('student-pages.home');
})->middleware(['auth', 'verified','student-middleware'])->name('student-home');

Route::get('student/profile', function() {
    return view('student-pages.profile')->with('students', Student::find(1)->where('user_id', Auth::id())
    ->first());
})->middleware(['auth', 'verified','student-middleware'])->name('student-profile');

Route::get('student/grades', function() {
    return view('student-pages.grades')->with('students', Student::find(1)->where('user_id', Auth::id())
    ->first());
})->middleware(['auth', 'verified','student-middleware'])->name('student-grades');

Route::get('student/schedule', function() {
    return view('student-pages.schedule')->with('students', Student::find(1)->where('user_id', Auth::id())
    ->first());
})->middleware(['auth', 'verified','student-middleware'])->name('student-schedule');

Route::get('student/classmates', function() {
    return view('student-pages.classmates')->with('students', Student::find(1)->where('user_id', Auth::id())
    ->first());
})->middleware(['auth', 'verified','student-middleware'])->name('student-classmates');

// useless routes
// Just to demo sidebar dropdown links active states.
// Route::get('/buttons/text', function () {
//     return view('buttons-showcase.text');
// })->middleware(['auth'])->name('buttons.text');

// Route::get('/buttons/icon', function () {
//     return view('buttons-showcase.icon');
// })->middleware(['auth'])->name('buttons.icon');

// Route::get('/buttons/text-icon', function () {
//     return view('buttons-showcase.text-icon');
// })->middleware(['auth'])->name('buttons.text-icon');



require __DIR__ . '/auth.php';


Route::get('student-all-list',[StudentController::class,'studentAllList'])
        ->middleware(['auth', 'verified','teacher-middleware']);
Route::get('add-student',[StudentController::class,'addStudent'])
        ->middleware(['auth', 'verified','teacher-middleware']);
Route::post('save-student',[StudentController::class,'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent'])
        ->middleware(['auth', 'verified','teacher-middleware']);;
Route::post('update-student',[StudentController::class,'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent'])
        ->middleware(['auth', 'verified','teacher-middleware']);;

Route::get('profile',[StudentController::class,'studentProfile'])
        ->middleware(['auth', 'verified','teacher-middleware']);;

<<<<<<< HEAD
Route::get('add-grade/{id}',[StudentController::class,'addGrade']);
Route::post('save-grade',[StudentController::class,'saveGrade']);
Route::get('add-grade/{id}',[StudentController::class,'showGrade']);
=======
Route::get('add-grade',[StudentController::class,'addGrade'])
        ->middleware(['auth', 'verified','teacher-middleware']);;
>>>>>>> 466f0cbd77aff6577269b8ddf37e409ceb90d8bd

Route::get('teacher-all-list',[TeachersController::class,'teacherAllList'])
        ->middleware(['auth', 'verified','teacher-middleware']);;
Route::get('add-teacher',[TeachersController::class,'addTeacher'])
        ->middleware(['auth', 'verified','teacher-middleware']);;
Route::post('save-teacher',[TeachersController::class,'saveTeacher']);
Route::get('edit-teacher/{id}',[TeachersController::class,'editTeacher'])
        ->middleware(['auth', 'verified','teacher-middleware']);;  
Route::post('update-teacher',[TeachersController::class,'updateTeacher']);
Route::get('delete-teacher/{id}',[TeachersController::class,'deleteTeacher'])
        ->middleware(['auth', 'verified','teacher-middleware']);;

<<<<<<< HEAD
Route::get('teachers-dashboard',[TeachersController::class,'teachersDashboard'])->name('teacher');



=======
Route::get('teachers-dashboard',[TeachersController::class,'teachersDashboard'])->name('teacher')
        ->middleware(['auth', 'verified','teacher-middleware']);;
>>>>>>> 466f0cbd77aff6577269b8ddf37e409ceb90d8bd
