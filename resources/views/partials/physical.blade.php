<div class="row">
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Test Date:</b></h5>
      {{$result->details->details['test_date']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Operator ID #:</b></h5>
      {{$result->details->details['operator_id']}}
    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Tester's Initials:</b></h5>
      {{$result->details->details['testers_initials']}}

    </div>
  </div>
  <div class="col-lg-12">
    <hr>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Chief Complaint:</b></h5>
      {{$result->details->details['chief_complaint']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Present Illness:</b></h5>
      {{$result->details->details['present_illness']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Past History:</b></h5>
      {{$result->details->details['past_history']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Family History:</b></h5>
      {{$result->details->details['family_history']}}

    </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Personal Social History:</b></h5>
      {{$result->details->details['personal_social_history']}}

    </div>
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

          <td><center>  {{$result->details->details['head_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['head_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Eyes, Ears, Nose, and Throat</b></h5></td>

          <td><center>  {{$result->details->details['eyes_ears_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['eyes_ears_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Respiratory and Cardio-Vascular</b></h5></td>

          <td><center>  {{$result->details->details['respiratory_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['respiratory_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Gastro-Intestinal</b></h5></td>


          <td><center>  {{$result->details->details['gastro_intestinal_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['gastro_intestinal_details'] }}</td>

        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genito-Urinary</b></h5></td>

          <td><center>  {{$result->details->details['genito_urinary_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['genito_urinary_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Reproductive</b></h5></td>

          <td><center>  {{$result->details->details['reproductive_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['reproductive_details'] }}</td>


        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Nervous</b></h5></td>

          <td><center>  {{$result->details->details['nervous_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['nervous_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Musculo-Skeletal</b></h5></td>


          <td><center>  {{$result->details->details['musculo_skeletal_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['musculo_skeletal_details'] }}</td>

        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Dermatological</b></h5></td>


          <td><center>  {{$result->details->details['dermatological_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['dermatological_details'] }}</td>

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
      {{$result->details->details['height']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Weight:</b></h5>
      {{$result->details->details['weight']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>BMI:</b></h5>
      {{$result->details->details['bmi']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>BP:</b></h5>
      {{$result->details->details['bp']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>PR:</b></h5>
      {{$result->details->details['pr']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>RR:</b></h5>
      {{$result->details->details['rr']}}

    </div>
  </div>
  <div class="col-lg-4">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Temp:</b></h5>
      {{$result->details->details['temp']}}

    </div>
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

          <td><center>  {{$result->details->details['general_appearance_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['general_appearance_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Skin</b></h5></td>

          <td><center>  {{$result->details->details['skin_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['skin_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Head and Eyes</b></h5></td>


          <td><center>  {{$result->details->details['head_eyes_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['head_eyes_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Ears, Nose, and Throat</b></h5></td>

          <td><center>  {{$result->details->details['ears_nose_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['ears_nose_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neck</b></h5></td>

          <td><center>  {{$result->details->details['neck_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['neck_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Chest and Lungs</b></h5></td>

          <td><center>  {{$result->details->details['chest_lungs_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['chest_lungs_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Heart</b></h5></td>


          <td><center>  {{$result->details->details['heart_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['heart_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Abdomen Extremities</b></h5></td>


          <td><center>  {{$result->details->details['abdomen_extremities_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['abdomen_extremities_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Genitals</b></h5></td>

          <td><center>{{$result->details->details['genitals_check'] ?? "None"}}</center></td>
          <td>{{$result->details->details['genitals_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Rectal</b></h5></td>


          <td>
            <center>
              {{$result->details->details['rectal_check'] ?? "None"}}
            </center>
          </td>
          <td>{{$result->details->details['rectal_details'] }}</td>
        </tr>
        <tr>
          <td style="text-align:center"><h5 class="text-primary pb-2"><b>Neurological</b></h5></td>
          <td>
            <center>
              {{$result->details->details['neurological_check'] ?? "None" }}
            </center>
          </td>
          <td> {{$result->details->details['neurological_details'] }}</td>
        </tr>

      </tbody>
    </table>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <h5 class="text-primary pb-2"><b>Comments:</b></h5>
      {{$result->details->details['comments']}}

    </div>
  </div>

</div>
