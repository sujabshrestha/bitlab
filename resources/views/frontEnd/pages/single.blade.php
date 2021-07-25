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
                Blogs
            </h1>
        </div>
    </div>
</div>

<section class="blog-main">
    <div class="container">
        <div class="blog-container">
            <div class="row blog-inner-container">

                <div class="col-md-12">
                    <div class="blog-item">
                        <div class="thumbnail-box"></div>
                        <div class="content-box">
                            <div class="content-metas">
                                <span>15</span>
                                <p>May 08:30</p>
                            </div>
                            <div class="content-main">
                                <h4>
                                    <a href="">Making an entry in the health sector in 2000, our range.</a>
                                </h4>
                                <p>Making an entry in the health sector in 2000, our range of service have become more benefit for favourites across the nation. Making an entry in the health sector in 2000, our range of service have become more benefit for favourites </p>

                            </div>
                        </div>
                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')


@endpush
