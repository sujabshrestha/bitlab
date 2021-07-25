@extends('admin.partials.master')

@push('styles')

    <link href="{{ asset('cork/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

@endpush

@section('contents')



<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h1 class="text-center">Welcome to Admin Panel</h1>

                </div>

                <div class="widget-content">
                    <img style="width: 100%;" src="{{ asset(getSiteSetting('logo')) }}" alt="{{ getSiteSetting('site_title')??'' }}">
                </div>
            </div>
        </div>

    </div>


@endsection

@push('scripts')

    <script src="{{ asset('cork/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('cork/assets/js/dashboard/dash_1.js') }}"></script>

@endpush
