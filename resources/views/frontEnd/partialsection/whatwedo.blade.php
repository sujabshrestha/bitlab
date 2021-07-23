<section class="what-we-do">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="what-we-do-aside">
            <div class="common-content">
              <div class="common-title">
                <span>Why choose us</span>
                <h2>
                  <a href="/">
                    What We Do
                  </a>
                </h2>
              </div>
              <div class="common-short-content">
                <p>
                  Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
                </p>
              </div>
              <a href="/" class="poutline-btn" title="about content">
                Know more
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="what-we-do-lists whychooseus owl-carousel owl-theme">
            @if(!empty($allwhatwedo))
            @foreach ($allwhatwedo as $whatwedo)

            <div class="what-we-do-item">
              <div class="image-container" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 85.3%), url('{{ asset($whatwedo->image) }}');">
                <h1>
                  <a href="">{{ $whatwedo->title }}</a>
                </h1>
              </div>
            </div>
            @endforeach
            @endif

          </div>
        </div>
      </div>
    </div>
  </section>
