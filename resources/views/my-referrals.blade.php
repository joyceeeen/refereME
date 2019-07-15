@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container-fluid" style="padding-left:8rem;padding-right:8rem;">

    <div class="row pb-5">
      <div class="col-lg-12">
        <h5 class="section-title h1">My Referrals</h5>
        <div class="table-responsive">
          <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Status</th>
              <th scope="col">Last Name</th>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Contact #</th>
              <th scope="col">View More</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients->referrals as $client)
            <tr id="my-referrals-row" class="status-{{$client->status}}">
              <td>{{$client->status}}</td>
              <td>{{$client->patient->lastname}}</td>
              <td>{{$client->patient->firstname}}</td>
              <td>{{$client->patient->middlename}}</td>
              <td>{{$client->patient->birthday}}</td>
              <td>{{$client->patient->contact_number}}</td>
              <td><a href="#"  class="patientDetailsModal"  data-id="{{$client->id}}" >View More</a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="modal fade bd-example-modal-lg" id="patientDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
              <h4 class="card-title mb-3 font-weight-bold" id="nameTxt">Jason Lopez</h4>
              <h5 class="card-title mb-3" id="birthdayTxt">02/23/1992</h5>
              <p class="card-text text-dark mb-0 " id="mobileNumberTxt">0919 781 7760</p>
              <p class="card-text text-dark" id="emailTxt">test@gmail.com</p>

              <hr>
              <div class="text-justify">
                <h5 class="text-primary pb-2"><b>Report:</b></h5>
                <p class="card-text" id="descriptionTxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <hr>
              <div class="text-justify">
                <h5 class="text-primary pb-2"><b>Attachments:</b></h5>
                  <ul id="attachments">
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
