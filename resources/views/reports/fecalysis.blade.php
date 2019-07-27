@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Fecalysis</h5>
    <p> <b>Patient Name:</b> {{$referral->patient->name}} </p>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('report-forms.store',['id'=>$reports->id,'referral_id'=>$referral->id])}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
                <input type="date"  name="collection_date" required class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
                <input type="time" name="time_collected" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="test_date" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="operator_id" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="testers_initials" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
              <h5 class="text-primary pb-2"><b>Color:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="brown" value="brown" name="color" checked>
                  <label class="custom-control-label" for="brown">Brown</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="greenish" value="greenish" name="color">
                  <label class="custom-control-label" for="greenish">Greenish</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="dark_yellow" value="dark_yellow" name="color">
                  <label class="custom-control-label" for="dark_yellow">Dark Yellow</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="amber" value="amber" name="color">
                  <label class="custom-control-label" for="amber">Amber</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input others" id="radio_others" name="color">
                  <label class="custom-control-label" for="radio_others">Others</label>
                  <input type="text" name="color"  class="form-control ml-2" id="otherForm" style="margin-top:-15px;" disabled>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Consistency:</b></h5>
                <input type="text" name="consistency" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Entamoeba Troph:</b></h5>
                <input type="text" name="entamoeba_troph" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Entamoeba Cyst:</b></h5>
                <input type="text" name="entamoeba_cyst" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>R.B.C:</b></h5>
                <input type="text" name="rbc" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Pus Cells:</b></h5>
                <input type="text" name="pus_cells" required class="form-control">
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
