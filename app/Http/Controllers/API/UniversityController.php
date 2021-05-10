<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities=University::all();

        return response()->json([
            'success'=>true,
            'universities'=>$universities
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
        $university=University::create($input);
        return response()->json([
            'success'=>true,
            'university'=>$university
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        return response()->json([
            'success'=>true,
            'university'=>$university
        ],200);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        if(isset($request->name)){
            $university->name=$request->name;
        }
        if(isset($request->address)){
            $university->address=$request->address;
        }
        if(isset($request->world_rank)){
            $university->world_rank=$request->world_rank;
        }
        if(isset($request->description)){
            $university->description=$request->description;
        }
        $university->save();
        return response()->json([
            'success'=>true,
            'university'=>$university
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        $university->delete();
        return response()->json([
             'success'=>true
         ],200);
    }
}
