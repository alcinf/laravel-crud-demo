<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index', ['students' => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create', ['levels' => Level::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ //Abram: Form fields are validated 08/05/2023
             'enrollment' => 'required|unique:students|max:10'
            ,'name' => 'required|max:255'
            ,'birthdate' => 'required|date'
            ,'phone' => 'required|'
            ,'email' => 'nullable|email'
            ,'level' => 'required'
        ]);

        $student = new Student(); //Abram: The date are mapping to save in database 08/05/2023
        $student->enrollment = $request->input('enrollment');
        $student->name = $request->input('name');
        $student->birthdate = $request->input('birthdate');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->level_id = $request->input('level');
        $student->save(); //Abram: Data is saved 08/05/2023

        return view('students.message', ['msg'=>'Record saved']); //Abram: Message of success to final user 08/05/2023
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('students.edit', ['student'=>Student::find($id), 'levels' => Level::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([ //Abram: Form fields are validated 09/05/2023
             'enrollment' => 'required|max:10|unique:students,enrollment,'.$id
            ,'name' => 'required|max:255'
            ,'birthdate' => 'required|date'
            ,'phone' => 'required|'
            ,'email' => 'nullable|email'
            ,'level' => 'required'
        ]);

        $student = Student::find($id); //The record is located and recovered 09/05/2023
        $student->enrollment = $request->input('enrollment'); //Abram: The date are mapping to save in database 09/05/2023
        $student->name = $request->input('name');
        $student->birthdate = $request->input('birthdate');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->level_id = $request->input('level');
        $student->save(); //Abram: Data is saved 09/05/2023

        return view('students.message', ['msg'=>'Record updated']); //Abram: Message of success to final user 09/05/2023
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id); //The record is located and recovered 09/05/2023
        $student->delete(); //Abram: Data is deleted 09/05/2023
        return redirect('students'); //Abram: Redirect to students list 09/05/2023
    }
}
