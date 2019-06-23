<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;
class SearchController extends Controller
{
    public function hospital(){
      $hospitals = User::where('is_hospital', 1)->paginate(3);

      return view('search-hospital',compact('hospitals'));
    }

    public function doctor(Request $request){

      $doctors = User::where('is_hospital', 0);

      if($request->firstname){
        $doctors->where('firstname','like', '%'.$request->firstname.'%');
      }
      if($request->lastname){
        $doctors->where('lastname', $request->lastname);
      }

      if($request->specialization){
        $doctors->where('specialization', $request->specialization);
      }

      $doctors = $doctors->with('schedule')->paginate(6);

      return view('search-doctor',compact('doctors'));
    }
}
