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

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('lastname', 'like', '%'.$search.'%')
                ->orWhere('firstname', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%');
    }


}
