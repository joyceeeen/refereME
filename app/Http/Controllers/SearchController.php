<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
use Location;
class SearchController extends Controller
{

  public function hospital(){

    $ip = request()->ip();
    $location = Location::get($ip);
    $nearest = null;

    if($location->cityName){
      $nearest = User::where('user_type', 2)->where('address','like','%'.$location->cityName.'%')->inRandomOrder()->paginate(3);
    }

    $hospitals = User::where('user_type', 2)->inRandomOrder()->paginate(9);




    return view('search-hospital',compact('hospitals','nearest'));
  }

  public function doctor(Request $request){
    $user = auth()->user();
    $doctors = User::where('id','<>',$user->id)->where('user_type', 1);

    if($request->firstname){
      $doctors->where('firstname','like', '%'.$request->firstname.'%');
    }
    if($request->lastname){
      $doctors->where('lastname', $request->lastname);
    }

    if($request->specialization){
      $doctors->where('specialization', $request->specialization);
    }

    $ip = request()->ip();
    $location = Location::get($ip);
    $nearest = null;

    if($location->cityName){
      $nearest = $doctors->with('schedToday')->where('address','like','%'.$location->cityName.'%')->inRandomOrder()->paginate(3);
    }

    $doctors = $doctors->with('schedToday')->inRandomOrder()->paginate(6);

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
