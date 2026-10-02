<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Muhammad Khairul Ihdhar',
                'major' => 'Smart City Information Systems',
                'age'   => 20,
                'courses' => [
                    'Web Programming',
                    'Data Science',
                    'Mobile Programming'
                ]
            ]
        ];

        return view('students.index', compact('students'));  
    }
}
