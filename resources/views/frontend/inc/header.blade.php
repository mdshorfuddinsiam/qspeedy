<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset(@$generalsetting->site_logo) }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav quicktech-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about.page') }}">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('service.page') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Our Services </a>
          <ul class="dropdown-menu">
            @forelse($services as $row)
            <li>
              <a class="dropdown-item" href="{{ route('service.details.page', ['slug' => $row->slug]) }}">{{ $row->name }}</a>
            </li>
            @empty
            @endforelse
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Our Location </a>
          <ul class="dropdown-menu">
            @forelse($areas as $row)
            <li>
              <a class="dropdown-item" href="{{ route('area-cover.page', ['slug' => $row->slug]) }}">{{ $row->name }}</a>
            </li>
            @empty
            @endforelse
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
