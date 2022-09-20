<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    // index -> list all student -- R
    public function index() {
        //$students = Student::all()->toArray();
        //$students = Student::where('faculty', 1)->get()->toArray();
        $students = Student::all()->toArray();
        //var_dump($students);
        $MyName = "Tar";
        return view("student.index")->with(
            compact([
                'students',
                'MyName'
            ])
        );
    }

    // create -> insert new student -- C
    public function create() {
        return view("student.form");
    }

    // store -> insert student to db  -- C
    public function store(Request $request) {
        
    }

    // update -> update student info -- U
    public function update($student_id) {
        
    }

    // delete -> delete exist student -- D
    public function delete($student_id) {
        
    }

    // show -> show student info -- R
    public function show($student_id) {
        
    }
}
