@extends('layouts.authLayout')

@section('content')


<div class="container-fluid">
  <div class="row align-items-center justify-content-center">
    <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block no-padding">

      <!-- Image -->
      <div class="bg-cover vh-100 mt-n1 mr-n3" style="background-image: url('https://images.pexels.com/photos/1282308/pexels-photo-1282308.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940');"></div>

    </div>
    <div class="col-12 col-md-5 col-lg-4" style="padding:60px">

      <!-- Heading -->
      <h1 class="display-4 text-center mb-3">
        Sign in
      </h1>

      <!-- Subheading -->
      <p class="text-muted text-center mb-5">
        Patient Referral System
      </p>

      <!-- Form -->
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email address -->
        <div class="form-group">

          <!-- Label -->
          <label for="email">{{ __('E-Mail Address') }}</label>

          <!-- Input -->
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
              <label for="password">{{ __('Password') }}</label>

            </div>
            <div class="col-auto">

              <!-- Help text -->
              <a href="{{ route('password.request') }}" class="form-text small text-muted">
                Forgot password?
              </a>

            </div>
          </div> <!-- / .row -->

          <!-- Input group -->
          <div class="input-group input-group-merge">

            <!-- Input -->
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
          Sign in
        </button>

        <!-- Link -->
        <p class="text-center">
          <small class="text-muted text-center">
            Don't have an account yet? <a href="register">Sign up</a>.
          </small>
        </p>

      </form>

    </div>

  </div> <!-- / .row -->
</div>
@endsection
