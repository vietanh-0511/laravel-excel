<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id',20)->unique();
            $table->string('student_name', 50);
            $table->date('date_of_bitrh');
            $table->string('place_of_birth',20);
            $table->string('gender',5);
            $table->string('phone',20);
            $table->string('school_name',50);
            $table->string('class',10);
            $table->string('district',20);
            $table->string('permanent_residence',100);
            $table->string('ethnic',20);
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
}
