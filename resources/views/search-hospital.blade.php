@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">OUR HOSPITALS</h5>
    @if($nearest)
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-primary font-weight-bold">NEAREST</h5>
      </div>
    </div>
    <div class="row">

      @foreach($nearest as $hospital)
      <!-- hospital member -->
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip">
          <div class="mainflip">
            <div class="frontside hospital">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class="imgHospital img-fluid" src="{{$hospital->avatar ? '/'.$hospital->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
                  <h4 class="card-title">{{$hospital->hospital->hospital_name}}</h4>
                  <p class="card-text font-weight-bold mb-0">{{$hospital->hospital->location}}</p>
                  <p class="card-text mb-0">{{$hospital->contact_number}}</p>
                  <p><a href="#" data-toggle="modal" data-id="{{$hospital->id}}" class="moreDetailsModal card-title mb-3">More Details</a></p>

                  <p class="card-text font-weight-bold mb-0 text-primary"><i>Open 24 Hours</i></p>

                  @if(request()->client)
                  <form action="{{route('refer.update',['id'=>request()->client])}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="referAgain" value="1"/
                    <input type="hidden" name="hospital" value="{{$hospital->id}}"/>
                    <button type="submit" class="btn btn-primary mt-2">Refer</button>
                  </form>
                  @else
                  <a href="{{route('refer.create',['id'=>$hospital->id])}}" name="button" class="btn btn-primary mt-2">Refer Client</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./hospital member -->
      @endforeach
    </div>
    @endif
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-primary font-weight-bold">HOSPITALS</h5>
      </div>
    </div>
    <div class="row">

      @foreach($hospitals as $hospital)
      <!-- hospital member -->
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="image-flip">
          <div class="mainflip">
            <div class="frontside hospital">
              <div class="card">
                <div class="card-body text-center">
                  <p><img class="imgHospital img-fluid" src="{{$hospital->avatar ? '/'.$hospital->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
                  <h4 class="card-title">{{$hospital->hospital->hospital_name}}</h4>
                  <p class="card-text font-weight-bold mb-0">{{$hospital->hospital->location}}</p>
                  <p class="card-text mb-0">{{$hospital->contact_number}}</p>
                  <p><a href="#" data-toggle="modal" data-id="{{$hospital->id}}" class="moreDetailsModal card-title mb-3">More Details</a></p>
                  <p class="card-text font-weight-bold mb-0 text-primary"><i>Open 24 Hours</i></p>
                  @if(request()->client)
                  <form class="" action="{{route('refer.update',['id'=>request()->client])}}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="referAgain" value="1"/>
                    <input type="hidden" name="hospital" value="{{$hospital->id}}"/>
                    <button type="submit" class="btn btn-primary mt-2">Refer</button>
                  </form>
                  @else
                  <a href="{{route('refer.create',['id'=>$hospital->id])}}" name="button" class="btn btn-primary mt-2">Refer Client</a>
                  @endif
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

  <div class="modal fade" id="moreDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>

      </div>
    </div>
  </div>
</section>

@endsection
