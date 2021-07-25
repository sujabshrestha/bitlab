@extends('frontEnd.layout.master')
@section('pageTitle', 'Blogs | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
@endpush

@section('content')

<div class="inner-page-banner">
    <div class="container">
        <div class="banner-content">
            <h1>
                Contact Us
            </h1>
        </div>
    </div>
</div>
<section class="contact-main">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="horizo1"></li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-circle" aria-hidden="true"></i></a>
                <div class="nav-content w_single">
                  Un Park Kupandol, Lalitpur
                </div>
            </li>
            <li class="horizo1"></li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-circle" aria-hidden="true"></i></a>
                <div class="nav-content w_single">
                  PrithiviChok Pokhara Kaski
                </div>
              </li>
            <li class="horizo1"></li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-circle" aria-hidden="true"></i></a>
                <div class="nav-content w_double">
                  <ul>
                    <li>Butwal</li>
                    <li>Hetauda</li>
                    <li>Nepalgung</li>
                    <li>Dhangadi</li>
                    <li>Dang</li>
                    <li>Janakpur</li>
                    <li>Biratnagar</li>
                    <li>Birtamoad</li>
                  </ul>
                </div>
            </li>
            <li class="horizo1"></li>
        </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li>Un Park Kupandol, Lalitpur</li>
                    <li>+977-01-4565456</li>
                    <li>bidh@mail.com</li>
                  </ul>
                </div>
                <div class="col-md-8">
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14131.296963258917!2d85.33161443165234!3d27.691826624771764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6945317!2d85.3446312!4m5!1s0x39eb190b109ed8e5%3A0x426c2fb504b10d3d!2san4soft!3m2!1d27.6844745!2d85.3336149!5e0!3m2!1sen!2snp!4v1626769263058!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li>PrithiviChok Pokhara Kaski</li>
                    <li>+977-01-4565456</li>
                    <li>bidh@mail.com</li>
                  </ul>
                </div>
                <div class="col-md-8">
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14131.296963258917!2d85.33161443165234!3d27.691826624771764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6945317!2d85.3446312!4m5!1s0x39eb190b109ed8e5%3A0x426c2fb504b10d3d!2san4soft!3m2!1d27.6844745!2d85.3336149!5e0!3m2!1sen!2snp!4v1626769263058!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li>Other Area Comming Soon</li>
                    <li>+977-01-4565456</li>
                    <li>bidh@mail.com</li>
                  </ul>
                </div>
                <div class="col-md-8">
                  <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d14131.296963258917!2d85.33161443165234!3d27.691826624771764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6945317!2d85.3446312!4m5!1s0x39eb190b109ed8e5%3A0x426c2fb504b10d3d!2san4soft!3m2!1d27.6844745!2d85.3336149!5e0!3m2!1sen!2snp!4v1626769263058!5m2!1sen!2snp" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
<section class="contact-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="info-card">
            sajdsah
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')
@endsection

@push('script')


@endpush
