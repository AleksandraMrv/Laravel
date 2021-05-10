<?php

namespace App\Http\Controllers;
use App\Models\University;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function all(){
        $universities=University::all();
        return view('universities',['universities'=>$universities]);
    }
    public function show($id){
        $university=University::find($id);
        return view('university',['university'=>$university]);
    }
    public function edit($id){
        $university=University::find($id);
        return view('universityEdit',['university'=>$university]);
    }
    public function update(Request $request,$id){
        $university=University::find($id);
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
        return redirect('/university/'.$id.'/show');
    }
    public function delete($id){
        $university=University::find($id);
        $university->delete();
        return redirect('/');
    }
}
