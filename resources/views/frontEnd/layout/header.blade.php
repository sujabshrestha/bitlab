<header class="nav-header">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo.png') }}" alt="bidh lab" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse top-nav-list" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('front.home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.about-us') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.ourcompany') }}">Our Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.ourservices') }}">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.news') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('front.contact') }}">Contact</a>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
</header>
