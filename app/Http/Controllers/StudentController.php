<?php

namespace App\Http\Controllers;

use App\Imports\SImport;
use App\Imports\StudentImport;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{

    function index(Request $request)
    {
        $id = $request->input('id');
        $keyword = $request->input('keyword');
        $get_students =  Student::getStudent($id,$keyword);
        return view('index', ['get_students' => $get_students]);
        
    }
    
    function importView()
    {
        return view('user-import');
    }

    function getStudentById($student_id)
    {
        $get_student =  Student::getStudentById($student_id);
        return view('student_detail', ['get_student' => $get_student]);
    }

    function import(Request $request)
    {

        if (file_exists($request->file('file'))) {
            Excel::import(new SImport, $request->file('file'));
            return redirect('/import')-> with('success','Import success!!!');
        }
        return 'input file';
    }

    function clearTable()
    {
        DB::table('transcripts')->delete();
        DB::table('students')->delete();
        return redirect()->back();
    }
}
