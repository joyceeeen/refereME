@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container-fluid" style="padding-left:8rem;padding-right:8rem;">
    <div class="row ">
      <div class="col-lg-4 col-sm-6">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col-sm-5">
                <div class="icon-big text-center icon-warning">
                  <i class="fa fa-user"></i>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="numbers">
                  <p>Number of Clients</p>
                  {{($clients->referrals)->merge($clients->referralRequests->where('is_accepted',1))->count()}}
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr>
            <div class="stats">
              <i class="ti-reload"></i>
              Total
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col-sm-5">
                <div class="icon-big text-center text-success">
                  <i class="fa fa-check"></i>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="numbers"><p>Accepted Referrals</p>
                  {{$clients->referrals->where('is_accepted',1)->count()}}
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr>
            <div class="stats"><i class="ti-calendar"></i>
              Total
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col-sm-5">
                <div class="icon-big text-center text-primary">
                  <i class="fa fa-book"></i>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="numbers">
                  <p>Pending Referrals</p>
                  {{$clients->referrals->where('is_accepted',0)->count()}}
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr>
            <div class="stats">
              <i class="ti-reload"></i>
              Total
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-5">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="text-primary"><b>Disease</b></h4>
            <div id="chart-div"></div>
          </div>
        </div>
        <?= Lava::render('BarChart', 'Disease', 'chart-div') ?>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-primary"><b>No. of Doctors and No. of Hospitals</b></h4>

            <div id="piechart-div"></div>
          </div>
        </div>
        <?= Lava::render('PieChart', 'doctorVhospital', 'piechart-div') ?>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-primary"><b>Top 5 Specialization</b></h4>

            <div id="piechart2-div"></div>
          </div>
        </div>
        <?= Lava::render('PieChart', 'specialization', 'piechart2-div') ?>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="text-primary"><b>Breakdown of Priority Levels</b></h4>

            <div id="piechart3-div"></div>
          </div>
        </div>
        <?= Lava::render('PieChart', 'priority', 'piechart3-div') ?>
      </div>
    </div>
    <!-- <div class="row pb-5">
      <div class="col-lg-12">
        <h5 class="section-title h1">Referral Requests</h5>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Contact #</th>
                <th scope="col">View More</th>
                <th scope="col">Accept</th>
                <th scope="col">Decline</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients->referralRequests->where('is_accepted',0) as $client)
              <tr>
                <td>{{$client->patient->lastname}}</td>
                <td>{{$client->patient->firstname}}</td>
                <td>{{$client->patient->middlename}}</td>
                <td>{{$client->patient->birthday}}</td>

                <td>{{$client->report}}</td>
                <td><a href="#" class="patientDetailsModal" data-id="{{$client->id}}">View More</a></td>
                <td align="center">
                  <form action="{{route('refer.update',['id'=>$client->id])}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="action" value="1"/>

                    <button type="submit" name="button" class="btn btn-primary">Accept</button>
                  </form>
                </td>
                <td align="center">
                  <form action="{{route('refer.update',['id'=>$client->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="action" value="2"/>
                    <button type="submit" name="button" class="btn btn-danger">Decline</button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
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
    </div> -->

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
