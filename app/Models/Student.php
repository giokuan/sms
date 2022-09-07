<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;





class Student extends Model
{
    use HasFactory;

    // public function setDateOfBirthAttribute($value)
    // {
    //     $this->attributes['dateofbirth'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }


//     public function getDateOfBirthAttribute($value)
// {
//     return Carbon::parse($value)->format('m/d/Y');
// }


// protected $dateFormat = 'U';

}
