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
                  105
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
                45
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
                  23
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
                  45
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
              <th scope="col">#</th>
              <th scope="col">Last Name</th>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Contact #</th>
              <th scope="col">Accept</th>
              <th scope="col">Decline</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td align="center">
                <button type="button" name="button" class="btn btn-primary">Accept</button>
              </td>
              <td align="center">
                <button type="button" name="button" class="btn btn-danger">Decline</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>Otto</td>
              <td>@fat</td>
              <td align="center">
                <button type="button" name="button" class="btn btn-primary">Accept</button>
              </td>
              <td align="center">
                <button type="button" name="button" class="btn btn-danger">Decline</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>Otto</td>
              <td>@fat</td>
              <td align="center">
                <button type="button" name="button" class="btn btn-primary">Accept</button>
              </td>
              <td align="center">
                <button type="button" name="button" class="btn btn-danger">Decline</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>Otto</td>
              <td>@fat</td>
              <td align="center">
                <button type="button" name="button" class="btn btn-primary">Accept</button>
              </td>
              <td align="center">
                <button type="button" name="button" class="btn btn-danger">Decline</button>
              </td>
            </tr>

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
              <th scope="col">Contact #</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
