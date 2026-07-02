<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function packages()
    {
        $name = auth()->user()->name;

        return view('packages', compact('name'));
    }

    public function freeLecture()
    {
        $name = auth()->user()->name;

        return view('free_lecture', compact('name'));
    }
    
}
