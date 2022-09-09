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
        'email',
        'grade',
        'photo',
        'gender',
        'religion',
        'dateofbirth',
        'fathersname',
        'mothersname',
        'foccupation',
        'moccupation',
        'phone',
        'nationality',
        'address'

    ];

}
