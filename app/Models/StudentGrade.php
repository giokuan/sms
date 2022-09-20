<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    use HasFactory;

    protected $table ='grades';
    protected $fillable = [

        'grading_period',
        'lastname',
        'firstname',
        'english',
        'filipino',
        'mathematics',
        'social_studies',
        'science',
        'home_economics',
        'values_education',
        'music',
        'arts',
        'physical_education',
        'health',
        'average'

    ];

    
// relationship to students
    public function students()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('lastname', 'like', '%'.$search.'%')
                ->orWhere('firstname', 'like', '%'.$search.'%');
                // ->orWhere('email', 'like', '%'.$search.'%');
                // ->orWhere('section', 'like', $search);
    }

}
