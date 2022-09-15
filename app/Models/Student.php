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
        'age',
        'gender',
        'dateofbirth',
        'grade',
        // 'section',

        'email',
        'photo',
        'religion',
        'nationality',

        'fathersname',
        'mothersname',
        'foccupation',
        'moccupation',
        'phone',
        'address'

    ];

}
