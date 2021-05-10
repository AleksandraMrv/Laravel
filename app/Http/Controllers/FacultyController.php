<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController extends Controller
{
    public function all(){
        $faculties=Faculty::all();
        return view('faculty',['faculties'=>$faculties]);
    }
}
