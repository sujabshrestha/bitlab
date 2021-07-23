@extends('frontEnd.layout.master')

@push('css')
@endpush

@section('content')
@include('frontEnd.partialsection.owlcarousel')
@include('frontEnd.partialsection.businesspartner')
@include('frontEnd.partialsection.aboutsection')
@include('frontEnd.partialsection.offersection');
@include('frontEnd.partialsection.whatwedo')
@include('frontEnd.partialsection.mordernequipment')
@include('frontEnd.partialsection.msgfromcm')
@include('frontEnd.partialsection.client')
@include('frontEnd.partialsection.testomonial')
@include('frontEnd.partialsection.countersection')
@include('frontEnd.partialsection.blogsection')

@endsection

@push('script')


<script>
    window.slider = $('#slider').cardSlider({
        slideTag: 'div'
        , slideClass: 'slide'
        , current: 1
        , followingClass: 'slider-content-6'
        , delay: 300
        , transition: 'ease'
        , onBeforeMove: function (slider, onMove) {
            console.log('onBeforeMove')
            onMove()
        }
        , onMove: function (slider, onAfterMove) {
            onAfterMove()
        }
        , onAfterMove: function () {
            console.log('onAfterMove')
        }
        , onAfterTransition: function () {
            console.log('onAfterTransition')
        }
        , onCurrent: function () {
            console.log('onCurrent')
        }
    })
</script>

@endpush
