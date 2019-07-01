@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container-fluid" style="padding-left:8rem;padding-right:8rem;">
    <div class="row pb-5">
      <div class="col-lg-3 col-sm-6">
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
                  {{$clients->referrals->count()}}
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
      <div class="col-lg-3 col-sm-6">
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
      <div class="col-lg-3 col-sm-6">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col-sm-5">
                <div class="icon-big text-center text-danger">
                  <i class="fa fa-times"></i>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="numbers">
                  <p>Declined Referrals</p>
                  {{$clients->referrals->where('is_accepted',2)->count()}}
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <hr>
            <div class="stats">
              <i class="ti-timer"></i>
              Total
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
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
        <h5 class="section-title h1">Approval Request</h5>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Report</th>
                <th scope="col">Accept</th>
                <th scope="col">Decline</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients->referrals->where('is_accepted',0) as $client)
              <tr>

                <td>{{$client->patient->firstname}}</td>
                <td>{{$client->patient->middlename}}</td>
                <td>{{$client->patient->lastname}}</td>
                <td>{{$client->report}}</td>
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
    <div class="row">
      <div class="col-lg-12">
        <h5 class="section-title h1">Clients</h5>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Birthday</th>

              </tr>
            </thead>
            <tbody>
              @foreach($clients->referrals->unique('patient_id') as $client)
              <tr>
                <th scope="row">{{$client->patient->id}}</th>
                <td>{{$client->patient->firstname}}</td>
                <td>{{$client->patient->lastname}}</td>
                <td>{{$client->patient->birthday}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
