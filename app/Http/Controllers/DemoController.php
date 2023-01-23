<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //In This Controller I have Perform Query Builder method to perform crud and databse Querys.
    public function ReadQueryBuilder(){
        //This Will Create Instance of Databse table and allow as to perform operation
        //$student = DB::table('students');
        //get data from Database table using Query Builder
        //$students = DB::table('students')->get();//this will simply run SELECT * From students;
        //return view('display',compact('students'));
        $students = DB::table('students')->first();//This Will Give only First record from the data base table
        dd($students);

    }

}
