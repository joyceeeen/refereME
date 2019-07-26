<?php

namespace App\Http\Controllers;

use App\Referrals;
use App\User;
use App\Patient;
use App\Attachments;
use App\ReportsReference;
use App\ReferralReports;
use Illuminate\Http\Request;
use Image;
use File;
class ReferralsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('refer');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(Request $request)
  {
    $doctor = User::findOrFail($request->id);
    $reports = ReportsReference::get();
    return view('refer',compact('doctor','reports'));
  }



  public function referrals(Request $request)
  {
    $id = auth()->user()->id;

    $clients = User::whereId($id)->with(['referrals.patient','referralRequests.patient'])->first();
    return view('my-referrals',compact('clients'));
  }

  public function requests(Request $request)
  {
    $id = auth()->user()->id;

    $clients = User::whereId($id)->with(['referrals.patient','referralRequests.patient'])->first();
    return view('referral-requests',compact('clients'));
  }
  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $existingPatient = Patient::where('firstname',$request->firstname)->where('middlename',$request->middlename)->where('lastname',$request->firstname)->where('birthday',$request->birthday)->first();
    $patientId = null;

    if($existingPatient){
      $patientId = $existingPatient->id;

    }else{
      $patient = new Patient();
      $patient->firstname = $request->firstname;
      $patient->middlename = $request->middlename;
      $patient->lastname = $request->lastname;
      $patient->gender = $request->gender;
      $patient->birthday = $request->birthday;
      $patient->contact_number = $request->contact_number;
      $patient->email_address = $request->email_address;
      $patient->save();
      $patientId = $patient->id;
    }


    $referral = new Referrals();
    $referral->patient_id = $patientId;
    $referral->doctor_id = $request->doctor_id;
    $referral->referrer_id = auth()->user()->id;
    $referral->report = $request->report;
    $referral->save();

    //ADD reports DATA
    $reportsData = [];
    foreach ($request->reports as $key => $value) {
      array_push($reportsData,['reports_references_id'=>$value,'referrals_id'=>$referral->id]);
    }
    $reports = ReferralReports::insert($reportsData);
    //END reports DATA


    //ADD FILES DATA
    if($request->hasFile('attachments')){

      $data = [];
      foreach ($request->attachments as $attachment) {

        $file = $attachment;
        // foreach ($files as $file) {
        $thumbnailImage = Image::make($file);
        $originalPath = 'images/'.$request->doctor_id.'/'.$referral->id;

        if (!File::exists($originalPath)) {
          File::makeDirectory($originalPath, 0775, true, true);
        }

        $filename = $originalPath.time().uniqid().'.'.$file->getClientOriginalExtension();
        $thumbnailImage->save($filename);

        array_push($data,["referrals_id"=>$referral->id,"path"=>$filename,"filename"=>time().uniqid().'.'.$file->getClientOriginalExtension()]);
      }
      Attachments::insert($data);

    }
    //ADD FILES DATA

    //return redirect()->back()->with('success','Referral has been submitted');
    return redirect()->route('report-forms.create',['id'=>$referral->id]);
  }





  /**
  * Display the specified resource.
  *
  * @param  \App\Referrals  $referrals
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    if(request()->ajax()){
      $patient = Referrals::whereId($id)->with(['patient','attachments'])->first();

      return response()->json($patient);
   }
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Referrals  $referrals
  * @return \Illuminate\Http\Response
  */
  public function edit(Referrals $referrals)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Referrals  $referrals
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $referral = Referrals::find($id);

    $referral->is_accepted = $request->action;
    $referral->save();
    return redirect()->back()->with('success',"Referral has been updated");
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Referrals  $referrals
  * @return \Illuminate\Http\Response
  */
  public function destroy(Referrals $referrals)
  {
    //
  }
}
