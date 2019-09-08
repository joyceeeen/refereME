@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Urinalysis</h5>
    <p> <b>Patient Name:</b> {{$referral->patient->name}} </p>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('report-forms.store',['id'=>$reports->id,'referral_id'=>$referral->id])}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="row form-group">
                  <div class="col-lg-5">
                    <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="date" name="collection_date" required class="form-control">
                  </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row form-group">
                <div class="col-lg-5">
                    <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="time" name="time_collected" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                    <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="date" name="test_date" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                    <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="operator_id" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                    <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="testers_initials" required class="form-control" >
                  </div>
              </div>
            </div>

            <div class="col-lg-12">
              <hr>
              <div class="form-group">
                <h4 class="text-primary pb-2"><b>Physical Examination:</b></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <h5 class="text-primary pb-2"><b>Color:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="colorless" name="color" value="colorless" checked>
                  <label class="custom-control-label" for="colorless">Colorless</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="light" name="color" value="light">
                  <label class="custom-control-label" for="light">Light Yellow</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="dark" name="color" value="dark">
                  <label class="custom-control-label" for="dark">Dark Yellow</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="amber" name="color" value="amber">
                  <label class="custom-control-label" for="amber">Amber</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input others" id="radio_others" name="color" value="">
                  <label class="custom-control-label" for="radio_others">Others</label>
                  <input type="text" name="color" value="" class="form-control ml-2" id="otherForm" style="margin-top:-15px;" disabled>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h5 class="text-primary pb-2"><b>Appearance:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="clear" name="appearance" value="clear" checked>
                  <label class="custom-control-label" for="clear">Clear</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="hazy" name="appearance" value="hazy">
                  <label class="custom-control-label" for="hazy">Hazy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="cloudy" name="appearance" value="cloudy">
                  <label class="custom-control-label" for="cloudy">Cloudy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="turbid" name="appearance" value="turbid">
                  <label class="custom-control-label" for="turbid">Turbid</label>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <h5 class="text-primary pb-2"><b>Mucus:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="yes" name="mucus" value="0" checked>
                  <label class="custom-control-label" for="yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="no" name="mucus" value="1">
                  <label class="custom-control-label" for="no">No</label>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
              <div class="form-group">
                <h4 class="text-primary pb-2"><b>Chemical Examination:</b></h4>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Specific Gravity:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="specific_gravity" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>pH:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="pH" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Leukocytes:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="leukocytes" required class="form-control" >
                  </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Nitrite:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="nitrite" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Protein (mg/dL):</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="protein" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Glucose (mg/dL):</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="glucose" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Ketones:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="ketones" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Urobilinogen (mg/dL):</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="urobilinogen" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary pb-2"><b>Bilirubin:</b></h5>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="bilirubin" required class="form-control" >
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row form-group">
                <div class="col-lg-5">
                  <h5 class="text-primary"><b>Blood (Ery/uL):</b></h5>
                  <h6 class="text-primary pb-2"><b>Hemoglobin from (Ery/uL):</b></h6>
                  </div>
                  <div class="col-lg-7">
                    <input type="text" name="hemoglobin" required class="form-control" >
                  </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Comments:</b></h5>
                <textarea name="comments" rows="8" cols="80" class="form-control"></textarea>
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
