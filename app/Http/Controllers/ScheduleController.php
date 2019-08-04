<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $user = auth()->user();
    $schedule = $user->schedule;

    $sched1 = $schedule->where('day',1)->first();
    $sched2 = $schedule->where('day',2)->first();
    $sched3 = $schedule->where('day',3)->first();
    $sched4 = $schedule->where('day',4)->first();
    $sched5 = $schedule->where('day',5)->first();
    $sched6 = $schedule->where('day',6)->first();
    $sched7 = $schedule->where('day',7)->first();

    return view('user.schedule',compact('user','schedule','sched1','sched2','sched3','sched4','sched5','sched6','sched7'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {


    $sched = new Schedule();
    $availability = ['from'=>$request->from,'to'=>$request->to];
    $sched->day = $request->day;
    $sched->hospital = $request->hospital;
    $sched->address = $request->address;
    $sched->schedule = json_encode($availability);
    $sched->contact_number = $request->contact_number;
    $sched->user_id = auth()->user()->id;
    $sched->save();

    return redirect()->back()->with('success','Schedule has been updated');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Schedule  $schedule
  * @return \Illuminate\Http\Response
  */
  public function show(Schedule $schedule)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Schedule  $schedule
  * @return \Illuminate\Http\Response
  */
  public function edit(Schedule $schedule)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Schedule  $schedule
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $user = auth()->user();

    $sched = Schedule::where('user_id',$user->id)->where('day', $request->day)->first();
    $sched->day = $request->day;
    $sched->hospital = $request->hospital;
    $sched->address = $request->address;
    $sched->schedule = ['from'=>$request->from,'to'=>$request->to];
    $sched->contact_number = $request->contact_number;
    $sched->user_id = auth()->user()->id;
    $sched->save();
    return redirect()->back()->with('success','Schedule has been updated');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Schedule  $schedule
  * @return \Illuminate\Http\Response
  */
  public function destroy(Schedule $schedule)
  {
    //
  }
}
