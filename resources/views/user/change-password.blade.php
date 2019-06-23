@extends('layouts.app')

@section('content')
<section>
  <div class="container">
      <h1>Change Password</h1>
    	<hr>
  	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="{{$user->avatar ? $user->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" width="150px" class="img-thumbnail" alt="avatar">
        </div>
      </div>
        <!-- left column -->
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
          @include('partials.flash-message')
          <h3>Change Password</h3>

          <form class="form-horizontal" action="{{route('user.update',$user->id)}}" method="post" role="form">

            @csrf
            @method('PUT')
            <div class="form-group">
              <label class="col-md-3 control-label">Current Password:</label>
              <div class="col-md-8">
                <input class="form-control" name="old_password" type="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">New Password:</label>
              <div class="col-md-8">
                <input id="password" type="password" class="form-control" name="password" required >
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div class="col-md-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  <hr>
</section>

@endsection
