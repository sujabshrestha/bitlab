<section class="modern-equiptment container-fluid">
    <div class="modern-equiptment-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="common-content">
              <div class="common-title">
                <span>Our Equiptment</span>
                <h2>
                  <a href="/">
                    Our Modern Equiptment
                  </a>
                </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="sideimage-container">
              <img src="{{ asset('images/lagimg.png') }}" />
            </div>
          </div>
        </div>
        <div class="modern-equiptment-tabs">
          <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Modern Lab</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Modern Imaging</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Super Specialised Services</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                @if(!empty($allequipments))
                @foreach($allequipments as $equipment)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tab-inner-item" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%), url('{{ asset($equipment->image) }} ')">
                      <p>
                        <a href="">{{ $equipment->title }}</a>
                      </p>
                    </div>
                </div>
                @endforeach
                @endif
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
