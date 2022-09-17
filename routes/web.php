<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\HomeController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Student;
use App\Models\User;
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


Route::middleware(['auth', 'admin-middleware:student'])->group(function(){

    Route::get('/home',[HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth', 'admin-middleware:admin'])->group(function(){

    Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('admin.home');
});


Route::middleware(['auth', 'admin-middleware:teacher'])->group(function(){

    Route::get('/teacher/home',[HomeController::class, 'teacherHome'])->name('teacher.home');
});



// student-dashboard
Route::get('home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

// for completing information of the student
Route::get('home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('student/home', function() {
    return view('student-pages.home');
})->middleware(['auth', 'verified'])->name('student-home');

Route::get('student/profile', function() {
    return view('student-pages.profile')->with('students', Student::find(1)->where('user_id', Auth::id())
    ->first());
})->middleware(['auth', 'verified'])->name('student-profile');

Route::get('student/grades', function() {
    return view('student-pages.grades');
})->middleware(['auth', 'verified'])->name('student-grades');

Route::get('student/schedule', function() {
    return view('student-pages.schedule');
})->middleware(['auth', 'verified'])->name('student-schedule');

Route::get('student/classmates', function() {
    return view('student-pages.classmates');
})->middleware(['auth', 'verified'])->name('student-classmates');

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');



require __DIR__ . '/auth.php';


Route::get('student-all-list',[StudentController::class,'studentAllList']);
Route::get('add-student',[StudentController::class,'addStudent']);
Route::post('save-student',[StudentController::class,'saveStudent']);
Route::get('edit-student/{id}',[StudentController::class,'editStudent']);
Route::post('update-student',[StudentController::class,'updateStudent']);
Route::get('delete-student/{id}',[StudentController::class,'deleteStudent']);

Route::get('profile',[StudentController::class,'studentProfile']);

Route::get('add-grade',[StudentController::class,'addGrade']);


Route::get('teacher-all-list',[TeachersController::class,'teacherAllList']);
Route::get('add-teacher',[TeachersController::class,'addTeacher']);
Route::post('save-teacher',[TeachersController::class,'saveTeacher']);
Route::get('edit-teacher/{id}',[TeachersController::class,'editTeacher']);
Route::post('update-teacher',[TeachersController::class,'updateTeacher']);
Route::get('delete-teacher/{id}',[TeachersController::class,'deleteTeacher']);



Route::get('teachers-dashboard',[TeachersController::class,'teachersDashboard'])->name('teacher');
