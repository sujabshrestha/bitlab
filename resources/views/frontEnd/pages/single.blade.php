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
                        <div class="thumbnail-box">
                            <img src="{{ asset($blog->image) }}" height="250px" width="100%" alt="">
                        </div>
                        <div class="content-box">
                            <div class="content-metas">
                                <span>{{ $blog->created_at->format('d') }}</span>
                                <p>{{ $blog->created_at->format('M') }} {{ $blog->created_at->format('h:i') }}</p>
                            </div>
                            <div class="content-main">
                                <h4>
                                    <a href="">{{ $blog->title }}</a>
                                </h4>
                                <p>{!! $blog->post_content !!}</p>

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
