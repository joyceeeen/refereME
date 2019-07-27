<div class="row">
  <div class="col-lg-6">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
      {{$result->details->details['collection_date']}}

    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Time Tested:</b></h5>
      {{$result->details->details['time_collected']}}

    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
      {{$result->details->details['operator_id']}}

    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
      {{$result->details->details['testers_initials']}}

    </div>
  </div>
  <div class="col-lg-12">
    <hr>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Impression:</b></h5>
      {{$result->details->details['impression']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Findings:</b></h5>
      {{$result->details->details['findings']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>FTI Tags:</b></h5>
      {{$result->details->details['fti_tags']}}

    </div>
  </div>
</div>
