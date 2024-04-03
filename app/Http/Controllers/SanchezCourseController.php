<?php

namespace App\Http\Controllers;

use App\Models\SanchezCourse;
use Illuminate\Http\Request;

class SanchezCourseController extends Controller
{
    
    public function index(){
       $courses = SanchezCourse::all();
        return view("sanchez_course",compact('courses'));
        
    
    }
}
