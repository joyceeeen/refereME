<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
      {{$result->details->details['collection_date']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
      {{$result->details->details['time_collected']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
      {{$result->details->details['test_date']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
      {{$result->details->details['operator_id']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
      {{$result->details->details['testers_initials']}}

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
      {{$result->details->details['color']}}

    </div>
  </div>
  <div class="col-lg-12">
    <h5 class="text-primary pb-2"><b>Appearance:</b></h5>
    {{$result->details->details['appearance']}}

  </div>
  <div class="col-lg-12">
    <h5 class="text-primary pb-2"><b>Mucus:</b></h5>
    <div class="form-group">
      {{$result->details->details['mucus'] == 0 ? 'Yes' : 'No'}}

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
      {{$result->details->details['specific_gravity']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>pH:</b></h5>
      {{$result->details->details['pH']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Leukocytes:</b></h5>
      {{$result->details->details['leukocytes']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Nitrite:</b></h5>
      {{$result->details->details['nitrite']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Protein (mg/dL):</b></h5>
      {{$result->details->details['protein']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Glucose (mg/dL):</b></h5>
      {{$result->details->details['glucose']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Ketones:</b></h5>
      {{$result->details->details['ketones']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Urobilinogen (mg/dL):</b></h5>
      {{$result->details->details['urobilinogen']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Bilirubin:</b></h5>
      {{$result->details->details['bilirubin']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary"><b>Blood (Ery/uL):</b></h5>
      <h6 class="text-primary pb-2"><b>Hemoglobin from (Ery/uL):</b></h6>
      {{$result->details->details['hemoglobin']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Comments:</b></h5>
      {{$result->details->details['comments']}}

    </div>
  </div>

</div>
