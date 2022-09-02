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
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('username');
            $table->string('email');
            $table->string('gender');
            $table->string('religion');
            $table->date('dateofbirth');
            $table->string('fathersname');
            $table->string('mothersname');
            $table->string('foccupation');
            $table->string('moccupation');
            $table->string('phone');
            $table->string('nationality');
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
