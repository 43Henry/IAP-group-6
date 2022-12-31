<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $input = 
        [
            'unit_marks' =>
            [
                'IAP' => '50',
                'AN' => '100'
            ]
        ];
        $student = Student::create($input);
        dd($student -> unit_marks);
    }
}
