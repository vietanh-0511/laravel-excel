<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Imports\UImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function importExcel()
    {
        $get_user =  User::getUser();
        return view('user-import',['get_user'=>$get_user]);
    }

    function importProcess(request $request){
        if (file_exists($request->file('file'))) {
            Excel::import(new UImport, $request->file('file')->store('temp'));
            return back();
        }
        return 'input file';

    }

    public function fileExport()
    {
        return Excel::download(new UserExport, 'users-collection.xlsx');
    }
    
    function clearTable(){
        DB::table('users')->delete();
        return redirect()->back();
    }
}
