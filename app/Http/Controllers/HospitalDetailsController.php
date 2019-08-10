<?php

namespace App\Http\Controllers;

use App\HospitalDetails;
use Illuminate\Http\Request;
use App\User;
class HospitalDetailsController extends Controller
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
     * @param  \App\HospitalDetails  $hospitalDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('hospital')->find($id);
        $hospital = $user->hospital;
        return view('modal.hospital-more-details',compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HospitalDetails  $hospitalDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalDetails $hospitalDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HospitalDetails  $hospitalDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HospitalDetails $hospitalDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HospitalDetails  $hospitalDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalDetails $hospitalDetails)
    {
        //
    }
}
