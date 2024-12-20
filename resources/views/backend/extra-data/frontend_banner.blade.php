{{-- Banner --}}
<section>
    <div style="background: url('{{ asset(@$banner->image) }}'); max-width: 100%;" class="responsive-image">
        <div class="row no-gutters justify-content-center align-items-center responsive-image">
            <div class="col-8">

                <h2 class="text-center">
                    <div
                        style="background-color: #a18c7dab;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="my-5">
                        {!! @$banner->description !!}
                    </div>
                </h2>
                {{-- <h2 class="text-center">
                    <span
                        style="background-color: #a18c7d;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="my-5">
                        Lifestyle: Discover a Range of Sustainable and
                    </span>
                </h2>
                <h2 class="text-center">
                    <span
                        style="background-color: #a18c7d;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="my-5">
                        Natural Living Products Here.
                    </span>
                </h2> --}}

            </div>
        </div>
    </div>
</section>
{{-- End: Banner --}}