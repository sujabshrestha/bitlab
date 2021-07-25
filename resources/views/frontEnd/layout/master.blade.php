<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidi Lab Pvt Ltd | Medical Suppliers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('js/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0&appId=398658468032457&autoLogAppEvents=1" nonce="SfqTRRou"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60fc3bb37d36af0012eaa375&product=sop' async='async'></script>

    @stack('css')
</head>

<body>


    @include('frontEnd.layout.header')

    @yield('content')


    @include('frontEnd.layout.footer')



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/card-slider.min.js') }}"></script>
    <script>
        window.slider = $('#slider').cardSlider({
            slideTag: 'div',
            slideClass: 'slide',
            current: 1,
            followingClass: 'slider-content-6',
            delay: 300,
            transition: 'ease',
            onBeforeMove: function (slider, onMove) {
                console.log('onBeforeMove')
                onMove()
            },
            onMove: function (slider, onAfterMove) {
                onAfterMove()
            },
            onAfterMove: function () {
                console.log('onAfterMove')
            },
            onAfterTransition: function () {
                console.log('onAfterTransition')
            },
            onCurrent: function () {
                console.log('onCurrent')
            }
        })

    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('script')

</body>

</html>
