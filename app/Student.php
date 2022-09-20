<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'faculty'
    ];

    protected $table = 'students';
    protected $primarykey = 'student_id';

    public static function getByFaculty($faculty_id) {
        return self::where('faculty', $faculty_id)->get();
    }

    public static function insert($student_name, $lastname) {
        self::create([
            "firstname" => $student_name,
            "lastname" => $lastname,
            "birthdate" => "",
            "faculty" => 1
        ]);
    }
}
