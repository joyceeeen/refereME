<div class="col-lg-12">
  <div class="image-flip">
    <div class="mainflip">
      <div class="frontside hospital">
        <div class="card">
          <div class="card-body text-center">
            <p><img class="imgHospital img-fluid" src="{{$hospital->avatar ? '/'.$hospital->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" alt="card image"></p>
            <h4 class="card-title">{{$hospital->hospital->hospital_name}}</h4>
            <p class="card-title mb-0 font-weight-bold">{{$hospital->license_number}}</p>
            <p class="card-text font-weight-bold mb-0">{{$hospital->hospital->location}}</p>
            <p class="card-text mb-0">{{$hospital->contact_number}}</p>
            <p><a href="#" data-toggle="modal" data-id="{{$hospital->id}}" class="moreDetailsModal card-title mb-3">More Details</a></p>
            <p class="card-text font-weight-bold mb-0 text-primary"><i>Open 24 Hours</i></p>
            <hr>
            <center><h5><b>Refer Patient</b></h5></center>

            @if(request()->client)
            <form action="{{route('refer.update',['id'=>request()->client])}}" method="post">
              @csrf
              @method('put')
              <input type="hidden" name="referAgain" value="1"/
              <input type="hidden" name="hospital" value="{{$hospital->id}}"/>
              <button type="submit" class="btn btn-primary mt-2">Refer</button>
            </form>
            @else

              @if($hospital->ref_count_count >= $hospital->hospital->bedrooms || $hospital->hospital->bedrooms == 0)
              <center><i>No Available Bedrooms</i> </center>
              <a href="{{route('refer.create',['id'=>$hospital->id])}}" style="pointer-events: none; cursor:default; opacity: 0.6" title="" name="button" class="btn btn-primary">NEW</a>
              <a href="#" id="referExisting" name="button" style="pointer-events: none; cursor:default;opacity: 0.6" title="No Available Bedrooms"  class="btn btn-primary referExisting" data-id="{{$hospital->id}}" data-toggle="modal" data-target="#myModal">EXISTING</a>

              @else
              <a href="{{route('refer.create',['id'=>$hospital->id])}}"  name="button" class="btn btn-primary">NEW</a>
              <a href="#" id="referExisting" name="button"   class="btn btn-primary referExisting" data-id="{{$hospital->id}}" data-toggle="modal" data-target="#myModal">EXISTING</a>
              @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="moreDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">More Details</h5>
        <p id="license_number" class="card-title mb-0 font-weight-bold"></p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Patient ID</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="{{route('refer.create')}}" method="get">
        <div class="modal-body">
          <input type="hidden" name="id" id="id" value="">
          <input type="text" name="patientNo" required class="form-control" placeholder="Patient ID" >
        </div>
        <div class="modal-footer">
          <center>
            <button type="submit" class="btn btn-primary">Refer Patient</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</div>
