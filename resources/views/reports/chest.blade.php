@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Chest Xray Result</h5>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
          <div class="row">

            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Tested:</b></h5>
                <input type="time" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Impression:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Findings:</b></h5>
                <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>FTI Tags:</b></h5>
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
