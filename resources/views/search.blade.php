@extends('layouts.app')

@section('content')
<section class="pb-5">
    <div class="container">
        <h5 class="section-title h1">OUR DOCTORS</h5>
        <div class="row pb-4">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col searchCol">
                    <input type="text" name="" value="" class="form-control" placeholder="Doctor's First Name">
                  </div>
                  <div class="col searchCol">
                    <input type="text" name="" value="" class="form-control" placeholder="Doctor's Last Name">
                  </div>
                  <div class="col searchCol">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option value="">Select Specialization</option>
                      <option value="Anesthesiology">Anesthesiology</option>
                      <option value="Dental Medicine">Dental Medicine</option>
                      <option value="Dermatology">Dermatology</option>
                      <option value="Family and Community Medicine">Family and Community Medicine</option>
                      <option value="Internal Medicine">Internal Medicine</option>
                      <option value="Laboratory Medicine">Laboratory Medicine</option>
                      <option value="Legal Medicine">Legal Medicine</option>
                      <option value="Nuclear Medicine">Nuclear Medicine</option>
                      <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                      <option value="Occupational Medicine">Occupational Medicine</option>
                      <option value="Ophthalmology">Ophthalmology</option>
                      <option value="Orthopedics">Orthopedics</option>
                      <option value="Otorhinolaryngology">Otorhinolaryngology</option>
                      <option value="Pediatrics">Pediatrics</option>
                      <option value="Radiology">Radiology</option>
                      <option value="Rehabilitation Medicine">Rehabilitation Medicine</option>
                      <option value="Surgery">Surgery</option>
                    </select>
                  </div>
                  <div class="col-lg-2 searchCol">
                    <button type="button" name="button" class="btn btn-primary" style="width:100%">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://scontent.fmnl17-2.fna.fbcdn.net/v/t1.0-9/64408320_2335937843166786_1880100871304380416_n.jpg?_nc_cat=107&_nc_oc=AQlqF2G5D3RGUlU4CJaGbXxRSmmWuTQ_IdgRS9Ny1sDfgiop-NjFokHT9oPbv_hOx9A&_nc_ht=scontent.fmnl17-2.fna&oh=6dd1a576b274b7d87da7c29302606e4c&oe=5D82314B" alt="card image"></p>
                                    <h4 class="card-title">Internal Medicine</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://scontent.fmnl17-2.fna.fbcdn.net/v/t1.0-9/52724384_2618766804807083_6427918209189412864_n.jpg?_nc_cat=110&_nc_oc=AQkVxDkv3IvJoyF2X0PuX8JGs5HioKReSuwCr9KFCF8ifE7u0quu6cU2cpBNbZocTiI&_nc_ht=scontent.fmnl17-2.fna&oh=75eab75eddec47a758e21d49dcadd512&oe=5DC08506" alt="card image"></p>
                                    <h4 class="card-title">Internal Medicine</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="data:image/jpeg;base64,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" alt="card image"></p>
                                    <h4 class="card-title">Nephrology</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://pbs.twimg.com/media/CpdPmHwUAAA7XQq.jpg" alt="card image"></p>
                                    <h4 class="card-title">Internal Medicine</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="http://vitalsigns.com.ph/wp-content/uploads/2014/01/Column-Dr-Anthony-Leachon-photo.jpg" alt="card image"></p>
                                    <h4 class="card-title">General Orthopedics</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGHVK4eyV3wUx9xIB3JOuVE27NpKcXfSb8rVfMYZgRM7U2fCog6w" alt="card image"></p>
                                    <h4 class="card-title">Cardiology</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="...">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    </div>
</section>

@endsection
