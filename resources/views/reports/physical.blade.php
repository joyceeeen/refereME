@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Pysical Exam Result</h5>
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('refer.store')}}" enctype="multipart/form-data">
          <div class="row">
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
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Chief Complaint:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Present Illness:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Past History:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Family History:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Personal Social History:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Review of System</b></h5></th>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Symptoms None</b></h5></th>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Present Details</b></h5></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Head</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Eyes, Ears, Nose, and Throat</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Respiratory and Cardio-Vascular</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Gastro-Intestinal</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genito-Urinary</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Reproductive</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Nervous</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Musculo-Skeletal</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Dermatological</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-12">
              <hr>
              <h5 class="text-primary pb-2"><b>Physical Exam:</b></h5>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Height:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Weight:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>BMI:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>BP:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>PR:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>RR:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Temp:</b></h5>
                <input type="text" name="contact_number" required class="form-control" id="contactNo">
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Review of System</b></h5></th>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Symptoms None</b></h5></th>
                    <th style="text-align:center"><h5 class="text-primary pb-2"><b>Present Details</b></h5></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>General Appearance</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Skin</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Head and Eyes</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Ears, Nose, and Throat</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neck</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Chest and Lungs</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Heart</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Abdomen Extremities</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genitals</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Rectal</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neurological</b></h5></td>
                    <td><center><input type="checkbox" name="vehicle1" value="Bike"></center></td>
                    <td><input type="text" name="contact_number" required class="form-control" id="contactNo"></td>
                  </tr>

                </tbody>
              </table>
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
