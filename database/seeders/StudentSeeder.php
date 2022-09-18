<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'user_id'=>'2',
            'lastname' => 'John Addison',
            'firstname' => 'Gio',
            'middlename' => 'sedurifa',
            'gender'=>'male',
            'dateofbirth' => '2011-02-04',
            'grade'=> '7',
            'section'=>'mars',
            'email'=>'john@yahoo.com',
            'religion'=> 'Catholic',
            'nationality'=>'filipino',
            'fathersname'=> 'eddie',
            'mothersname'=>'maris',
            'foccupation'=>'welder',
            'moccupation'=>'housewife',
            'phone'=>'0231554454',
            'address'=>'tipaz san juan'


        ]);
    }

    //     for($count=0;$count<10;$count++){
    //         DB::table('students')->insert([
    //             // 'user_id' => ('id')->on('users')->onDelete('cascade'),
    //             'lastname' => Str::random(10).'@gmail.com',
    //             'firstname'  => Str::random(10),
    //             'middlename' =>Str::random(10),
    //             'gender' =>Str::random(10),
    //             'dateofbirth' =>Str::random(10),
    //             'grade' =>Str::random(10),
    //             'section' =>Str::random(10),
    //             'email' =>Str::random(10),
    //             'religion' =>Str::random(10),
    //             'nationality' =>Str::random(10),
    //             'fathersname' =>Str::random(10),
    //             'mothersname' =>Str::random(10),
    //             'foccupation' =>Str::random(10),
    //             'moccupation' =>Str::random(10),
    //             'phone' =>Str::random(10),
    //             'address' =>Str::random(10),

    //             // 'updated_at' => date("Y-m-d H:i:s"),
    //             // 'created_at' => date("Y-m-d H:i:s"),
                
    //         ]);
    //     }
    // }
}


