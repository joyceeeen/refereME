<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use File;
use Hash;
class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $user = auth()->user();
    if($request->has('password')){
      return view('user.change-password',compact('user'));
    }else{
      return view('user.edit-profile',compact('user'));
    }
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    if(request()->ajax()){
      $user = User::whereId($id)->with('schedule',function($query){
        $query->orderBy('day','asc');
      })->get();
  
      return response()->json($user);
    }

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $user = User::find($id);
    if($request->has('password')){


      $request->validate([
        'old_password'=>['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed','different:old_password'],
      ]);


      if (Hash::check($request->old_password, $user->password)) {
        $user->password = Hash::make($request->password);

      }else{
        return redirect()->back()->withErrors('The old password does not match our records.');
      }
    }
    else{
      $request->validate([
        'firstname' => ['required', 'string', 'max:191'],
        'lastname' => ['required', 'string', 'max:191'],
        'address' => ['string', 'max:191'],
        'contact_number' => ['string', 'max:15'],
        'specialization' => ['string']
      ]);

      $user->firstname = $request->firstname;
      $user->lastname = $request->lastname;
      $user->address = $request->address;
      $user->contact_number = $request->contact_number;
      $user->specialization = $request->specialization;
      $user->summary = $request->summary;
      $user->hospital_name = $request->hospital_name;

      //Upload Image

      if($request->hasFile('avatar')){

        $file = $request->file('avatar');
        // foreach ($files as $file) {
        $thumbnailImage = Image::make($file);
        $originalPath = 'images/'.$user->id.'/';

        if (!File::exists($originalPath)) {
          File::makeDirectory($originalPath, 0775, true, true);
        }

        $filename = $originalPath.time().uniqid().'.'.$file->getClientOriginalExtension();
        $thumbnailImage->save($filename);

        $user->avatar = $filename;
      }
      //End Upload image
    }


    $user->save();

    return redirect()->back()->with('success','Profile has been updated!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
