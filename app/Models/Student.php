<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\VarLikeIdentifier;

use function PHPUnit\Framework\isNull;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $casts = [
    //     'date_of_approval' => 'date:d-m-Y'
    // ];

    protected $fillable = [
        'student_id',
        'student_name',
        'date_of_bitrh',
        'place_of_birth',
        'gender',
        'phone',
        'school_name',
        'class',
        'district',
        'permanent_residence',
        'ethnic',
    ];

    static function getStudent($id, $keyword)
    {
        if ($id != '' && $keyword != '') {
            $findStudent = DB::table('students')
                ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
                ->where('students.student_name', 'like', '%' . $keyword . '%')
                ->get();
                
            if (!isNull($findStudent)) {
                return $findStudent;
            }
            return
            DB::table('students')
                ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
                ->where('students.student_id', 'like', '%' . $id . '%')
                ->get();
        } 
        
        elseif ($id != '' && $keyword == '') {
            return DB::table('students')
                ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
                ->where('students.student_id', 'like', '%' . $id . '%')
                ->get();
        } 
        
        elseif ($id == '' && $keyword != '') {
            return DB::table('students')
                ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
                ->where('students.student_name', 'like', '%' . $keyword . '%')
                ->get();
        }

        return DB::table('students')
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
            ->get();
    }

    static function checkStudent()
    {
        return DB::table('students')
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
            ->get();
    }

    static function getStudentById($student_id)
    {
        return DB::table('students')
            ->join('transcripts', 'students.student_id', '=', 'transcripts.student_id')
            ->where('students.student_id', $student_id)
            ->get();
    }
}
