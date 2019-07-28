<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
class SearchController extends Controller
{
  public function hospital(){
    $hospitals = User::where('is_hospital', 1)->with('schedToday')->inRandomOrder()->paginate(3);

    return view('search-hospital',compact('hospitals'));
  }

  public function doctor(Request $request){
    $user = auth()->user();
    $doctors = User::where('id','<>',$user->id)->where('is_hospital', 0);

    if($request->firstname){
      $doctors->where('firstname','like', '%'.$request->firstname.'%');
    }
    if($request->lastname){
      $doctors->where('lastname', $request->lastname);
    }

    if($request->specialization){
      $doctors->where('specialization', $request->specialization);
    }

    $doctors = $doctors->with('schedToday')->inRandomOrder()->paginate(6);

    return view('search-doctor',compact('doctors'));
  }

  public function details($id){

     if(request()->ajax()){
      $user = User::where('id',$id)->with(['schedule'=>function($query){
        $query->orderBy('day','asc');
      }])->first();

      return response()->json($user);
    }
  }

}
