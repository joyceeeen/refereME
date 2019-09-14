@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">OUR DOCTORS</h5>
    <div class="row pb-4">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <form method="get" action="{{route('search.doctor')}}">
              <div class="row">
                <div class="col searchCol">
                  <input type="text" name="firstname" autocomplete="off" value="{{ request()->firstname }}" class="form-control" placeholder="Doctor's First Name">
                </div>
                <div class="col searchCol">
                  <input type="text" name="lastname" autocomplete="off" value="{{ request()->lastname  }}" class="form-control" placeholder="Doctor's Last Name">
                </div>
                <div class="col searchCol">
                  <select name="specialization" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Select Specialization</option>
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
                  <input type="hidden" id="specialization_selected" value="{{ request()->specialization  }}" class="form-control">
                </div>
                <div class="col-lg-2 searchCol">
                  <button type="submit" name="button" class="btn btn-primary" style="width:100%">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @if($nearest && $nearest->isNotEmpty())
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-primary font-weight-bold">NEAREST</h5>
      </div>
    </div>
    <div class="row">

      <!-- Team member -->
      @foreach($nearest as $doctor)
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip">
          <div class="mainflip">
            <div class="frontside doctor">
              <div class="card">
                <div class="card-body text-center">
                  <a href="#"  @if(request()->client) data-client="{{request()->client}}" @endif data-info="{{$doctor->id}}" class="showMoreInfoModal">
                    <p><img class=" img-fluid" src="{{$doctor->avatar ? '/'.$doctor->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
                    <h4 class="card-title mb-0 font-weight-bold">{{$doctor->name}}</h4>
                    <p class="card-title mb-0 font-weight-bold">{{$doctor->license_number}}</p>
                    <h5 class="card-title mb-3">{{$doctor->specialization}}</h5>
                    <p class="card-text font-weight-bold mb-0 text-dark">{{$doctor->address}}</p>
                    <p class="card-text mb-0 text-dark">{{$doctor->contact_number}}</p>
                    <p class="card-text font-weight-bold mb-0 text-primary"><i>{{$doctor->schedToday ?  \Carbon\Carbon::parse($doctor->schedToday->from)->format("h:i A").' - '. \Carbon\Carbon::parse($doctor->schedToday->to)->format("h:i A") : "No Schedule Today"}}</i></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    @endif
    @foreach($doctors as $key => $special)
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-primary font-weight-bold">{{$key}}</h5>
      </div>
    </div>
    <div class="row">
      <!-- Team member -->
      @foreach($special as $doctor)
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip">
          <div class="mainflip">
            <div class="frontside doctor">
              <div class="card">
                <div class="card-body text-center">
                  <a href="#" @if(request()->client) data-client="{{request()->client}}" @endif data-info="{{$doctor->id}}" class="showMoreInfoModal">
                    <p><img class=" img-fluid" src="{{$doctor->avatar ? '/'.$doctor->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
                    <h4 class="card-title mb-0 font-weight-bold">{{$doctor->name}}</h4>
                    <p class="card-title mb-0 font-weight-bold">{{$doctor->license_number}}</p>
                    <h5 class="card-title mb-3">{{$doctor->specialization}}</h5>
                    <p class="card-text font-weight-bold mb-0 text-dark">{{$doctor->address}}</p>
                    <p class="card-text mb-0 text-dark">{{$doctor->contact_number}}</p>
                    <p class="card-text font-weight-bold mb-0 text-primary"><i>{{$doctor->schedToday ?  \Carbon\Carbon::parse($doctor->schedToday->from)->format("h:i A").' - '. \Carbon\Carbon::parse($doctor->schedToday->to)->format("h:i A") : "No Schedule Today"}}</i></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    @endforeach
    <div class="row">
      <div class="col-lg-12">
        {{ $doctors->links() }}
      </div>
    </div>
  </div>
</section>

<div class="modal fade bd-example-modal-lg" id="moreInfoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="frontside">
          <div class="card">
            <div class="card-body text-center">
              <p><img class=" img-fluid" id="imgTxt" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGHVK4eyV3wUx9xIB3JOuVE27NpKcXfSb8rVfMYZgRM7U2fCog6w" alt="card image"></p>
              <h4 class="card-title mb-0 font-weight-bold" id="nameTxt">Jason Lopez</h4>
              <p id="license_number" class="card-title mb-0 font-weight-bold">Taylor Swift</p>

              <h5 class="card-title mb-3" id="specializationTxt">Cardiology</h5>
              <p class="card-text font-weight-bold mb-0 text-dark" id="addressTxt">605 Boni Ave, Mandaluyong, 1550 Metro Manila</p>
              <p class="card-text text-dark" id="mobileNumberTxt">0919 781 7760</p>
              <div id="referAgainDiv" style="display:none">
                <form id="referAgain-form" action="#" method="post">
                  @csrf
                  @method('put')
                  <input type="hidden" name="referAgain" value="1"/>
                  <input type="hidden" id="hospitalId" name="hospital" value=""/>
                  <button type="submit" class="btn btn-primary mt-2">Refer</button>
                </form>
              </div>
              <hr>
              <center><h5><b>Refer Patient</b></h5></center>

              <a href="#" id="referButton" name="button" class="btn btn-primary">NEW</a>
              <a href="#" id="referExisting" name="button" class="btn btn-primary referExisting"  data-toggle="modal" data-target="#myModal">EXISTING</a>

              <hr>
              <div class="text-justify">
                <h5 class="text-primary pb-2"><b>More details about me:</b></h5>
                <p class="card-text" id="descriptionTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <hr>
              <div class="text-justify">
                <h5 class="text-primary pb-2"><b>Schedule:</b></h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="true">Monday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday" aria-selected="true">Thursday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="friday-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="friday" aria-selected="false">Friday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">Saturday</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disableTab" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">Sunday</a>
                  </li>
                </ul>
                <div class="tab-content pt-4" id="myTabContent">

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Patient ID</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="{{route('refer.create')}}" method="get">
        <div class="modal-body">
          <input type="hidden" name="id" id="id" value="">
          <input type="text" name="patientNo" required class="form-control" placeholder="Patient ID" >
        </div>
        <div class="modal-footer">
          <center>
            <button type="submit" class="btn btn-primary">Refer Patient</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
