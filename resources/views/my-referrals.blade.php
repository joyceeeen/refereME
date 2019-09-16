@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container-fluid" style="padding-left:8rem;padding-right:8rem;">
@include('partials.flash-message')
    <div class="row pb-5">
      <div class="col-lg-12">
        <h5 class="section-title h1">My Referrals</h5>
        <div class="table-responsive">
          <table class="datatable table table-bordered" data-title="My Referrals">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Priority Level</th>
                <th scope="col">License No.</th>
                <th scope="col">Referred To</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Status</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Contact #</th>
                <th scope="col">Date Referred</th>

                <th scope="col" class="noExport">View More</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients->referrals->sortBy('level') as $key=>$client)
              <tr id="my-referrals-row" class="status-{{$client->status}}">
                <td>{{$key + 1}}</td>
                <td>{{ceil($client->level)}}</td>
                <td>{{$client->referredTo->license_number}}</td>
                <td>{{$client->referredTo->name}}</td>
                <td>{{$client->referredTo->user_type == 2 ? ($client->referredTo->hospital ? $client->referredTo->hospital->hospital_name : 'No added hospital yet.') : ($client->referredTo->schedule ? $client->referredTo->schedule->first()['hospital'] : 'No added hospital yet.') }}</td>
                <td>{{$client->status}}</td>
                <td>{{$client->patient->lastname}}</td>
                <td>{{$client->patient->firstname}}</td>
                <td>{{$client->patient->middlename}}</td>
                <td>{{$client->patient->birthday}}</td>
                <td>{{$client->patient->contact_number}}</td>
                <td>{{$client->created_at}}</td>

                <td>
                  <a href="#" data-toggle="modal" class="patientDetailsModal btn btn-primary"  data-id="{{$client->id}}" >View More</a>
                  @if($client->is_accepted == 2)
                  &nbsp;
                  <a href="#" data-toggle="modal" data-target="referAgainModal" class="referAgainModal btn btn-warning" data-id="{{$client->id}}" >Refer Again</a>
                  @endif
                </div>
              </td>
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

      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="referAgainModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Refer Again</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <a href="#" id="doctor-link" class="btn btn-primary btn-lg">Refer to a Doctor</a>
          <a href="#" id="hospital-link" class="btn btn-secondary btn-lg">Refer to Hospital</a>
        </center>
      </div>
    </div>
  </div>
</div>
@endsection
