<section class="blog-section">
    <div class="container">
      <div class="">
        <div class="common-content">
          <div class="common-title">
            <span>Insight</span>
            <h2>
              <a href="/">
                Our Recent Blogs
              </a>
            </h2>
          </div>
        </div>
      </div>
      <div class="blogs-conteiner row">
        @if(!empty($allblogs))
        @php
            $singleblog = $allblogs->first();
        @endphp
        <div class="col-lg-8 col-md-12">
          <div class="blog-firstitem">
            <div class="image-box" style="background-image: url('{{ asset($singleblog->image) }}')">

            </div>
            <div class="content-box">
              <h5>
                <a href="">Your health is our priority. That’s why our goal is to provide caring</a>
              </h5>
              <p>Your health is our priority. That’s why our goal is to provide caring, efficient, reliable, and high-quality testing services to support you in effectively managing your health. Your health is our priority.
              </p>

            </div>
          </div>
        </div>
        @endif

        @if(!empty($allblogs))
        @foreach($allblogs->skip(1) as $blog)
        <div class="col-lg-4 col-md-6">
          <div class="blog-item">
            <div class="blog-image">
               <img src="{{ asset($blog->image) }}" height="320px" width="100%" alt="">
            </div>
            <div class="blog-contain">
              <h5>
                <a href="">{{ $blog->title }}</a>
              </h5>
              <p>Rajan Kandal</p>
            </div>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
