@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Urinalysis</h5>
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
              <div class="form-group">
                <h4 class="text-primary pb-2"><b>Physical Examination:</b></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <h5 class="text-primary pb-2"><b>Color:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="colorless" name="radio_others" value="0" checked>
                  <label class="custom-control-label" for="colorless">Colorless</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input radio_common" id="light" name="radio_others" value="1">
                  <label class="custom-control-label" for="light">Light Yellow</label>
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
              <h5 class="text-primary pb-2"><b>Apperance:</b></h5>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="clear" name="appearance" value="0" checked>
                  <label class="custom-control-label" for="clear">Clear</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="hazy" name="appearance" value="1">
                  <label class="custom-control-label" for="hazy">Hazy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="cloudy" name="appearance" value="0">
                  <label class="custom-control-label" for="cloudy">Cloudy</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="turbid" name="appearance" value="1">
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
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Specific Gravity:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>pH:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Leukocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Nitrite:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Protein (mg/dL):</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Glucose (mg/dL):</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Ketones:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Urobilinogen (mg/dL):</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Bilirubin:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary"><b>Blood (Ery/uL):</b></h5>
                <h6 class="text-primary pb-2"><b>Hemoglobin from (Ery/uL):</b></h6>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Comments:</b></h5>
                <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
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
