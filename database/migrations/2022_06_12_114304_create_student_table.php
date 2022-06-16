<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('student_id')->unique();
            $table->string('student_name');
            $table->date('date_of_bitrh');
            $table->string('place_of_birth');
            $table->string('gender');
            $table->string('phone');
            $table->string('school_name');
            $table->string('class');
            $table->string('district');
            $table->string('permanent_residence');
            $table->string('ethnic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
