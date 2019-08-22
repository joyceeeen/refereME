<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use Location;
class SearchController extends Controller
{

  public function hospital(Request $request){

    $ip = request()->ip();
    $location = Location::get($ip);
    $nearest = null;
    $user = auth()->user();

    if($location->cityName){
      $nearest = User::where('user_type', 2)->whereHas('hospital')->where('id','<>',$user->id)->where('address','like','%'.$location->cityName.'%')->inRandomOrder()->paginate(3);
    }

    $hospitals = User::where('user_type', 2)->whereHas('hospital')->where('id','<>',$user->id)->inRandomOrder()->paginate(9);

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
    
    $ip = request()->ip();
    $location = Location::get($ip);
    $nearest = null;
    
    $doctors = $doctor->inRandomOrder()->paginate(6);
    
    if($location->cityName){
      $nearest = $doctor->where('address','like','%'.$location->cityName.'%')->inRandomOrder()->paginate(3);
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
