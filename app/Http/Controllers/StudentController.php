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
        $student = Student::all();
        // dd($car);
        return view ('student.index',[
            'students' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student.from');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Student::insert($request->except('_token'));
        // // dd(1);
        // return redirect()->back();
        //Student::insert($request->except('_token'));
        if($request->has('id')){
            $c = Student ::find($request->id);
        $c->studentcode = $request->studentcode;
        $c->firstname = $request->firstname;
        $c->lastname = $request->lastname;
        $c->nickname = $request->nickname;
        $c->sex = $request->sex;
        $c->city = $request->city;
        $c->country = $request->country;
        $c->email = $request->email;
        $c->phone= $request->phone;
        $c->update();
        }else{
        $c = new Student();
        $c->studentcode = $request->studentcode;
        $c->firstname = $request->firstname;
        $c->lastname = $request->lastname;
        $c->nickname = $request->nickname;
        $c->sex = $request->sex;
        $c->city = $request->city;
        $c->country = $request->country;
        $c->email = $request->email;
        $c->phone= $request->phone;
        $c->save();
        }
        //return redirect()->back();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // dd($student);
        return view('student.from', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //dd($student);
        $student ->delete();
        return redirect()->route('students.index');
    }
    public function delete(Student $student)
    {
        //dd($student);
        $student ->delete();
        return redirect()->route('students.index');
    }
}
