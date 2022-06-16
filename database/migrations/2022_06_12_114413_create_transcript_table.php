<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranscriptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcript', function (Blueprint $table) {
            $table->string('student_id')->unique();
            $table->integer('first_grade_point');
            $table->integer('second_grade_point');
            $table->integer('third_grade_point');
            $table->integer('forth_grade_point');
            $table->integer('fifth_grade_point');
            $table->integer('five_year_point');
            $table->integer('priority_point');
            $table->integer('total_point');
            $table->string('note');
            $table->foreign('student_id')->references('student_id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transcript');
    }
}
