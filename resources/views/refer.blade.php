@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Refer</h5>
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <p><img class="imgRefer img-fluid" src="{{$doctor->avatar ? '/'.$doctor->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
          <h4 class="card-title mb-0 font-weight-bold">{{$doctor->is_hospital ? $doctor->hospital_name : $doctor->name}}</h4>
          <h5 class="card-title mb-3">{{$doctor->is_hospital ? '' : $doctor->specialization }}</h5>
          <p class="card-text font-weight-bold mb-0 text-dark">{{$doctor->address}}</p>
          <p class="card-text text-dark">{{$doctor->contact_number}}</p>
        </div>
        <hr>
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
        @include('partials.flash-message')
        @csrf
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Last Name:</b></h5>
                <input type="text" name="lastname" class="form-control" placeholder="Aridedon" id="lName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>First Name:</b></h5>
                <input type="text"  name="firstname"  class="form-control" placeholder="Yancy" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Middle Name:</b></h5>
                <input type="text" name="middlename" class="form-control" placeholder="Yans" id="mName">
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Date of Birth:</b></h5>
                <input type="date" name="birthday" class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <h5 class="text-primary pb-2"><b>Sex:</b></h5>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="0" checked>
                <label class="custom-control-label" for="customRadio">Male</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="1">
                <label class="custom-control-label" for="customRadio2">Female</label>
              </div>
            </div>
          </div>
          <hr>
          <div class="text-justify">
            <h3 class="text-primary pb-2"><b>Reason for Referral</b></h3>
            <h5 class="text-primary pb-2"><b>Report:</b></h5>
            <textarea name="report" rows="8" cols="80" class="form-control"></textarea>
          </div>
          <input type="hidden" name="doctor_id" value="{{request()->id}}"/>
          <hr>
          <div class="text-justify">
            <h5 class="text-primary pb-2"><b>Attachments:</b></h5>
            <div class="custom-file">
              <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="pt-3">
            <center>
              <button type="submit" name="button" class="btn btn-primary">Submit Referral</button>
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
