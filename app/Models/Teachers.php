<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $table ='teachers';
    protected $fillable = [

        'lastname',
        'firstname',
        'middlename',
        'email',
        'photo',
        'gender',
        'religion',
        'dateofbirth',
        'phone',
        'nationality',
        'address'

    ];

}
