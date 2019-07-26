@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Fecalysis</h5>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
          <div class="row">

            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
                <input type="time" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
              <h5 class="text-primary pb-2"><b>Color:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="colorless" name="radio_others" value="0" checked>
                  <label class="custom-control-label" for="brown">Brown</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="light" name="radio_others" value="1">
                  <label class="custom-control-label" for="green">Greenish</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="dark" name="radio_others" value="1">
                  <label class="custom-control-label" for="dark">Dark Yellow</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="amber" name="radio_others" value="1">
                  <label class="custom-control-label" for="amber">Amber</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input others" id="radio_others" name="radio_others" value="1">
                  <label class="custom-control-label" for="radio_others">Others</label>
                  <input type="text" name="" value="" class="form-control ml-2" id="otherForm" style="margin-top:-15px;" disabled>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Consistency:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Entamoeba Troph:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Entamoeba Cyst:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>R.B.C:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Pus Cells:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
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
