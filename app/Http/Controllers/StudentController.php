<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = Student::all();
       return view('display',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //create Method
        Student::create([
            'student_id' => $request->sid,
            'fname' => $request->firstname . $request->lastname,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'sem' => $request->sem,
            'course' => $request->course,
        ]);
        //Insert using Save Method
        // $Student = new Student;
        // $Student->student_id = $request->sid;
        // $Student->fname = $request->firstname.$request->lastname;
        // $Student->gender = $request->gender;
        // $Student->dob = $request->dob;
        // $Student->sem = $request->sem;
        // $Student->course = $request->course;
        // $Student->save();
        //Student::create($request->all());
        $msg = 'Student Is Created';
        return redirect('student')->with('msg',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student_id)
    {
        $student = Student::find($student_id);
        return view('update',['student'=>$student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('student');
    }
}
