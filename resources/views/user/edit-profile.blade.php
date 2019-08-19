@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <h1>Edit Profile</h1>
    <hr>
    <form action="{{route('user.update',$user->id)}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

      <div class="row">
        <!-- left column -->
        <div class="col-md-2">
          <div class="text-center">
            <img src="{{$user->avatar ? $user->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" width="150px" class="img-thumbnail" alt="avatar">
            <h6>Upload a different photo...</h6>

            <input type="file" name="avatar" class="form-control">
          </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-10">
            @include('partials.flash-message')
          <div class="row">
            <div class="col-md personal-info">


              <h3>Personal info</h3>

              @csrf
              @method('PUT')
              <div class="form-group">
                <label class="col-lg-4 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" value="{{$user->email}}" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">First name:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="firstname" type="text" value="{{$user->firstname}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-4 control-label">Last name:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="lastname" type="text" value="{{$user->lastname}}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-4 control-label">Address:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="address" type="text" value="{{$user->address}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">Contact Number:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="contact_number" type="text" value="{{$user->contact_number}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">Specialization:</label>
                <div class="col-lg-8">
                  <select class="form-control" name="specialization" id="exampleFormControlSelect1" required>
                    <option value="" selected disabled>Select Specialization</option>
                    <option value="Anesthesiology">Anesthesiology</option>
                    <option value="Dental Medicine">Dental Medicine</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Family and Community Medicine">Family and Community Medicine</option>
                    <option value="Internal Medicine">Internal Medicine</option>
                    <option value="Laboratory Medicine">Laboratory Medicine</option>
                    <option value="Legal Medicine">Legal Medicine</option>
                    <option value="Nuclear Medicine">Nuclear Medicine</option>
                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                    <option value="Occupational Medicine">Occupational Medicine</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Otorhinolaryngology">Otorhinolaryngology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Radiology">Radiology</option>
                    <option value="Rehabilitation Medicine">Rehabilitation Medicine</option>
                    <option value="Surgery">Surgery</option>
                  </select>
                </div>
                <input type="hidden" id="specialization_selected" value="{{$user->specialization}}"/>

              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">License Number:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="license_number" type="text" value="{{$user->license_number}}" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">Summary:</label>
                <div class="col-lg-8">
                  <textarea name="summary" class="form-control" rows="8" value="" cols="80">{{$user->summary}}</textarea>
                </div>

              </div>

            </div>

            @if(auth()->user()->user_type == 2)

            <div class="col-md personal-info">
              <h3>Hospital Info</h3>

              <div class="form-group">
                <label class="col-lg-4 control-label">Hospital Name:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="hospital_name" type="text" value="{{$user->hospital ?  $user->hospital->hospital_name :''}}" required>
                  <input class="form-control" name="hospital_id" type="hidden" value="{{$user->hospital ?  $user->hospital->id :''}}">

                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-4 control-label">Location:</label>
                <div class="col-lg-8">
                  <input class="form-control" name="location" type="text" value="{{$user->hospital ?  $user->hospital->hospital_name :''}}" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Ambulance:</label>
                <div class="col-lg-8">
                  <textarea name="ambulance" class="form-control" rows="8" value="" cols="80" required>{{$user->hospital ?  $user->hospital->ambulance : ''}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Facilities:</label>
                <div class="col-lg-8">
                  <textarea name="facilities" class="form-control" rows="8" value="" cols="80" required>{{$user->hospital ?  $user->hospital->facilities : ''}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Services:</label>
                <div class="col-lg-8">
                  <textarea name="services" class="form-control" rows="8" value="" cols="80" required>{{$user->hospital ?  $user->hospital->services : ''}}</textarea>
                </div>
              </div>

            </div>
            @endif
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>

      </div>
    </form>
  </div>
  <hr>
</section>

@endsection
