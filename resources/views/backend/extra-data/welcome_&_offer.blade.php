{{-- Welcome & Offer Section --}}
<section class="py-5">
    <div class="row no-gutters justify-content-center align-items-center">
        <div class="col-md-6">
            <h4 class="text-end my-4"><strong>{{ @$welcome->title }}</strong></h4>
            <div class="text-end">
                {!! @$welcome->description !!}
            </div>
            @if($welcome->default_issue == 0)
            <video id="comp-jl0rroaz_video" class="K8MSra" crossorigin="anonymous"
                aria-label="Poduct shocasing of Asixbd" playsinline="" preload="auto" muted="" loop=""
                tabindex="-1" autoplay=""
                src="{{ @$welcome->video_url }}"
                style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;"></video>
            @else
            <img class="float-end" src="{{ asset(@$welcome->image) }}" height="350px"
                style="max-width: 100%;" />
            @endif
        </div>
        <!--Col-6-->
        <div class="col-md-6">
            @if($offer->default_issue == 0)
            <video id="comp-jl0rroaz_video" class="K8MSra" crossorigin="anonymous"
                aria-label="Poduct shocasing of Asixbd" playsinline="" preload="auto" muted="" loop=""
                tabindex="-1" autoplay=""
                src="{{ @$offer->video_url }}"
                style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;"></video>
            @else
            <img src="{{ asset(@$offer->image) }}" alt="" style="height: 100%; width: 100%; object-fit: cover; object-position: center center; opacity: 1;">
            @endif   

            <h4 class="my-4"><strong>{{ @$offer->title }} </strong></h4>
            <div class="custom-justify">
                {!! @$offer->description !!}
            </div>
        </div> <!-- Col-md-6 -->
    </div><!-- Row -->
</section>
{{-- End: Welcome & Offer Section --}}