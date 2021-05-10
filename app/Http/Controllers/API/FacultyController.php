<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties=Faculty::all();

        return response()->json([
            'success'=>true,
            'faculties'=>$faculties
        ],200);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $faculty=Faculty::create($input);
        return response()->json([
            'success'=>true,
            'faculty'=>$faculty
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        return response()->json([
            'success'=>true,
            'faculty'=>$faculty
        ],200);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        if(isset($request->name)){
            $faculty->name=$request->name;
        }
        if(isset($request->address)){
            $faculty->address=$request->address;
        }
        if(isset($request->scientific_field)){
            $faculty->scientific_field=$request->scientific_field;
        }
        if(isset($request->university_id)){
            $faculty->university_id=$request->university_id;
        }
        $faculty->save();
        return response()->json([
            'success'=>true,
            'faculty'=>$faculty
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
       return response()->json([
            'success'=>true
        ],200);
    }
}
