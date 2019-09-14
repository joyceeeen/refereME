
<h5><b>Ambulance</b></h5>
<p>{!! $hospital->ambulance !!}</p>
<hr>
<h5><b>Facilities</b></h5>
<p>{!! $hospital->facilities !!}</p>
<hr>
<h5><b>Services</b></h5>
<p>{!! $hospital->services !!}</p>
<hr>
<h5><b>Available Bedrooms</b></h5>
<p>{!! $hospital->bedrooms - $user->ref_count_count  !!}</p>
<hr>
