
<section class="main-banner">
    <div class="banner owl-carousel owl-theme">
        @if(!empty($allsliders))
        @foreach ($allsliders as $slider)
        <div class="banner-item" style="background-image: url('{{ asset($slider->image) }}')">
            <div class="container">
                <div class="banner-content">
                    <h2>{{ $slider->title }}</h2>
                    <p>{!! $slider->post_content !!}</p>
                    <a href="{{ $slider->links }}" class="poutline-btn">Know more</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

</section>

