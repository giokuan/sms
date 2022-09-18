<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\Student::factory(10)->create();
        $this->call(StudentSeeder::class);
       
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\Student::factory(10)->create();

>>>>>>> 466f0cbd77aff6577269b8ddf37e409ceb90d8bd
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('students')->insert([
        //     'user_id' => Int::random(10),
        //     'lastname' => Str::random(10),
        //     'firstname' => Str::random(10),
        //     'middlename' => Str::random(10),
        //     'gender'=>Str::random(10),
        //     'dateofbirth'=>Str::random(10),
        //     'grade'=>Str::random(10),
        //     'section'=>Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //    'religion'=>Str::random(10),
        //    'nationality'=>Str::random(10),
        //    'fathersname'=>Str::random(10),
        //    'mothersname'=>Str::random(10),
        //    'foccupation'=>Str::random(10),
        //    'moccupation'=>Str::random(10),
        //    'phone'=>Str::random(10),
        //    'address'=>Str::random(10),

        // ]);
    }
}
