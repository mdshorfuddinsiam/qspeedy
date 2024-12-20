{{-- @dd($generalsetting) --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid my-4">
        <!-- Logo for Both Mobile and Desktop -->
        {{-- <a class="navbar-brand" href="{{ url('/') }}"><strong>{{ @$generalsetting->website_name }}</strong></a> --}}
        <a class="navbar-brand" href=""><img src="{{ asset(@$generalsetting->site_logo) }}" style="width: 165px;" alt=""></a>

        <!-- Mobile Screen Menu -->
     <div class="d-block d-sm-block d-md-none d-lg-none d-xl-none" style="z-index: 9;" >
         <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"><i class="fa-solid fa-bars"></i></button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Manhal Crafts</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto my-2" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.page') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eventpromos.page') }}">Event Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ourproducts.page') }}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.page') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <!-- Desktop Screen Menu -->
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('eventpromos.page') }}">Event Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ourproducts.page') }}">Our Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.page') }}">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a>
                </li>

            </ul>
            {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form> --}}
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>
