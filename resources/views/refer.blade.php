@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Refer Patient</h5>
    <div class="card">
      <div class="card-body">
        <div class="text-center">
          <p><img class="imgRefer img-fluid" src="{{$doctor->avatar ? '/'.$doctor->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
          @if($doctor->user_type == 2 && $doctor->hospital)
          <h4 class="card-title mb-0 font-weight-bold">{{$doctor->hospital->hospital_name}}</h4>
          <p class="card-text font-weight-bold mb-0 text-dark">{{$doctor->hospital->location}}</p>
          <p class="card-text text-dark">{{$doctor->contact_number}}</p>
          <p><a href="#detailsModal" data-toggle="modal" data-target="#detailsModal" class="card-title mb-3">More Details</a></p>

          <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h5>Emergency</h5>
                  <p>{{$doctor->hospital->ambulance}}</p>
                  <hr>
                  <h5>Facilities</h5>
                  <p>{{$doctor->hospital->facilities}}</p>
                  <hr>
                  <h5>Services</h5>
                  <p>{{$doctor->hospital->services}}</p>
                  <hr>
                </div>

              </div>
            </div>
          </div>
          @else
          <h4 class="card-title mb-0 font-weight-bold">{{ $doctor->name}}</h4>
          <h5 class="card-title mb-3">{{ $doctor->specialization }}</h5>
          <p class="card-text font-weight-bold mb-0 text-dark">{{$doctor->address}}</p>
          <p class="card-text text-dark">{{$doctor->contact_number}}</p>
          @endif
        </div>
        <hr>
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
          @include('partials.flash-message')
          @csrf
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <h4 class="text-primary pb-2"><b>Last Name:</b></h4>
                <input type="text" name="lastname" required class="form-control" placeholder="Aridedon" id="lName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>First Name:</b></h5>
                <input type="text"  name="firstname" required  class="form-control" placeholder="Yancy" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Middle Name:</b></h5>
                <input type="text" name="middlename" required class="form-control" placeholder="Yans" id="mName">
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Date of Birth:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Contact Number:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo" placeholder="09172390989">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Email Address:</b></h5>
                <input type="email" name="email_address" required class="form-control" id="emailAd" placeholder="test@email.com">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">

                <h5 class="text-primary pb-2"><b>Sex:</b></h5>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="0">
                  <label class="custom-control-label" for="customRadio">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="1">
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">

                <h5 class="text-primary pb-2"><b>PWD:</b></h5>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="pwd_yes" name="pwd" value="1">
                  <label class="custom-control-label" for="pwd_yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="pwd_no" name="pwd" value="0">
                  <label class="custom-control-label" for="pwd_no">No</label>
                </div>
              </div>
            </div>



          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <h3 class="text-primary pb-2"><b>Reason for Referral</b></h3>

            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Disease:</b></h5>
                <select id="disease-list" name="disease" class="form-control" required>
                  <option value="" selected disabled>Select Disease</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">

                <h5 class="text-primary pb-2"><b>Heart Disease:</b></h5>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="heart_yes" name="heart" value="1">
                  <label class="custom-control-label" for="heart_yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="heart_no" name="heart" value="0">
                  <label class="custom-control-label" for="heart_no">No</label>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">

                <h5 class="text-primary pb-2"><b>Stroke:</b></h5>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="stroke_yes" name="stroke" value="1">
                  <label class="custom-control-label" for="stroke_yes">Yes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="stroke_no" name="stroke" value="0">
                  <label class="custom-control-label" for="stroke_no">No</label>
                </div>
              </div>
            </div>
          </div>
          <div class="text-justify">
            <h5 class="text-primary pb-2"><b>Report:</b></h5>

            <textarea name="report" rows="8" required cols="80" class="form-control"></textarea>
          </div>
          <input type="hidden" name="doctor_id" value="{{request()->id}}"/>
          <hr>
          <!-- Button trigger modal -->
          <div class="row">
            @foreach($reports as $report)
            <div class="checkbox col-lg-4">
              <label><input name="reports[]" type="checkbox" value="{{$report->id}}"> {{$report->report}}</label>
            </div>
            @endforeach

          </div>

          <div class="text-justify">
            <h5 class="text-primary pb-2"><b>Attachments:</b></h5>
            <div class="custom-file">
              <input name="attachments[]" multiple type="file" accept="image/*" class="custom-file-input" id="customFile">
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
