<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
class StudentController extends Controller
{
public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Student::create([
            // 'name' => 'Ahmed',
            // 'age' => 18,
            // 'class' => '1A',
            // 'attendence' => true
             $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'school' => 'required',
            'gender' => 'required|in:Male,Female',
            'english_level' => 'required|numeric',
            'campus' => 'required',
            'terms' => 'required|accepted',
        ]);
    //      $student = new Student();
    // $student->name = 'Ahmed';
    // $student->age = 18;
    // $student->class = '1A';
    // $student->attendence = true;
    // $student->save();

        // return "Student Created Successfully";

       $data = $request->all();
$data['school'] = implode(',', $request->school);

 
Student::create($data);

return redirect('/')->with('success', 'Student created successfully!');
//  bach nkhzen multiple choix fdatabase b format

        return redirect('/');
    }
}
