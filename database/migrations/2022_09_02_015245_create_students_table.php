<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');

            // $table->integer('lrn');
            // $table->integer('age');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('grade');
            // $table->string('section');

            $table->string('email');
            $table->string('photo');
            $table->string('religion');
            $table->string('nationality');
            
            $table->string('fathersname');
            $table->string('mothersname');
            $table->string('foccupation');
            $table->string('moccupation');
            $table->string('phone');
            $table->text('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
