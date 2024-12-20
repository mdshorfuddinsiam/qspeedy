@extends('frontend.layouts.master')
@section('title')
  Contact
@endsection
@section('front_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <!-- bbreadcum -->
    <section id="quicktech-bread">
      <div class="quicktech-breadcum text-center">
        <h3>Contact Us</h3>
        <h4>Home <span class="bread-icon">
            <i class="fa-solid fa-arrow-right-arrow-left"></i>
          </span> Contact Us </h4>
      </div>
    </section>
    <!-- breadcum -->
    <!-- contact part start -->
    <section id="quicktech-contact">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-6">
            <div class="quicktech-c-infoo">
              <h2 class="mb-3">Contact Info</h2>
              <p>Contact us for more information.</p>
            </div>
            <div class="contact-info mb-4">
              <div class="d-flex align-items-center mb-3">
                <div class="contact-info-icon me-3">
                  <i class="bi bi-telephone"></i>
                </div>
                <div>
                  <h5>Call Us</h5>
                  <p>{{ $generalsetting->phone }}</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3">
                <div class="contact-info-icon me-3">
                  <i class="bi bi-envelope"></i>
                </div>
                <div>
                  <h5>Email Us</h5>
                  <p>{{ $generalsetting->email }}</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="contact-info-icon me-3">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div>
                  <h5>Address</h5>
                  <p>{{ $generalsetting->address }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="quicktech-c-infoo">
              <h2 class="mb-3">Send Us Message</h2>
              <p>How can we help you?</p>
            </div>
            <form class="contact-form" action="{{ route('contacts.store') }}" method="POST">
              @csrf

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <div class="mb-3">
                <input type="text"  name="name" class="form-control" placeholder="Name">
              </div>
              <div class="mb-3">
                <input type="email"  name="email" class="form-control" placeholder="Email">
              </div>
              <div class="mb-3">
                <input type="text"  name="phone" class="form-control" placeholder="Phone">
              </div>
              <div class="mb-3">
                <input type="text"  name="address" class="form-control" placeholder="Address">
              </div>
              <div class="mb-3">
                <textarea  name="message" class="form-control" placeholder="Message" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-send quicktech-contact-sendbtn">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- contact part end -->
    <!-- map -->
    <section id="quicktech-map">
      <div class="quikctech-map-main mt-5">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58419.75350988688!2d90.4030951!3d23.7746591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1724086051426!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        {!! $generalsetting->google_map !!}
      </div>
    </section>
    <!-- map -->
@endsection

@section('front_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
