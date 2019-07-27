@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">CBC Test Result</h5>
    <p> <b>Patient Name:</b> {{$referral->patient->name}} </p>

    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('report-forms.store',['id'=>$reports->id,'referral_id'=>$referral->id])}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
                <input type="date" name="collection_date" required class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
                <input type="time" name="time_collected" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="test_date" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="operator_id" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="testers_initials" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>White Blood Cell Count:</b></h5>
                <input type="text" name="white_blood" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Red Blood Cell Count:</b></h5>
                <input type="text" name="red_blood" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Hemoglobin:</b></h5>
                <input type="text" name="hemoglobin" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Hematocrit:</b></h5>
                <input type="text" name="hematocrit" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCV:</b></h5>
                <input type="text" name="mcv" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCH:</b></h5>
                <input type="text" name="mch" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCHC:</b></h5>
                <input type="text" name="mchc" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>RDW:</b></h5>
                <input type="text" name="rdw" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Platelet Count:</b></h5>
                <input type="text" name="platelet" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MPV:</b></h5>
                <input type="text" name="mpv" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Neutrophils:</b></h5>
                <input type="text" name="absolute_neutrophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Band Neutrophils:</b></h5>
                <input type="text" name="absolute_band_neutrophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Metamyelocytes:</b></h5>
                <input type="text" name="absolute_metamyelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Myelocytes:</b></h5>
                <input type="text" name="absolute_myelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Promyelocytes:</b></h5>
                <input type="text" name="absolute_promyelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Lymphocytes:</b></h5>
                <input type="text" name="absolute_lymphocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Monocytes:</b></h5>
                <input type="text" name="absolute_monocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Eosinophils:</b></h5>
                <input type="text" name="absolute_eosinophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Basophils:</b></h5>
                <input type="text" name="absolute_basophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Blasts:</b></h5>
                <input type="text" name="absolute_blasts" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Nucleated RBC:</b></h5>
                <input type="text" name="absolute_nucleated_rbc" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Neutrophils:</b></h5>
                <input type="text" name="neutrophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Band Neutrophils:</b></h5>
                <input type="text" name="band_neutrophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Metamyelocytes:</b></h5>
                <input type="text" name="metamyelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Myelocytes:</b></h5>
                <input type="text" name="myelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Promyelocytes:</b></h5>
                <input type="text" name="promyelocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Lymphocytes:</b></h5>
                <input type="text" name="lymphocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Reactive Lymphocytes:</b></h5>
                <input type="text" name="reactive_lymphocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Monocytes:</b></h5>
                <input type="text" name="monocytes" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Eosinophils:</b></h5>
                <input type="text" name="eosinophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Basophils:</b></h5>
                <input type="text" name="basophils" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Blasts:</b></h5>
                <input type="text" name="blasts" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Nucleated RBC:</b></h5>
                <input type="text" name="nucleated_rbc" required class="form-control">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Comments:</b></h5>
                <textarea name="comments" rows="8" cols="80" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-primary">Submit Report</button>

              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
