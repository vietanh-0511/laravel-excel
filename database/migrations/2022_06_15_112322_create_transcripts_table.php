<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcripts', function (Blueprint $table) {
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
            $table->foreign('student_id')->references('student_id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transcripts');
    }
}
