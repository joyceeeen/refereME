<?php

namespace App\Http\Controllers;

use App\Referrals;
use App\User;
use App\Patient;
use App\Attachments;
use App\ReportsReference;
use App\ReferralReports;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use File;
class ReferralsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $referral = Referrals::with(['patient','reports','tests.reference','tests.details','referredTo','referredBy'])->find($request->id);
    return view('success-referral',compact('referral'));
  }

//

  public function modalDetails(Request $request){

    $referral = Referrals::with(['patient','reports','tests.reference','tests.details','referredTo','referredBy'])->find($request->id);

    return view('modal.view-details',compact('referral'));
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
      $patient->firstname = ucwords($request->firstname);
      $patient->middlename = ucwords($request->middlename);
      $patient->lastname = ucwords($request->lastname);
      $patient->gender = $request->gender;
      $patient->birthday = $request->birthday;
      $patient->stroke = $request->stroke;
      $patient->pwd = $request->pwd;
      $patient->heart_disease = $request->heart;
      $patient->contact_number = $request->contact_number;
      $patient->email_address = $request->email_address;
      $patient->save();
      $patientId = $patient->id;
    }

    //GET PRIORITY
    $client = new Client(); //GuzzleHttp\Client
    $result = $client->post('http://gangg5539.pythonanywhere.com/predict', [
      'form_params' => [
        'disease'=> $request->disease,
        'stroke'=> $request->stroke,
        'heart_disease'=> $request->heart,
        'PWD'=> $request->pwd,
        'age'=> Carbon::parse($request->birthday)->age
      ]
    ]);

    $responseJSON = json_decode($result->getBody(), true);
    $priority = $responseJSON['class'];
    //END GET PRIORITY

    $referral = new Referrals();
    $referral->patient_id = $patientId;
    $referral->doctor_id = $request->doctor_id;
    $referral->referrer_id = auth()->user()->id;
    $referral->disease_id = $request->disease;
    $referral->report = $request->report;
    $referral->level = $priority;
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
    if($request->referAgain){
      $referral->doctor_id = $request->hospital;
      $referral->is_accepted = 0;
      $referral->save();
      return redirect()->route('my.referrals')->with('success',"Referral has referred to another Doctor/Hospital.");;
    }else{
      $referral->is_accepted = $request->action;
      $referral->save();
      return redirect()->back()->with('success',"Referral has been updated");
    }

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
