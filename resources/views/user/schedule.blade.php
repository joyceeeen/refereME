@extends('layouts.app')

@section('content')
<section>
  <div class="container">
      <h1>Edit Schedule</h1>
    	<hr>
  	<div class="row">
        <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
            <img src="{{$user->avatar ? $user->avatar : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAAAAAA6fptVAAAACklEQVQI12O4AQAA2gDZumdc2gAAAABJRU5ErkJggg=='}}" width="150px" class="img-thumbnail" alt="avatar">
          </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
          <h3>Schedule</h3>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="true">Monday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday" aria-selected="true">Thursday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="friday-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="friday" aria-selected="false">Friday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">Saturday</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">Sunday</a>
            </li>
          </ul>
          <div class="tab-content pt-4" id="myTabContent">
            @include('partials.flash-message')
            <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
              @if(isset($schedule) && $sched1)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">

              @endif
                @csrf
                <input type="hidden" name="day" value="1"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{ $sched1 ? $sched1->hospital: '' }}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{ $sched1 ? $sched1->address : ''}}"  class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">
                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched1 ? $sched1->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched1 ? $sched1->to : ''}}">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{ $sched1 ? $sched1->contact_number : ''}}" >
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
            <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
              @if(isset($schedule) && $sched2)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="2"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{ $sched2 ? $sched2->hospital : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{ $sched2 ? $sched2->address : ''}}"  class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">
                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched2 ? $sched2->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched2 ? $sched2->to : ''}}">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{ $sched2 ? $sched2->contact_number :''}}" >
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
            <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
              @if(isset($schedule) && $sched3)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="3"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{ $sched3 ? $sched3->hospital :''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{ $sched3 ? $sched3->address : ''}}"  class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">
                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched3 ? $sched3->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched3 ? $sched3->to : ''}}">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{ $sched3 ? $sched3->contact_number :''}}" >
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
            <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
              @if(isset($schedule) && $sched4)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="4"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{ $sched4 ? $sched4->hospital : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{ $sched4 ? $sched4->address : ''}}"  class="form-control" type="text">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">
                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched4 ? $sched4->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched4 ? $sched4->to : ''}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{ $sched4 ? $sched4->contact_number : ''}}" >
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
            <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
              @if(isset($schedule) && $sched5)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="5"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{ $sched5 ? $sched5->hospital : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{ $sched5 ? $sched5->address : ''}}"  class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">

                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched5 ? $sched5->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched5 ? $sched5->to : ''}}">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{ $sched5 ? $sched5->contact_number : ''}}" >
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
            <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-tab">
              @if(isset($schedule) && $sched6)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="6"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" class="form-control" value="{{$sched6 ? $sched6->hospital: ''}}" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{$sched6 ? $sched6->address : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">

                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched6 ? $sche6->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched6 ? $sched6->to : ''}}">

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" value="{{$sched6 ? $sched6->contact_number : ''}}" class="form-control" type="text" value="">
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
            <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
              @if(isset($schedule) && $sched7)
              <form class="form-horizontal" method="post" action="{{route('schedule.update',$user->id)}}" role="form">
                @method('PUT')
              @else
              <form class="form-horizontal" method="post" action="{{route('schedule.store')}}" role="form">
              @endif
                @csrf
                <input type="hidden" name="day" value="7"/>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Clinic/Hospital:</label>
                  <div class="col-lg-8">
                    <input name="hospital" value="{{$sched7 ? $sched7->hospital : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Address:</label>
                  <div class="col-lg-8">
                    <input name="address" value="{{$sched7 ? $sched7->address : ''}}" class="form-control" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Schedule:</label>
                  <div class="col-lg-8">
                    <label>From</label>
                    <input type="time" class="form-control" name="from" value="{{ $sched7 ? $sched7->from : ''}}">
                    <label>To </label>
                    <input type="time" class="form-control" name="to" value="{{ $sched7 ? $sched7->to : ''}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Contact Number:</label>
                  <div class="col-lg-8">
                    <input name="contact_number" class="form-control" type="text" value="{{$sched7 ? $sched7->contact_number : ''}}">
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
    </div>
  </div>
  <hr>
</section>

@endsection
