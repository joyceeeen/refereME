@extends('layouts.adminApp')

@section('content')


<!--Section: articles-->
<section id="articles" class="text-center py-5">

  <!-- Container -->
  <div class="container">

    <!-- Section heading -->

    <!-- Section: Products v.4 -->
    <section class="text-center my-5">

      <!-- Section heading -->
      <div class="row pb-5">
        <div class="col-lg-12">
          <h5 class="section-title h1">Users</h5>
          <div class="table-responsive">
            <table id="admin_table" class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Last Name</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Hospital Name</th>
                  <th scope="col">Contact #</th>
                  <th scope="col">Email</th>
                  <th scope="col">Address</th>
                  <th scope="col">Specialization</th>
                  <th scope="col">User Type</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->lastname}}</td>

                  <td>{{$user->firstname}}</td>
                  <td>{{$user->user_type == 2 ? ($user->hospital ? $user->hospital->hospital_name : 'No added hospital yet.') : ($user->schedule ? $user->schedule->first()['hospital'] : 'No added hospital yet.') }}</td>

                  <td>{{$user->contact_number}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->specialization}}</td>
                  <td>{{$user->user_type == 2 ? "Hospital" : "Doctor"}}</td>
                  <td align="center">
                    <form action="{{route('delete')}}" method="post">
                      @csrf
                      <input type="hidden" name="user" value="{{$user->id}}"/>
                      <button type="submit" name="button" class="btn btn-danger">Delete Account</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot></tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Products v.4 -->

</div>
<!-- Container -->

</section>
<!--Section: articles-->

<!--Section: contact-->

<!--Section: contact-->

</main>
<!--Main layout-->





<div id="imageModal" class="modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

@endsection
