<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\Transcript;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SImport implements ToCollection, WithStartRow, WithCalculatedFormulas
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {


        foreach ($collection as $row) {
            // dump($row);


            if (empty($row[0])) {
                continue;
            }

            $id = preg_replace("/\"|\\n/m", '', $row[3]);
            if (Student::where(
                'student_id',
                $id
            )->exists()) {
                continue;
            }

            Student::create([
                'student_id' => preg_replace("/\"|\\n/m", '', $row[3]),
                'student_name' => $row[5],
                'date_of_bitrh' => $row[8] . '/' . $row[7] . '/' .  $row[6],
                'place_of_birth' => $row[10],
                'gender' => $row[9],
                'phone' => $row[13],
                'school_name' => $row[1],
                'class' => $row[4],
                'district' => $row[2],
                'permanent_residence' => $row[12],
                'ethnic' => $row[11],
            ]);

            Transcript::create([
                'student_id' => preg_replace("/\\n|\\r/m", '', $row[3]),
                'first_grade_point' => $row[14],
                'second_grade_point' => $row[15],
                'third_grade_point' => $row[16],
                'forth_grade_point' => $row[17],
                'fifth_grade_point' => $row[18],
                'five_year_point' => $row[19],
                'priority_point' => $row[20],
                'total_point' => $row[21],
                'note' => $row[22],
            ]);
        }
    }
    public function startRow(): int
    {
        return 7; // return 2;
    }
}
