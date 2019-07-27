@extends('layouts.app')

@section('content')
<section class="pb-5">
  <div class="container">
    <h5 class="section-title h1">Pysical Exam Result</h5>
    <p> <b>Patient Name:</b> {{$referral->patient->name}} </p>

    <div class="card">
      <div class="card-body">
        <form method="post" action="{{route('report-forms.store',['id'=>$reports->id,'referral_id'=>$referral->id])}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
                <input type="date" name="test_date" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
                <input type="text" name="operator_id" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
                <input type="text" name="testers_initials" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Chief Complaint:</b></h5>
                <input type="text" name="chief_complaint" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Present Illness:</b></h5>
                <input type="text" name="present_illness" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Past History:</b></h5>
                <input type="text" name="past_history" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Family History:</b></h5>
                <input type="text" name="family_history" required class="form-control" >
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Personal Social History:</b></h5>
                <input type="text" name="personal_social_history" required class="form-control" >
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
                    <td><center><input type="checkbox" value="Yes" name="head_check"></center></td>
                    <td><input type="text" name="head_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Eyes, Ears, Nose, and Throat</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="eyes_ears_check"></center></td>
                    <td><input type="text" name="eyes_ears_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Respiratory and Cardio-Vascular</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="respiratory_check"></center></td>
                    <td><input type="text" name="respiratory_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Gastro-Intestinal</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="gastro_intestinal_check"></center></td>
                    <td><input type="text" name="gastro_intestinal_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genito-Urinary</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="genito_urinary_check"></center></td>
                    <td><input type="text" name="genito_urinary_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Reproductive</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="reproductive_check"></center></td>
                    <td><input type="text" name="reproductive_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Nervous</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="nervous_check"></center></td>
                    <td><input type="text" name="nervous_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Musculo-Skeletal</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="musculo_skeletal_check"></center></td>
                    <td><input type="text" name="musculo_skeletal_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Dermatological</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="dermatological_check"></center></td>
                    <td><input type="text" name="dermatological_details"  class="form-control" ></td>
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
                <input type="text" name="height" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Weight:</b></h5>
                <input type="text" name="weight" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>BMI:</b></h5>
                <input type="text" name="bmi" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>BP:</b></h5>
                <input type="text" name="bp" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>PR:</b></h5>
                <input type="text" name="pr" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>RR:</b></h5>
                <input type="text" name="rr" required class="form-control">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <h5 class="text-primary pb-2"><b>Temp:</b></h5>
                <input type="text" name="temp" required class="form-control">
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
                    <td><center><input type="checkbox" value="Yes" name="general_appearance_check"></center></td>
                    <td><input type="text" name="general_appearance_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Skin</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="skin_check"></center></td>
                    <td><input type="text" name="skin_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Head and Eyes</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="head_eyes_check" ></center></td>
                    <td><input type="text" name="head_eyes_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Ears, Nose, and Throat</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="ears_nose_check" ></center></td>
                    <td><input type="text" name="ears_nose_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neck</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="neck_check" ></center></td>
                    <td><input type="text" name="neck_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Chest and Lungs</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="chest_lungs_check" ></center></td>
                    <td><input type="text" name="chest_lungs_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Heart</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="heart_check" ></center></td>
                    <td><input type="text" name="heart_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Abdomen Extremities</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="abdomen_extremities_check" ></center></td>
                    <td><input type="text" name="abdomen_extremities_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genitals</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="genitals_check" ></center></td>
                    <td><input type="text" name="genitals_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Rectal</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="rectal_check" ></center></td>
                    <td><input type="text" name="rectal_details"  class="form-control" ></td>
                  </tr>
                  <tr>
                    <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neurological</b></h5></td>
                    <td><center><input type="checkbox" value="Yes" name="neurological_check" ></center></td>
                    <td><input type="text" name="neurological_details"  class="form-control" ></td>
                  </tr>

                </tbody>
              </table>
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
