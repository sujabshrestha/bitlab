@extends('frontEnd.layout.master')
@section('pageTitle', 'Career | '.getSiteSetting('site_title'))
@section('pageName', 'Career')
@push('style')
@endpush

@section('content')

    <!-- Page title -->
    @include('frontEnd.layout.page-title')
    <!-- /.page-title -->

    <section class="flat-row portfolio-post" id="work">


        <div class="container">
            <div class="career-wrap">
                @if($posts)
                    @foreach($posts as $post)
                <div class="career-item">
                    <div class="title">
                        {{ $post->title }}
                    </div>
                   {!! $post->post_content !!}
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection

@push('script')


@endpush