@extends('layouts.app')

@section('content')
<section class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR HOSPITAL</h5>
        <div class="row">

          @foreach($hospitals as $hospital)
            <!-- hospital member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside hospital">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class="imgHospital  img-fluid" src="https://maniladoctors.com.ph/wp-content/uploads/2018/03/MDH-Today2.jpg" alt="card image"></p>
                                    <h4 class="card-title">Manila Doctors Hospital</h4>
                                    <p class="card-text font-weight-bold mb-0">667 United Nations Ave, Ermita, Manila, 1000 Metro Manila</p>
                                    <p class="card-text mb-0">(02) 558 0888</p>
                                    <p class="card-text font-weight-bold mb-0 text-primary"><i>Open 24 Hours</i></p>
                                    <button type="button" name="button" class="btn btn-primary mt-2">Refer Client</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./hospital member -->
          @endforeach
        </div>
        <div class="row">
          <div class="col-lg-12">
            {{ $hospitals->links() }}
          </div>
        </div>
    </div>
</section>

@endsection
