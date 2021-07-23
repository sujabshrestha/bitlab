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
    <section class="msg-from-cm">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="main-content">
              <div class="top-title">
                Message from the Chairman and Managing Director
              </div>
              <h4>A trusted and reliable healthcare partner for on-site work forces through out the Whole Nepal Medical Sector</h4>
              <div class="read-more">
                <a href="">Read More <span><i class="fa fa-long-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-container">
              <img src="{{ asset('images/cm.png') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-teams">
      <div class="container">
        <div class="common-content">
          <div class="common-title">
            <h2>
              <a href="/">
                Our Team
              </a>
            </h2>
            <p>We pride ourselves on the expertise, leadership, and commitment of our staff to our corporate goals.</p>
          </div>
        </div>
        <div class="row">
            @if(!empty($allteams))
            @foreach ($allteams as $team)


          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar">
                  <img src="{{ asset($team->image) }}" height="211px" width="196px" alt="">
              </div>
              <div class="team-content">
                <h5>{{ $team->title }}</h5>
                <p>{!! $team->post_content !!}</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="team-item">
              <div class="team-avatar"></div>
              <div class="team-content">
                <h5>Dipesh Shrestha</h5>
                <p>Chairman and Executive Director</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="client">
      <div class="container">
        <div class="common-content">
          <div class="common-title">
            <span>Our Client</span>
            <h2>
              <a href="/">
                Our Business Partner
              </a>
            </h2>
          </div>
        </div>
        <div class="client-list">
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c1logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c2logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c3logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c4logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c5logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c1logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c2logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c3logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c4logo.png') }}" alt="" />
            </a>
          </div>
          <div class="client-item">
            <a href="">
              <img src="{{ asset('images/c5logo.png') }}" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="testinomial-section">
      <div class="container">
        <div class="common-content">
          <div class="common-title">
            <span>What People are saying</span>
            <h2>
              <a href="/">
                Testinomial
              </a>
            </h2>
          </div>
        </div>
        <div class="section-body">
          <div id="slider" class="ui-card-slider">
              <div class="slide">
                  <div class="item-box">
                      <div class="reviwer">
                        <div class="reviwer-avatar"></div>
                        <div>
                          <p>Prem Shrestha</p>
                          <span>President at Novel Hospital</span>
                        </div>
                      </div>
                      <div class="item-msg">
                        <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                        <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                      </div>
                  </div>
              </div>
              <div class="slide">
                <div class="item-box">
                    <div class="reviwer">
                      <div class="reviwer-avatar"></div>
                      <div>
                        <p>Prem Shrestha</p>
                        <span>President at Novel Hospital</span>
                      </div>
                    </div>
                    <div class="item-msg">
                      <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                      <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                    </div>
                </div>
              </div>
                <div class="slide">
                  <div class="item-box">
                      <div class="reviwer">
                        <div class="reviwer-avatar"></div>
                        <div>
                          <p>Prem Shrestha</p>
                          <span>President at Novel Hospital</span>
                        </div>
                      </div>
                      <div class="item-msg">
                        <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                        <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                      </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="item-box">
                      <div class="reviwer">
                        <div class="reviwer-avatar"></div>
                        <div>
                          <p>Prem Shrestha</p>
                          <span>President at Novel Hospital</span>
                        </div>
                      </div>
                      <div class="item-msg">
                        <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                        <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                      </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="item-box">
                      <div class="reviwer">
                        <div class="reviwer-avatar"></div>
                        <div>
                          <p>Prem Shrestha</p>
                          <span>President at Novel Hospital</span>
                        </div>
                      </div>
                      <div class="item-msg">
                        <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                        <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                      </div>
                  </div>
                </div>
           </div>
        </div>
      </div>
    </section>
@endsection

@push('script')


@endpush
