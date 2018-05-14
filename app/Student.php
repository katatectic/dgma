<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Student
{
    private $table_name = 'students';

    public function getAllStudents() {
         return DB::table($this->table_name)->get(); // ->paginate(2);
    }

    public function deleteStudent($id) {
        return DB::table($this->table_name)->where('id', $id)->delete();
    }

    public function addStudent() {
        return DB::table($this->table_name)->insert();
    }

    public function insertStudent($name, $surname, $phone) {
        return DB::table($this->table_name)->insert(['name' => $name, 'surname' => $surname, 'phone' => $phone]);
    }

    public function getStudForEdit($id) {
        return DB::table($this->table_name)->where('id', $id)->first();
    }

    public function updateStudent($id, $name, $surname, $phone) {
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'phone' => $phone]);
    }
    
}
