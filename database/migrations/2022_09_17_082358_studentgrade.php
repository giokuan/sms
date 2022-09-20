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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('gradingperiod');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->integer('english')->nullable();
            $table->integer('filipino')->nullable();
            $table->integer('mathematics')->nullable();
            $table->integer('social_studies')->nullable();
            $table->integer('science')->nullable();
            $table->integer('home_economics')->nullable();
            $table->integer('values_education')->nullable();
            $table->integer('music')->nullable();
            $table->integer('arts')->nullable();
            $table->integer('physical_education')->nullable();
            $table->integer('health')->nullable();
            $table->integer('average')->nullable();
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
        // $table->dropForeign('student_id');
       
        
    }
};
