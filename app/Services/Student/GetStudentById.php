<?php

namespace App\Services\Student;

use App\Models\Student;

class GetStudentById extends Student
{

    function getStudentById($student_id)
    {
        return Student::select()
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
            ->where('students.student_id', 'like', '%' . $student_id . '%')
            ->first();
    }
}
