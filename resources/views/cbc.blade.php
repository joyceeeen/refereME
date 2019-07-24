@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">CBC Test Result</h5>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Collection Date:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Time Collected:</b></h5>
                <input type="time" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="birthday" required class="form-control" id="fName">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>White Blood Cell Count:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Red Blood Cell Count:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Hemoglobin:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Hematocrit:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCV:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCH:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MCHC:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>RDW:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Platelet Count:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>MPV:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Neutrophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Band Neutrophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Metamyelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Myelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Promyelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Lymphocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Monocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Eosinophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Basophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Blasts:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Absolute Nucleated RBC:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Neutrophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Band Neutrophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Metamyelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Myelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Promyelocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Lymphocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Reactive Lymphocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Monocytes:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Eosinophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Basophils:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Blasts:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Nucleated RBC:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Comments:</b></h5>
                <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
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
