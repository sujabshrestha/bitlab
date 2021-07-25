<section class="testinomial-section">
    <div class="container">
      <div class="common-content">
        <div class="common-title">
          <span>What People are saying</span>
          <h2>
            <a href="/">
              Testinomial
            </a>
          </h2>
        </div>
      </div>
      <div class="section-body">
        <div id="slider" class="ui-card-slider">
            @if(!empty($alltestomonials))
              @foreach ($alltestomonials as $testomonial)


              <div class="slide">
                  <div class="item-box">
                      <div class="reviwer">
                        <div class="reviwer-avatar">
                            <img src="{{ asset($testomonial->image) }}" style="    height: 50px;
                            width: 50px;
                            border-radius: 50%;" alt="">
                        </div>
                        <div>
                          <p>{{ $testomonial->title }}</p>
                          <span>{!! $testomonial->post_content !!}</span>
                        </div>
                      </div>
                      <div class="item-msg">
                        <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority. </p>
                        <p>That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health.  </p>
                      </div>
                  </div>
              </div>
              @endforeach
              @endif


         </div>
      </div>
    </div>
  </section>
