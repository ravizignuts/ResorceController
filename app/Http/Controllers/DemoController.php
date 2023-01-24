<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

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
        //$students = DB::table('students')->where('sem','>','3')->get();
        //$students = DB::table('students')->where('fname','like','r%')->get();


        //$students = DB::table('students')->where('sem','4')->get()->pluck('student_id','fname')//it retrive list of coloumn attribute
        //$students = DB::table('students')->where('fname','RaviThakor')->value('student_id');//retrive particular column value
        //dd($students);

        //display records in smalls chunk
        // DB::table('students')->orderBy('student_id')->chunk(20,function($students){
        //     foreach ($students as $stud) {
        //         echo $stud->fname.' : ';
        //         echo $stud->course.' - '.$stud->sem.'<br>';
        //     }
        //     return false;//it will stop the loop and display only one chunk
        // });

        //Aggregates
        // $student=DB::table('students')->count();//count record
        // $student = DB::table('students')->max('sem');//return maximum VALUE
        // $student = DB::table('students')->min('sem');//return minimum VALUE
        // $student = DB::table('students')->avg('sem');//return average value
        // dd($student);

        //Check Record exists or not
            // if(DB::table('students')->where('sem','8')->exists()){
            //     dd('yes');
            // }
            // if(DB::table('students')->where('sem','8')->doesntExist()){
            //     dd('No');
            // }

        //Select particular coloumn and display
        //$student = DB::table('students')->select('student_id','fname')->where('gender','male')->get();

        //coloumn and return distinct value
//$s    $student = DB::table('students')->distinct()->get('course');
        //dd($students);

        //return $students;



    }

}
