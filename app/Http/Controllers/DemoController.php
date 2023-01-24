<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //In This Controller I have Perform Query Builder method to perform crud and databse Querys.
    public function ReadQueryBuilder(){
        //This Will Create Instance of Databse table and allow us to perform operation
        //$student = DB::table('students');

        //get data from Database table using Query Builder
        //$students = DB::table('students')->get();//this will simply run SELECT * From students;
        //return view('display',compact('students'));

        //$students = DB::table('students')->first();//This Will Give only First record from the data base table

        //where() and find()[is for primary key]  Method is use to find the coloumn
        //$students = DB::table('students')->where('sem','4')->first();
        //$students = DB::table('students')->where('student_id','21MCA155');

        //$students = DB::table('students')->where('sem','4')->get()->pluck('student_id','fname')//it retrive list of coloumn attrinute
        //$students = DB::table('students')->where('fname','RaviThakor')->value('student_id');//retirive psrticular column value
        //dd($students);

        //display records in smalls chunk
        // DB::table('students')->orderBy('student_id')->chunk(20,function($students){
        //     foreach ($students as $stud) {
        //         echo $stud->fname.' : ';
        //         echo $stud->course.' - '.$stud->sem.'<br>';
        //     }
        //     return false;//it will stop the loop and display only one chunk
        // });
        //return $students;

    }

}
