<?php

namespace App\Http\Controllers;

use App\ReferralReports;
use Illuminate\Http\Request;
use App\ReportsDetails;
class ReferralReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $reports = ReferralReports::where('referrals_id',$request->id)->whereDoesntHave('details')->first();
      $referral = $reports->referral;
    
      $view = 'reports.'.$reports->reference->view;
      if($reports){
        return view($view,compact('referral','reports'));
      }

      return redirect()->route('refer.create',['id'=>$referral->doctor_id])->with('success','Patient has been referred.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $details = new ReportsDetails();
    //  $details->referral_reports_id =
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReferralReports  $referralReports
     * @return \Illuminate\Http\Response
     */
    public function show(ReferralReports $referralReports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReferralReports  $referralReports
     * @return \Illuminate\Http\Response
     */
    public function edit(ReferralReports $referralReports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReferralReports  $referralReports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReferralReports $referralReports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReferralReports  $referralReports
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReferralReports $referralReports)
    {
        //
    }
}
