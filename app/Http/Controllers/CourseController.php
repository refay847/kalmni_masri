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
    
}
