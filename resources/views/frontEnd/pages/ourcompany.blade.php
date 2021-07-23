@extends('frontEnd.layout.master')
@section('pageTitle', 'Ourcompany | '.getSiteSetting('site_title'))
@section('pageName', 'Ourcompany')
@push('style')
@endpush

@section('content')

<div class="inner-page-banner">
    <div class="container">
        <div class="banner-content">
            <h1>
                Our Company
            </h1>
        </div>
    </div>
</div>
<section class="company-Product">
    <div class="container">
        <div class="main-title">
            <h5>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</h5>
        </div>
    </div>
    <div class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product1.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product1.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product2.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product3.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product3.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product2.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-item">
                        <img src="{{ asset('images/product1.png') }}" alt="product title" />
                        <div class="product-content">
                            <h5>
                                <a href="/" >Daily Health</a>
                            </h5>
                            <small>service available always</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-products">
  <div class="product">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="product-indetail">
            <h3>Daily Health</h3>
            <p>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</p>
            <div class="product-spec">
              <ul>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="product-indetail-img">
            <img src="{{ asset('images/dailyhealth.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-reverse product2-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-5 order-md-2">
          <div class="product-indetail">
            <h3>Daily Health</h3>
            <p>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</p>
            <div class="product-spec">
              <ul>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7 order-md-1">
          <div class="product-indetail-img">
            <img src="{{ asset('images/companyproduct2.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product product-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="product-indetail">
            <h3>Daily Health</h3>
            <p>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</p>
            <div class="product-spec">
              <ul>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
                <li>
                  Heathy
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="product-indetail-img">
            <img src="{{ asset('images/company-bid.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('frontEnd.partialsection.msgfromcm')

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
@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')

@endsection

@push('script')


@endpush
