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
public function user()
{
    return $this->belongsTo(User::class, 'student_id');
}

}
