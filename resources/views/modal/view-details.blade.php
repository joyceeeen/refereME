<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Referred Patient Details</h5>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Referred By:</b></h4>
              @if($referral->referredBy->user_type == 2)
              {{$referral->referredBy->hospital->hospital_name}}
              @else
              {{$referral->referredBy->name}}
              @endif
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Referred To:</b></h4>
              @if($referral->referredTo->user_type == 2)
              {{$referral->referredTo->hospital->hospital_name}}
              @else
              {{$referral->referredTo->name}}
              @endif
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Priority Level:</b></h4>
              {{ceil($referral->level)}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Patient ID:</b></h4>
              {{$referral->patient->hash}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Date Referred:</b></h4>
              {{$referral->created_at}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <h4 class="text-primary pb-2"><b>Last Name:</b></h4>
              {{$referral->patient->lastname}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>First Name:</b></h5>
              {{$referral->patient->firstname}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Middle Name:</b></h5>
              {{$referral->patient->middlename}}

            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Date of Birth:</b></h5>
              {{$referral->patient->birthday}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Contact Number:</b></h5>
              {{$referral->patient->contact_number}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Email Address:</b></h5>
              {{$referral->patient->email_address}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Sex:</b></h5>
              {{$referral->patient->gender}}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Pregnant?</b></h5>
              {{$referral->patient->heart_disease}}
            </div>
          </div>
          <!-- <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>Stroke?</b></h5>
              {{$referral->patient->stroke}}
            </div>
          </div> -->
          <div class="col-lg-4">
            <div class="form-group">
              <h5 class="text-primary pb-2"><b>PWD:</b></h5>
              {{$referral->patient->pwd}}
            </div>
          </div>
        </div>
        <hr>
        <div class="text-justify">
          <h3 class="text-primary pb-2"><b>Reason for Referral</b></h3>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Disease:</b></h5>
                {{$referral->disease->title}}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Report:</b></h5>
                {{$referral->report}}
              </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="text-justify">
          <h5 class="text-primary pb-2"><b>Attachments:</b></h5>
          <ul>
            @foreach($referral->reports as $key=>$report)
            <li><a href="/attachment/{{$report->id}}">Attachment #{{$key + 1}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          @foreach($referral->tests as $key => $test)
          <li class="nav-item">
            <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{$test->reference->view}}-tab" data-toggle="tab" href="#{{$test->reference->view}}" role="tab" aria-controls="cbc" aria-selected="true">{{$test->reference->report}}</a>
          </li>
          @endforeach

        </ul>
        <div class="tab-content" id="myTabContent">
          @foreach($referral->tests as $key => $result)
          <div class="tab-pane fade show {{$key == 0 ? 'active' : ''}} pt-3" id="{{$result->reference->view}}" role="tabpanel" aria-labelledby="{{$result->reference->view}}-tab">
            @include('partials.'.$result->reference->view)
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
