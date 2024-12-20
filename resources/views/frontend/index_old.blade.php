@extends('frontend.layouts.master')
@section('title')
  Manhal Crafts - Home Page
@endsection

@section('content')
{{-- Banner --}}
{{-- <section>
    <div style="background: url('{{ asset(@$banner->image) }}'); max-width: 100%;" class="responsive-image">
        <div class="row no-gutters justify-content-center align-items-center responsive-image">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset(@$banner->image) }}" class="d-block w-100 responsive-image" style="max-width: 100%;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset(@$banner->image) }}" class="d-block w-100 responsive-image" style="max-width: 100%;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset(@$banner->image) }}" class="d-block w-100 responsive-image" style="max-width: 100%;" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

        </div>
    </div>
</section> --}}
{{-- End: Banner --}}

<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          @foreach($banners as $index => $row)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ asset($row->image) }}" class="d-block w-100 responsive-image" style="max-width: 100%;" alt="...">
          </div>
          @endforeach
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>

<div class="container">

    {{-- Welcome & Offer Section --}}
    <section class="py-5">
        <div class="row no-gutters justify-content-center align-items-center py-5 ">
            <div class="col-md-6 home-box-height">
                <h4 class="text-end my-4"><strong>{{ @$welcome->title }}</strong></h4>
                <div class="text-end text-height overflow-hidden">
                    {{-- {{ @$welcome->description }} --}}
                    {!! @$welcome->description !!}
                    @if(strlen($welcome->description) > 250)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#welcomeModal" class="welcome-read-more" data-type="welcome">Read More</a>
                    @endif
                </div>
                <!-- Modal -->
                <div class="modal fade" id="welcomeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="welcomeModalLebel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="welcomeModalLebel"> {{ $welcome->title }} </h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        @if($welcome->default_issue == 0)
                                        <div class="video-container d-flex">
                                            {!! $welcome->video_url !!}
                                        </div>
                                        @else
                                        <img src="{{ asset($welcome->image) }}" width="100%" height="250px" />
                                        @endif
                                    </div>
                                    <div class="col-md-7">
                                        <p style="text-align: justify;">
                                            {!! $welcome->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Ended -->
            </div>
            <div class="col-md-6 home-box-height">
                @if($welcome->default_issue == 0)
                <div class="video-container d-flex">
                    {!! $welcome->video_url !!}
                </div>
                @else
                <img class="float-end" src="{{ asset(@$welcome->image) }}" height="350px"
                    style="max-width: 100%;" />
                @endif
            </div>
            <!--Col-6-->
        </div><!-- Row -->
        <div class="row no-gutters justify-content-center align-items-center py-5">
            <div class="col-md-6 home-box-height ">
                @if($offer->default_issue == 0)
                <div class="video-container d-flex">
                    {!! $offer->video_url !!}
                </div>
                @else
                <img src="{{ asset(@$offer->image) }}" alt="" style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;">
                @endif
            </div>
            <div class="col-md-6 home-box-height ">
                <h4 class="my-4"><strong>{{ @$offer->title }} </strong></h4>
                <div class="custom-justify">
                    {!! @$offer->description !!}
                    @if(strlen($offer->description) > 250)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#offerModal" class="offer-read-more" data-type="offer">Read More</a>
                    @endif
                </div>
                <!-- Modal -->
                <div class="modal fade" id="offerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="offerModalLebel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="offerModalLebel"> {{ $offer->title }} </h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        @if($offer->default_issue == 0)
                                        <div class="video-container d-flex">
                                            {!! $offer->video_url !!}
                                        </div>
                                        @else
                                        <img src="{{ asset($offer->image) }}" width="100%" height="250px" />
                                        @endif
                                    </div>
                                    <div class="col-md-7">
                                        <p style="text-align: justify;">
                                            {!! $offer->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Ended -->
            </div> <!-- Col-md-6 -->
        </div><!-- Row -->
    </section>
    {{-- End: Welcome & Offer Section --}}


    {{-- Commitment --}}
    <section class="py-5">
        <div class="content">
            <h2 class="section-header">Our Commitment</h2>
            <div class="section-header-underline"></div>
        </div>
        <div class="row no-gutters justify-content-center align-items-center">
            @forelse($commitments as $key => $row)
                @if($key % 2 == 0)
                <div class="col-md-6 home-box-height overflow-hidden">
                    <h4 class="text-end my-4"><strong>{{ $row->title }}</strong></h4>
                    <div class="text-end overflow-hidden cmmnt-text-height">
                        {!! $row->description !!}
                    </div>
                    <div class="empty-box">
                        @if(strlen($row->description) > 250)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#commitmentModal-{{ $row->id }}" class="cmmnt-left-read-more" data-type="commitment">Read More</a>
                        @endif
                    </div>

                    @if($row->default_issue == 0)
                    <div class="video-container d-flex">
                        {!! $row->video_url !!}
                    </div>
                    @else
                    <img class="float-end" src="{{ asset($row->image) }}" height="250px" style="max-width: 100%;" />
                    @endif
                </div>
                <!--Col-6-->
                @else
                <div class="col-md-6 home-box-height overflow-hidden">
                    @if($row->default_issue == 1)
                    <img src="{{ asset($row->image) }}" height="250px" style="max-width: 100%;" />
                    @else
                    <div class="video-container d-flex">
                        {!! $welcome->video_url !!}
                    </div>
                    @endif
                    <h4 class="my-4"><strong>{{ $row->title }} </strong></h4>
                    <div class="custom-justify overflow-hidden cmmnt-text-height">
                        {!! $row->description !!}
                    </div>
                    <div class="empty-box">
                        @if(strlen($row->description) > 250)
                        <a href="#" data-bs-toggle="modal" data-bs-target="#commitmentModal-{{ $row->id }}" class="cmmnt-right-read-more" data-type="welcome">Read More</a>
                        @endif
                    </div>
                </div> <!-- Col-md-6 -->
                @endif

                <!-- Modal -->
                <div class="modal fade" id="commitmentModal-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="commitmentModalLebel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="commitmentModalLebel"> {{ $row->title }} </h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        @if($row->default_issue == 0)
                                        <div class="video-container d-flex">
                                            {!! $row->video_url !!}
                                        </div>
                                        @else
                                        <img src="{{ asset($row->image) }}" width="100%" height="250px" />
                                        @endif
                                    </div>
                                    <div class="col-md-7">
                                        <p style="text-align: justify;">
                                            {!! $row->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Ended -->
            @empty
            @endforelse
        </div><!-- Row -->
    </section>
    {{-- End: Commitment --}}


    <section class="py-5">
        <div class="content">
            <h2 class="section-header">Latest Work & Activity</h2>
            <div class="section-header-underline"></div>
        </div>

        <div class="row">

            @forelse($latestworks as $row)
                @if($row->default_issue == 1)
                <div class="col-md-4 me mt-4 hover-shadow cursor-pointer" style="position: relative;">
                    <img data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" src="{{ asset($row->image) }}" width="100%" height="350px" />
                    <div class="centered">
                        <p data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" class="text-center hide-btn custom-text"> {{ \Str::limit($row->description, 75) }}
                        </p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"> {{ $row->title }} </h5>
                                    <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <img src="{{ asset($row->image) }}" width="100%" height="250px" />
                                        </div>
                                        <div class="col-md-5">
                                            <p style="text-align: justify;">
                                                {{ $row->description }}
                                            </p>
                                            {{-- <span class="px-3 fs-5"><i class="fab fa-facebook"></i> </span>
                                            <span class="px-3 fs-5"><i class="fab fa-twitter"></i> </span>
                                            <span class="px-3 fs-5"><i class="fab fa-instagram-square"></i> </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Modal Ended -->
                </div> <!-- Col -->
                @else
                <div class="col-md-4 me mt-4 hover-shadow cursor-pointer" style="position: relative;">
                    <div class="video-container latest d-flex">
                        {!! $row->video_url !!}
                    </div>
                    <div class="centered">
                        <p data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $row->id }}" class="text-center hide-btn custom-text">
                            {{ \Str::limit($row->description, 75) }}
                        </p>
                    </div>

                       <!-- Modal -->
                       <div class="modal fade" id="staticBackdrop-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{ $row->title}} </h5>
                            <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times-circle"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="video-container d-flex">
                                            {!! $welcome->video_url !!}
                                        </div>
                                    </div>

                                    <div class="col-md-5">

                                        <p style="text-align: justify;">
                                            {{ $row->description }}
                                        </p>
                                        {{-- <span class="px-3 fs-5"><i class="fab fa-facebook"></i> </span>
                                        <span class="px-3 fs-5"><i class="fab fa-twitter"></i> </span>
                                        <span class="px-3 fs-5"><i class="fab fa-instagram-square"></i> </span> --}}
                                    </div>


                                </div>
                            </div>

                        </div>
                        </div>
                    </div> <!-- Modal Ended -->
                </div> <!-- Col -->
                @endif
            @empty
            @endforelse


        </div><!--Row-->
    </section>



    <section class="py-5 my-5">
        <div class="content">
            <h2 class="section-header">Membership</h2>
            <div class="section-header-underline"></div>
        </div>
        <div class="owl-carousel owl-theme py-5" id="membershipslider">
            @forelse($memberships as $row)
            <div class="item">
                <a href="{{ $row->link }}"><img class="image-css" src="{{ asset($row->image) }}" height="100px" width="100px"></a>
            </div>
            @empty
            @endforelse

        </div>
    </section>


</div>
@endsection
