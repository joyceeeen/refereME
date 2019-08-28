<!DOCTYPE html>
<html>
<head>

	<title>ReferMe</title>
	<style media="screen">
	.text-primary {
	color: #3490dc!important;
}
body {
    margin: 0;
    font-family: Nunito,sans-serif;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
}
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
section .section-title {
    text-align: center;
    color: #3490dc;
    text-transform: uppercase;
    font-weight: bolder;
}
.h1, h1 {
    font-size: 2.25rem;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card {
    border-radius: 6px;
    box-shadow: 0 6px 10px -4px rgba(0,0,0,.15);
    background-color: #fff;
    color: #252422;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col-lg-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
		position: relative;
width: 100%;
min-height: 1px;
padding-right: 15px;
padding-left: 15px;
}
.form-group {
    margin-bottom: 1rem;
}

*, :after, :before {
    box-sizing: border-box;
}
.pb-2, .py-2 {
    padding-bottom: .1rem!important;
}
.h4, h4 {
    font-size: 1.35rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .1rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}
b, strong {
    font-weight: bolder;
}
.h5, h5 {
    font-size: 1.125rem;
}
.col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
		position: relative;
width: 100%;
min-height: 1px;
padding-right: 15px;
padding-left: 15px;
}
table{
	width:100%;
	padding-left: 15px;
	padding-right: 15px;
	background: #fff;
	padding-bottom: 15px;
	border-radius: 6px;
	box-shadow: 0 6px 10px -4px rgba(0,0,0,.15);
}
.h3, h3 {
    font-size: 1.575rem;
}
.page-break {
    page-break-after: always;
}
	</style>
</head>
<body>
	<section>
		<div class="container">
			<h5 class="section-title h1">Referred Patient Details</h5>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<table>
							<tr>
								<td><h4 class="text-primary pb-2"><b>Referred By:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Referred To:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Priority Level:</b></h4></td>
							</tr>
							<tr>
								<td>{{$referral->referredBy->user_type == 1 ? $referral->referredBy->name : $referral->referredBy->hospital->hospital_name}}</td> <!-- Referred By: -->
								<td>{{$referral->referredTo->user_type == 1 ? $referral->referredTo->name : $referral->referredTo->hospital->hospital_name}}</td> <!-- Referred To-->
								<td>{{ceil($referral->level)}}</td> <!-- Priority Level -->
							</tr>
							<tr>
								<td><h4 class="text-primary pb-2"><b>Last Name:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>First Name:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Middle Name:</b></h4></td>
							</tr>
							<tr>
								<td>{{$referral->patient->lastname}}</td> <!-- Last Name -->
								<td>{{$referral->patient->firstname}}</td> <!-- First Name -->
								<td>{{$referral->patient->middlename}}</td> <!-- Middle Name -->
							</tr>
							<tr>
								<td><h4 class="text-primary pb-2"><b>Date of Birth:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Contact Number:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Email Address:</b></h4></td>
							</tr>
							<tr>
								<td>{{$referral->patient->birthday}}</td> <!-- Bday -->
								<td>{{$referral->patient->contact_number}}</td> <!-- Contact Number -->
								<td>{{$referral->patient->email_address}}</td> <!-- Email -->
							</tr>
							<tr>
								<td><h4 class="text-primary pb-2"><b>Sex:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Heart Disease?:</b></h4></td>
								<td><h4 class="text-primary pb-2"><b>Stroke?:</b></h4></td>
							</tr>
							<tr>
								<td>{{$referral->patient->gender}}</td> <!-- Sex -->
								<td>{{$referral->patient->heart_disease == 0 ? "No" : "Yes"}}</td> <!-- Heart Disease? -->
								<td>{{$referral->patient->stroke == 0 ? "No" : "Yes"}}</td> <!-- Stroke -->
							</tr>
							<tr>
								<td><h4 class="text-primary pb-2"><b>PWD:</b></h4></td>
							</tr>
							<tr>
								<td>{{$referral->patient->pwd == 0 ? "No" : "Yes"}}</td> <!-- PWD -->
							</tr>
						</table>
					</div>

					<hr>
					<div>
						<h3 class="text-primary"><b>Reason for Referral</b></h3>

						<div class="row">
							<table>
								<tr>
									<td> <h4 class="text-primary pb-2"><b>Disease:</b></h4></td>
								</tr>
								<tr>
									<td>{{$referral->disease->title}}</td> <!-- Disease -->
								</tr>
								<tr>
									<td> <h4 class="text-primary pb-2"><b>Report:</b></h4></td>
								</tr>
								<tr>
									<td> <!-- Report -->
											{{$referral->disease->report}}
									</td>
								</tr>
							</table>
						</div>
					</div>
					<hr>

				</div>
			</div>

		</div>
	</section>
	<div class="page-break"></div>
	<h3 class="text-primary" style="text-align:center;margin:0px;"><b>{{$referral->referredTo->user_type == 1 ? $referral->referredTo->name : $referral->referredTo->hospital->hospital_name}}</b></h3>
	<h4 class="text-primary" style="text-align:center;margin:0px;"><b>{{$referral->referredTo->license_number}}</b></h4>
	<h5 class="text-primary" style="text-align:center;margin:0px;">{{$referral->referredTo->user_type == 1 ? $referral->referredTo->specialization : ''}}</h5>
<br>
	<h5 style="text-align:center;margin:0px;"><b>{{$referral->referredTo->user_type == 1 ? $referral->referredTo->address : $referral->referredTo->hospital->location}}</b></h5>
	<h5 style="text-align:center;margin:0px;">{{$referral->referredTo->contact_number}}</h5>
<br><br>
@foreach($referral->referredTo->schedule as $sched)
<h4 class="text-primary" style="margin:0px;"><b>{{$sched->day_name}}</b></h4>
<br>
	<table>
		<tr>
			<td style="font-weight:bold">Clinic/Hospital</td>
			<td style="font-weight:bold">Address</td>
		</tr>
		<tr>
			<td>{{$sched->hospital}}</td>
			<td>{{$sched->address}}</td>
		</tr>
		<tr>
			<td style="font-weight:bold">Schedule</td>
			<td style="font-weight:bold">Contact Number</td>
		</tr>
		<tr>
			<td>{{date('H:i A', strtotime($sched->from)).' - '. date('H:i', strtotime($sched->to))}}</td>
			<td>{{$sched->contact_number}}</td>
		</tr>
	</table>
@endforeach
</body>
</html>
