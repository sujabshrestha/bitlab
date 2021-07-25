@extends('frontEnd.layout.master')
@section('pageTitle', 'About Us | '.getSiteSetting('site_title'))
@section('pageName', 'About Us')
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    {{-- @include('frontEnd.layout.page-title') --}}
    <!-- /.page-title -->

    <!-- About -->
    <div class="inner-page-banner">
        <div class="container">
            <div class="banner-content">
                <h1>
                    About Us
                </h1>
            </div>
        </div>
    </div>
    <div class="about-details">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="about--details">
              <div class="common-content">
                <div class="common-title">
                  <span>About us</span>
                  <h2>
                    <a href="/">
                      Bidh Lab
                    </a>
                  </h2>
                </div>
                <div class="common-short-content">
                  <p>
                    Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                  </p>
                  <p>
                    Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="image-container">
              <img src="{{ asset('images/about-12.png') }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="company-visions">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="vision-container">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item nav1" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    Vision</a>
                </li>
                <li class="nav-item img1 imageprop">
                  <div class="image-box"></div>
                </li>
                <li class="nav-item nav2" role="presentation">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mission</a>
                </li>
                <li class="nav-item img2 imageprop">
                  <div class="image-box"></div>
                </li>
                <li class="nav-item nav3" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Goal</a>
                </li>
                <li class="nav-item img3 imageprop">
                  <div class="image-box"></div>
                </li>
                <li class="nav-item nav4" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact" aria-selected="false"></a>
                </li>
                <li class="nav-item nav5" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contac2" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img src="{{ asset('images/logo.png') }}" />
                  </a>
                </li>
                <li class="nav-gredient box1">
                  <div class="gredient-box"></div>
                </li>
                <li class="nav-gredient box2">
                  <div class="gredient-box"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="text-container">
                  <h4>Our Vision</h4>
                  <div class="text-content">
                    <p> Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                    <p>
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="text-container">
                  <h4>Our Mission</h4>
                  <div class="text-content">
                    <p> Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                    <p>
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="text-container">
                  <h4>Our Goal</h4>
                  <div class="text-content">
                    <p> Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                    <p>
                      Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('frontEnd.partialsection.msgfromcm')
    @include('frontEnd.partialsection.aboutteam')
    @include('frontEnd.partialsection.client')
    @include('frontEnd.partialsection.testomonial')
@endsection

@push('script')


@endpush
