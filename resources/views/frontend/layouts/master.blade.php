<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $generalsetting->website_name }} || @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset($generalsetting->site_icon) }}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=New+Amsterdam&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">
    {{-- Toastr Css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/responsive.css">


  </head>
  <body>
    <!-- nav bar -->
    @include('frontend.inc.header')
    <!-- nav bar -->

    @yield('content')

    <!-- Footer Section -->
    @include('frontend.inc.footer')
    <!-- footer -->

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{ asset('frontend/assets') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/bootstrap.bundle.min.js"></script>
    {{-- Toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('frontend/assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.counterup.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/jquery.youtube-background.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/custom.js"></script>

    <script>
      @if(session()->has('messege'))
        var type = "{{ session()->get('alert-type') }}";
        // alert('siam');

        switch(type) {
          case 'success':
            toastr.options =
             {
              "closeButton" : true,
              "progressBar" : true
             }
            toastr.success("{{ session()->get('messege') }}");
            break;
          case 'error':
            toastr.options =
             {
              "closeButton" : true,
              "progressBar" : true
             }
            toastr.error("{{ session()->get('messege') }}");
            break;
          case 'info':
            toastr.options =
             {
              "closeButton" : true,
              "progressBar" : true
             }
            toastr.info("{{ session()->get('messege') }}");
            break;
          case 'warning':
            toastr.options =
             {
              "closeButton" : true,
              "progressBar" : true
             }
            toastr.warning("{{ session()->get('messege') }}");
            break;
          default:
            // code block
        }
      @endif
    </script>

  </body>
</html>
