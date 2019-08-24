<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use Location;
class SearchController extends Controller
{

  public function hospital(Request $request){

    $location = $request->location;
    $nearest = null;
    $user = auth()->user();

    if($location){
      $nearest = User::where('user_type', 2)->whereHas('hospital')->where('id','<>',$user->id)->where('address','like','%'.$location.'%')->inRandomOrder('1234')->paginate(3);
    }
    $hospitals = null;

    if($request->hospital_query){
      $hospitals = User::where('user_type', 2)->whereHas('hospital', function($query) use($request){
        $query->where('hospital_name','like','%'.$request->hospital_query.'%');
      });
    }else{
      $hospitals = User::where('user_type', 2)->whereHas('hospital');
    }

    $hospitals = $hospitals->where('id','<>',$user->id)->inRandomOrder('1234')->paginate(9);
    return view('search-hospital',compact('hospitals','nearest'));
  }

  public function doctor(Request $request){
    $user = auth()->user();
    $doctor = User::where('id','<>',$user->id)->where('user_type', 1);

    if($request->firstname){
      $doctor->where('firstname','like', '%'.$request->firstname.'%');
    }
    if($request->lastname){

      $doctor->where('lastname', $request->lastname);
    }

    if($request->specialization){

      $doctor->where('specialization', $request->specialization);
    }

    $location = $request->location;
    $nearest = null;

    $doctors = $doctor->inRandomOrder('1234')->get()->groupBy('specialization')->paginate(6);

    if($location){
      $nearest = $doctor->where('address','like','%'.$location.'%')->inRandomOrder('1234')->paginate(3);
    }
    return view('search-doctor',compact('doctors','nearest'));
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
