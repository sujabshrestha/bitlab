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
                Our Services
            </h1>
        </div>
    </div>
</div>
<section class="service-page-section">
    <div class="container">
        <div class="service-quote">
            <h4>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation. Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nationMaking an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</h4>
        </div>
        <div class="row service-area">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="service-content tab-pane fade show active" id="v-pills-cardiology" role="tabpanel" aria-labelledby="v-pills-cardiology-tab">
                        <div class="item-box main-box" style="background-image: url('{{ asset('images/Cardiology/car.jpeg') }}');"></div>
                        <div class="item-box sec-box" style="background-image: url('{{ asset('images/Cardiology/caar.jpeg') }}');"></div>
                        <div class="item-box contain-box">
                            <div class="contain--box">
                                <span>1</span>
                                <p>Medical Imaging refers to a range of non-invasive procedures for detecting and monitoring diseases or injuries by generating images of internal anatomic structures and organs of the body</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-content  tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="item-box main-box" style="background-image: url('{{ asset('images/Doctor_Consulation/scansss.jpeg') }}');"></div>
                        <div class="item-box sec-box" style="background-image: url('{{ asset('images/Doctor_Consulation/consult.jpeg') }}');"></div>
                        <div class="item-box contain-box">
                            <div class="contain--box">
                                <span>2</span>
                                <p>Medical Imaging refers to a range of non-invasive procedures for detecting and monitoring diseases or injuries by generating images of internal anatomic structures and organs of the body</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-content  tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="item-box main-box" style="background-image: url('{{ asset('images/CTSACAN/scans.jpeg') }}');"></div>
                        <div class="item-box sec-box" style="background-image: url('{{ asset('images/CTSACAN/scann.jpeg') }}');"></div>
                        <div class="item-box contain-box">
                            <div class="contain--box">
                                <span>3</span>
                                <p>Medical Imaging refers to a range of non-invasive procedures for detecting and monitoring diseases or injuries by generating images of internal anatomic structures and organs of the body</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-content  tab-pane fade " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="item-box main-box" style="background-image: url('{{ asset('images/Home_Collection/home_collection.jpeg') }}');"></div>
                        <div class="item-box sec-box" style="background-image: url('{{ asset('images/Home_Collection/lab-at-home-in-dubai.jpeg') }}');"></div>
                        <div class="item-box contain-box">
                            <div class="contain--box">
                                <span>4</span>
                                <p>Medical Imaging refers to a range of non-invasive procedures for detecting and monitoring diseases or injuries by generating images of internal anatomic structures and organs of the body</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="custom-tabs nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-cardiology" role="tab" aria-controls="v-pills-cardiology" aria-selected="true">
                        <span>1</span>cardiology
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span>2</span>Radiology
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span>3</span>CT-Scan
                    </a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span>4</span>Imaging
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intern-section">
  <div class="container">
    <div class="intern-content-card">
      <h2>Intership and Training</h2>
      <p>Bid Group Pvt.Ltd empolyees a wide varity of people with many differnt requisite professional backgrounds</p>
      <p>Bid Group Pvt.Ltd empolyees a wide varity of people with many differnt requisite professional backgrounds if you are interested in employment with us, you can submit your C.V at email: bidhlab@gmail.com</p>
      <div class="contact-btn">
        <a href="/">Contact Us</a>
      </div>
    </div>
  </div>
</section>

@include('frontEnd.partialsection.mordernequipment')
@include('frontEnd.partialsection.msgfromcm')

@include('frontEnd.partialsection.aboutteam')
@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')


@endsection

@push('script')


@endpush
