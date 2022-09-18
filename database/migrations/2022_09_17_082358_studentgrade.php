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
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('gradingperiod');
            $table->integer('english');
            $table->integer('filipino');
            $table->integer('mathematics');
            $table->integer('social_studies');
            $table->integer('science');
            $table->integer('home_economics');
            $table->integer('values_education');
            $table->integer('music');
            $table->integer('arts');
            $table->integer('physical_education');
            $table->integer('health');
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
