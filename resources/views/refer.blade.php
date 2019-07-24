@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Refer Patient</h5>
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
            <textarea name="report" rows="8" required cols="80" class="form-control"></textarea>
          </div>
          <input type="hidden" name="doctor_id" value="{{request()->id}}"/>
          <hr>
          <!-- Button trigger modal -->
          <div class="row">
            <div class="checkbox col-lg-4">
              <label><input type="checkbox" value=""> Urinalysis Report</label>
            </div>
            <div class="checkbox col-lg-4">
              <label><input type="checkbox" value=""> Fecalysis Report</label>
            </div>
            <div class="checkbox col-lg-4">
              <label><input type="checkbox" value=""> CBC</label>
            </div>
            <div class="checkbox col-lg-4">
              <label><input type="checkbox" value=""> Physical Exam Result</label>
            </div>
            <div class="checkbox col-lg-4">
              <label><input type="checkbox" value=""> Chest Xray Result</label>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title font-weight-bold text-primary" id="exampleModalCenterTitle">Urinalysis Report</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
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
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
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
