<footer class="footer">
  <div class="container">
    <div class="row gapp">
      <!-- About Section -->
      <!-- <div class="col-md-3 logo"><img src="{{ asset('frontend/assets') }}/images/Auto-Garage.png" alt="Logo"><p>Established in 2024,   Qspeedy is a full service center for automotive solutions company. Over years, we have earned the reputation for providing reliable service and sound counsel for all our customers by providing solutions for their various auto repairs and service needs.</p><div class="social-icons"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i class="bi bi-youtube"></i></a><a href="#"><i class="bi bi-whatsapp"></i></a></div></div> -->
      <!-- Useful Links Section -->
      <div class="col-md-3 col-sm-6 footer-links">
        <h5>Useful Links</h5>
        @forelse($footergridtwos as $row)
        <a href="{{ $row->link }}">{{ ucfirst($row->name) }}</a>
        @empty
        @endforelse
      </div>
      <!-- Our Services Section -->
      <div class="col-md-3 col-sm-6 footer-links">
        <h5>Our Services</h5>
        @forelse($services as $row)
        <a href="{{ route('service.details.page', ['slug' => $row->slug]) }}">{{ $row->name }}</a>
        @empty
        @endforelse
      </div>
      <!-- Contact Info Section -->
      <div class="col-md-3 col-sm-6 contact-info">
        <h5>Contact Us</h5>
        <p>
          <i class="bi bi-telephone-fill"></i> Call Us: {{ $generalsetting->phone }}
        </p>
        <p>
          <i class="bi bi-envelope-fill"></i> Email Us: {{ $generalsetting->email }}
        </p>
        <p>
          <i class="bi bi-geo-alt-fill"></i> Address: {{ $generalsetting->address }}
        </p>
      </div>
      <div class="col-md-3 col-sm-6">
        <h5>SOCIAL MEDIA</h5>
        <ul class="quicktech-social">
          @if($sociallink->link_one)
          <li>
            <a href="{{ $sociallink->link_one }}" target="_blank" >
              <i class="fa-brands fa-facebook"></i>
            </a>
          </li>
          @endif
          @if($sociallink->link_two)
          <li>
            <a href="{{ $sociallink->link_two }}" target="_blank" >
              <i class="fa-brands fa-instagram"></i>
            </a>
          </li>
          @endif
          @if($sociallink->link_three)
          <li>
            <a href="{{ $sociallink->link_three }}" target="_blank" >
              <i class="fa-brands fa-tiktok"></i>
            </a>
          </li>
          @endif
          @if($sociallink->link_four)
          <li>
            <a href="{{ $sociallink->link_four }}" target="_blank" >
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- copy right -->
<section id="quicktech-copyright">
  <div class="container">
    <div class="row">
      <hr>
      <div class="col-lg-12">
        <div class="quicktech-copyright text-center">
          <p>Copyright © 2024 Qspeedy All rights reserved Design and Developed By <a href="https://quicktech-ltd.com/">QuickTech IT</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- copyright -->
