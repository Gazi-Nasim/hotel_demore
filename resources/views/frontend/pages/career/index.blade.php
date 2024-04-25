@extends('frontend.layouts.frontend_master')
@section('title', 'Luxury Hotel | Restaurant')

@section('content')
<!-- Restaurant Content -->
{{-- <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">An Experience for the Senses</div>
                    <div class="section-title">The Restaurant</div>
                </div>
                <div class="col-md-12">
                    <p class="mb-30">Led by Chef de Micheal Martin, The Restaurant is celebrated for its excellent cuisine
                        and unique ambience. The gorgeous dining room features three open studio kitchens, allowing you to
                        enjoy the sights and sounds of the culinary artistry on display. The menu showcases both Asian and
                        European influences, with a tempting selection of classic favorites and creative dishes for you to
                        sample. Cheese connoisseurs will be drawn to the The Wine and Cheese Cellar, housed in
                        five-meter-high glass walls, where our knowledgeable staff can introduce you to some of New York's
                        greatest culinary treasures.</p>
                    <h6>Hours</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                            <div class="page-list-text">
                                <p>Breakfast: 7.00 am – 11.00 am (daily)</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                            <div class="page-list-text">
                                <p>Lunch: 12.00 noon – 2.00 pm (daily)</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-time"></span> </div>
                            <div class="page-list-text">
                                <p>Dinner: open from 6.30 pm, last order at 10.00 pm (daily)</p>
                            </div>
                        </li>
                    </ul>
                    <h6>Dress Code</h6>
                    <p>Smart casual (no shorts, hats, or sandals permitted)</p>
                    <h6>Terrace</h6>
                    <p>Open for drinks only</p>
                </div>
            </div>
        </div>
    </section> --}}
<div class="container">
  <div class="row section-padding justify-content-center">
    <div class="col-md-12">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <form method="POST" class="w-100 rounded-1 p-4 border bg-white" action="{{ route('career.store') }}" enctype="multipart/form-data">
        @csrf
        <label class="d-block mb-4">
          <span class="form-label d-block">Full Name (English)</span>
          <input required name="name" type="text" class="form-control" {{-- placeholder="Joe Bloggs" --}} />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Full Name (Bangla)</span>
          <input required name="name_bn" type="text" class="form-control" />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Father's Name</span>
          <input required name="father" type="text" class="form-control" />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Mother's Name</span>
          <input required name="mother" type="text" class="form-control" />
        </label>

        <div class="form-group">
          <label for="inputAddress">Present Address</label>
          <input type="text" class="form-control" id="inputAddress" name="psnt_address">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Permanent Address</label>
          <input type="text" class="form-control" id="inputAddress2" name="prmnt_address">
        </div>
        <label class="d-block mb-4">
          <span class="form-label d-block">Vacancy Position</span>
          <input required name="vacan_posi" type="text" class="form-control" />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Reference</span>
          <input required name="reference" type="text" class="form-control" />
        </label>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Exprience 1</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Job Duration, Organization, Position" name="experience_1"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Exprience 2</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Job Duration, Organization, Position" name="experience_2"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Exprience 3</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Job Duration, Organization, Position" name="experience_3"></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email Here" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="form-group">
          <label for="exampleInputNumber">Phone Number</label>
          <input type="tel" class="form-control" id="exampleInputNumber" placeholder="Enter Phone Number" name="phone">
          <small id="phone" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>

        <label class="d-block mb-4">
          <span class="form-label d-block">Years of experience</span>
          <select required name="experience_time" class="form-select">
            <option>Less than a year</option>
            <option>1 - 2 years</option>
            <option>2 - 4 years</option>
            <option>4 - 7 years</option>
            <option>7 - 10 years</option>
            <option>10+ years</option>
          </select>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Tell us more about yourself</span>
          <textarea name="message" class="form-control" rows="3" placeholder="What motivates you?"></textarea>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Your CV</span>
          <input required name="cv" type="file" class="form-control" />
        </label>

        <div class="mb-4">
          <div>
            <div class="form-check">
              <label class="d-block">
                <input type="radio" class="form-check-input" name="remote" value="yes" checked />
                <span class="form-check-label">You'd like to work remotely</span>
              </label>
            </div>
          </div>
          <div>
            <label class="form-check">
              <input type="radio" class="form-check-input" name="remote" value="no" />
              <span class="form-check-label">You'd prefer to work onsite</span>
            </label>
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary px-3 rounded-3">
            Apply
          </button>
        </div>

        <div class="d-block text-end">
          <div class="small">
            by
            <a href="https://hsblco.com" class="text-dark text-decoration-none" target="_blank">HSBLCO</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>