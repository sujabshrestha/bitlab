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
                Blog
            </h1>
        </div>
    </div>
</div>
<section class="blog-main">
    <div class="container">
        <div class="blog-container">
            <h2>Update with our blogs</h2>
            <p>Making an entry in the health sector in 2000, our range.</p>
            <div class="row blog-inner-container">
                @if(!empty($allblogs))
                @foreach($allblogs as $blog)
                <div class="col-md-6">
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
                                    <a href="{{ route('front.blogSingle',$blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                                <p>{!! $blog->post_content !!}</p>
                                <div class="read-more">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <div class="col-md-6">
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
                                <div class="read-more">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                                <div class="read-more">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                                <div class="read-more">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more-btn">
                <a href="">See More</a>
            </div>
        </div>
    </div>
</section>

@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')
@endsection

@push('script')


@endpush
