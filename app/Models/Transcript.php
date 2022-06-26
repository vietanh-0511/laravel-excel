<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Transcript extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    protected $fillable = [
        'student_id',
        'first_grade_point',
        'second_grade_point',
        'third_grade_point',
        'forth_grade_point',
        'fifth_grade_point',
        'five_year_point',
        'priority_point',
        'total_point',
        'note'
    ];
}
