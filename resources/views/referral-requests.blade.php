@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container-fluid" style="padding-left:8rem;padding-right:8rem;">


  <div class="row pb-5">
      <div class="col-lg-12">
        <h5 class="section-title h1">Referral Requests</h5>
        <div class="table-responsive">
          <table class="datatable table table-bordered" data-title="Referral Requests">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Priority Level</th>
                <th scope="col">License No.</th>
                <th scope="col">Referred By</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Contact #</th>
                <th scope="col">Date Referred</th>
                <th scope="col" class="noExport">View More</th>
                <th scope="col" class="noExport">Accept</th>
                <!-- <th scope="col" class="noExport">Decline</th> -->
              </tr>
            </thead>
            <tbody>
              @foreach($clients->referralRequests->where('is_accepted',0)->sortBy('level') as $key=>$client)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{ceil($client->level)}}</td>
                <td>{{$client->referredBy->license_number}}</td>
                <td>{{$client->referredBy->name}}</td>
                <td>{{$client->referredBy->user_type == 2 ? ($client->referredBy->hospital ? $client->referredBy->hospital->hospital_name : 'No added hospital yet.') : ($client->referredBy->schedule ? $client->referredBy->schedule->first()['hospital'] : 'No added hospital yet.') }}</td>
                <td>{{$client->patient->lastname}}</td>
                <td>{{$client->patient->firstname}}</td>
                <td>{{$client->patient->middlename}}</td>
                <td>{{$client->patient->birthday}}</td>

                <td>{{$client->patient->contact_number}}</td>
                <td>{{$client->created_at}}</td>

                <td><a href="#" data-toggle="modal"  class="patientDetailsModal" data-id="{{$client->id}}">View More</a></td>
                <td align="center">
                  <form action="{{route('refer.update',['id'=>$client->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="action" value="1"/>

                    <button type="submit" name="button" class="btn btn-primary">Accept</button>
                  </form>
                </td>
                <!-- <td align="center">
                  <form action="{{route('refer.update',['id'=>$client->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="action" value="2"/>
                    <button type="submit" name="button" class="btn btn-danger">Decline</button>
                  </form>
                </td> -->
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
  <div class="modal-dialog modal-lg" style="width:1200px;">
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
@endsection
