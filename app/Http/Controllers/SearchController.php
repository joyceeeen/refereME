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
      $nearest = User::where('user_type', 2)->whereHas('hospital')->where('id','<>',$user->id)->where('address','like','%'.$location->cityName.'%')->inRandomOrder('1234')->paginate(3);
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
      $nearest = $doctors->with('schedToday')->where('address','like','%'.$location->cityName.'%')->inRandomOrder('1234')->paginate(3);
    }

    $doctors = $doctors->with('schedToday')->inRandomOrder('1234')->paginate(6);

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
