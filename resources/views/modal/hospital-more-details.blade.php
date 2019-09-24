<h5><b>Ambulance</b></h5>
<p>{!! $hospital->ambulance !!}</p>
<hr>
<h5><b>Facilities</b></h5>
<p>{!! $hospital->facilities !!}</p>
<div class="col-md-12 mb-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($hospital->photos as $key => $photo)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class=""></li>
      @endforeach

    </ol>
    <div class="carousel-inner">
      @foreach($hospital->photos as $key=>$photo)
      <div class="carousel-item {{$key === 0 ? 'active' :''}}">
        <img class="d-block w-100 imgCarousel" src="{{asset($photo->path)}}" alt="First slide">
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<hr>
<h5><b>Services</b></h5>
<p>{!! $hospital->services !!}</p>
<hr>
<h5><b>Available Bedrooms</b></h5>
<p>{!! $hospital->bedrooms - $user->ref_count_count  !!}</p>
<hr>
