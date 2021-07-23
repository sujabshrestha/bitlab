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
                News
            </h1>
        </div>
    </div>
</div>
<section class="news-main">
    <div class="container">
      <div class="main-content">
        <h2>BIDH GROUP IN THE NEWS</h2>
        <p>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation. Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nationMaking an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation</p>
      </div>
    </div>
    <div class="featued-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="featured-content">
              <h4>Featured</h4>
              <p>Global research on coronavirus
                disease (COVID-19)</p>
              <div class="read-articles">
                <a href="">Read Articles</a>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="featured-list featured-slider owl-carousel owl-theme">
              <div class="list-item"></div>
              <div class="list-item"></div>
              <div class="list-item"></div>
              <div class="list-item"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="recent-article-section">
  <div class="container">
    <div class="recent-article-header">
      <h2>Recent Articles</h2>
    </div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Current Year</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Previous Year</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row">
            @if(!empty($allarticles))
            @foreach ($allarticles as $article)


          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
                  <img src="{{ $article->image }}" height="263px" width="100%" style="background-repeat: no-repeat;
                  background-size: contain;
                  background-position: center;" alt="">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    {{ $article->title }}
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    {{ $article->created_at->format('Y/m/d') }}
                  </span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        @endif
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-item">
              <div class="card-item-image">
              </div>
              <div class="card-item-body">
                <h6>
                  <a href="#">
                    Your health is our priority. That’s why our goal
                  </a>
                </h6>
                <div class="card-date">
                  Published On
                  <span>
                    9/10/2020
                  </span>
                </div>
              </div>
            </div>
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
