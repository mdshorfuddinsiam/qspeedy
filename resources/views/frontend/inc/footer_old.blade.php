<footer class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{-- <h4><strong>{{ @$generalsetting->website_name }}</strong></h4> --}}
                <img src="{{ asset(@$generalsetting->site_logo) }}" alt="" style="margin-bottom: 20px; height: 50px; width: 150px;">

                <p class="custom-justify"> {{ @$generalsetting->description }} </p>
                <p>
                    <i class="fa-solid fa-phone-volume"></i> Phone : {{ @$generalsetting->phone }} <br>
                    <i class="fa-solid fa-envelope-open"></i> Email : {{ @$generalsetting->email }} <br>
                    <i class="fa-solid fa-map-location-dot"></i> Address: {{ @$generalsetting->address }}
                </p>
            </div><!-- Col-4 -->
            <div class="col-md-4">
                <ul class="navbar-nav">
                    @forelse($footergridtwos as $row)
                    <li class="nav-item"><a href="{{ $row->link }}" class="nav-link">{{ ucfirst($row->name) }}</a></li>
                    @empty
                    @endforelse
                </ul>


            </div><!-- Col-4 -->
            <div class="col-md-4">
                <h6><strong>Subscribe Us</strong></h6>
                <p>To stay updated for our service,Subscribe Now</p>
                <form action="{{ route('subscribers.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Your Email Here"
                            aria-describedby="helpId" />
                    </div>
                    <button type="submit" class="btn btn-dark mb">
                        Subscribe Now
                    </button>


                </form>
            </div><!-- Col-4 -->
        </div> <!-- Row -->
    </div><!-- Container End-->
    <div class="bg-dark text-white text-center py-2">
        Copyright © 2024 Manhal Crafts | All Rights Reserved
    </div>
</footer>
