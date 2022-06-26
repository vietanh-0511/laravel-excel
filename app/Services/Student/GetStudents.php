<?php

namespace App\Services\Student;

use App\Models\Student;
use App\Models\Transcript;

use function PHPUnit\Framework\isNull;

class GetStudents extends Student
{
    function getStudents()
    {
        return Student::select()
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
            ->get();
    }

    function getStudentsByKeyword($id, $keyword)
    {

        $selectJoin = Student::select()
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id');

        if ($id != '') {
            return $selectJoin
                ->where('students.student_id', 'like', '%' . $id . '%')
                ->get();
        }
        return $selectJoin
            ->where('students.student_name', 'like', '%' . $keyword . '%')
            ->get();
    }
}
