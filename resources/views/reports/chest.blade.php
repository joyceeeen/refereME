@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Chest Xray Result</h5>
    <p> <b>Patient Name:</b> {{$referral->patient->name}} </p>

    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('report-forms.store',['id'=>$reports->id,'referral_id'=>$referral->id])}}" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="collection_date" required class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Tested:</b></h5>
                <input type="time" name="time_collected" required class="form-control" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="operator_id" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="testers_initials" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Impression:</b></h5>
                <input type="text" name="impression" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Findings:</b></h5>
                <textarea name="findings" rows="8" cols="80" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>FTI Tags:</b></h5>
                <input type="text" name="fti_tags" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-primary">Submit Report</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
