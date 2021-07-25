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
                @isset($companies)
                    @foreach ($companies as $company)
                        <div class="col-md-3">
                            <div class="product-item">
                                {!! gobalPostImage($company->id, 'thumbnail') !!}
                                <div class="product-content mt-3">
                                    <h5>
                                        <a href="" >{{ $company->title }}</a>
                                    </h5>
                                    <small>{{ $company->subtitle }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
</section>
<section class="about-products">
    @isset($companies)
        @foreach ($companies as $company)
        @if ($loop->iteration % 2 == 0)
        <div class="product-reverse">
            <div class="container">
              <div class="row">
                <div class="col-md-5 order-md-2">
                  <div class="product-indetail">
                    <h3>{{ $company->title }}</h3>
                    <p>{!! Str::limit($company->content, 10) !!}</p>
                    @if ($company->companyKeys)
                        <div class="product-spec">
                            <ul>
                            @foreach ($company->companyKeys as $item)
                              <li>
                                {{ $item['points']??'' }}
                              </li>
                            @endforeach
                            </ul>
                          </div>
                    @endif
                  </div>
                </div>
                <div class="col-md-7 order-md-1">
                  <div class="product-indetail-img">
                    <img src="{{ asset($company->background_image) }}" alt="{{ $company->title }}" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        @else
        <div class="product">
            <div class="container">
            <div class="row">
                <div class="col-md-5">
                <div class="product-indetail">
                    <h3>{{ $company->title }}</h3>
                    {!! $company->post_content !!}
                    @if ($company->companyKeys)
                        <div class="product-spec">
                            <ul>
                            @foreach ($company->companyKeys as $item)
                              <li>
                                {{ $item['points']??'' }}
                              </li>
                            @endforeach
                            </ul>
                          </div>
                    @endif
                </div>
                </div>
                <div class="col-md-7">
                    <div class="product-indetail-img">
                        <img src="{{ asset($company->background_image) }}" alt="{{ $company->title }}" />
                    </div>
                </div>
            </div>
            </div>
        </div>
        @endif

        @endforeach
  @endisset

</section>
@include('frontEnd.partialsection.msgfromcm')

@include('frontEnd.partialsection.aboutteam')
@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')

@endsection

@push('script')


@endpush
