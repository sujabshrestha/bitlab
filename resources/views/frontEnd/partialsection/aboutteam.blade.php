<section class="about-teams">
    <div class="container">
      <div class="common-content">
        <div class="common-title">
          <h2>
            <a href="/">
              Our Team
            </a>
          </h2>
          <p>We pride ourselves on the expertise, leadership, and commitment of our staff to our corporate goals.</p>
        </div>
      </div>
      <div class="row">
        @if(!empty($allteams))
        @foreach($allteams as $team)

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="team-item">
            <div class="team-avatar">
                <img src="{{ asset($team->image) }}" height="211px" width="196px" alt="">
            </div>
            <div class="team-content">
              <h5>{{ $team->title }}</h5>
              <p>{!! $team->post_content !!}</p>
            </div>
          </div>
        </div>
        @endforeach
        @endif

      </div>
    </div>
  </section>
