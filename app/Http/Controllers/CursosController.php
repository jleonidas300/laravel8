<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;


class CursosController extends Controller
{
    public function home()
    {
        return view('index');
    }

    //this is to watch an individual course
    public function ShowCourse(Course $SeeCurso)
    {
        return view('ShowCourse', compact('SeeCurso'));
    }
}
