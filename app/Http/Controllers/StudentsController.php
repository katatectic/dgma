<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function getAllStudents() {
        $stud_obj = new Student();
        $students = $stud_obj->getAllStudents();
        return view('students', ['students'=>$students]);
    }

    public function deleteStudent($id) {
        $stud_obj = new Student();
        $students = $stud_obj->deleteStudent($id);
        //return view('students', ['students'=>$students]);
    }

    public function addStudent(Request $request) {
        $stud_obj = new Student();
        if ($request->method()=='POST') {
            $name = $request['name'];
            $surname = $request['surname'];
            $phone = $request['phone'];
            $stud_obj->insertStudent($name, $surname, $phone);
        }
        //$articles = $art_class->getAllArt();
        return view('add_success');
    }

    public function editStudent($id) {
        $stud_obj = new Student();
        $student = $stud_obj->getStudForEdit($id);
        return view('stud_edit', ['student'=>$student]);
    }

    public function updateStudent(Request $request, $id) {
        $stud_obj = new Student();
        $name = $request['name'];
        $surname = $request['surname'];
        $phone = $request['phone'];
        $student = $stud_obj->updateStudent($id, $name, $surname, $phone);
        return view('add_success');
    }

}
