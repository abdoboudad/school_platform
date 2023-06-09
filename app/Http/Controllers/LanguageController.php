<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function languages(){
        $languages = Courses::all();
        return view('admin.science.languages',compact('languages'));
    }
    public function courses($id){
        $courses = Courses::where('science',$id)->get();
        return view('admin.science.courses',compact('courses'));
    }
}
