<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Student extends Model
{
    use HasFactory;

    protected $table ='students';
    protected $fillable = [

        'lastname',
        'firstname',
        'middlename',
        
        // 'lrn',
        // 'age',
        'gender',
        'dateofbirth',
        'grade',
        'section',

        'email',
        'photo',
        'religion',
        'nationality',

        'fathersname',
        'mothersname',
        'foccupation',
        'moccupation',
        'phone',
        'nationality',
        'address',
        'user_id'

    ];

// relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    // relationship to student grade
    // public function studentgrade(){
    //     return $this->hasMany(StudentGrade::class, 'student_id');
    // }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('lastname', 'like', '%'.$search.'%')
                ->orWhere('firstname', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%');
    }

    // public function showData(){
    //     return $this->belongsTo(User::class);
    // }
}
