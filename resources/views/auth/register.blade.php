@extends('layouts.authLayout')

@section('content')
<div class="container-fluid">
  <div class="row align-items-center justify-content-center">
    <div class="col-12 col-md-5 col-lg-4" style="padding:60px">

      <!-- Heading -->
      <h1 class="display-4 text-center mb-3">
        Register
      </h1>
      <!-- Subheading -->
      <p class="text-muted text-center mb-5">
        Patient Referral System
      </p>
      <!-- Form -->
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
          <!-- <label for="exampleFormControlSelect1">Select</label> -->
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Doctor</option>
            <option>Hospital</option>
          </select>
        </div>
        <!-- Email address -->
        <div class="form-group">

          <!-- Label -->
          <label>{{ __('Name') }}</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

        <!-- Email address -->
        <div class="form-group">

          <!-- Label -->
          <label>{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

        <!-- Password -->
        <div class="form-group">

          <div class="row">
            <div class="col">

              <!-- Label -->
              <label>{{ __('Password') }}</label>

            </div>
          </div> <!-- / .row -->

          <!-- Input group -->
          <div class="input-group input-group-merge">

            <!-- Input -->
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <!-- Confirm Password -->
        <div class="form-group">

          <div class="row">
            <div class="col">

              <!-- Label -->
              <label>{{ __('Confirm Password') }}</label>

            </div>
          </div> <!-- / .row -->

          <!-- Input group -->
          <div class="input-group input-group-merge">

            <!-- Input -->
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>
        <!-- Submit -->
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
          {{ __('Register') }}
        </button>

        <!-- Link -->
        <p class="text-center">
          <small class="text-muted text-center">
            Already have an account? <a href="login">Sign in</a>.
          </small>
        </p>

      </form>

    </div>
    <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

      <!-- Image -->
      <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url('https://images.pexels.com/photos/1282308/pexels-photo-1282308.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940');"></div>

    </div>
  </div> <!-- / .row -->
</div>
@endsection
