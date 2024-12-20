<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- favicon --}}
    <link rel="icon" href="{{ @$generalsetting->site_icon }}" type="image/x-icon">
    {{-- end: favicon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/custom-style.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css">
    <script src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js"></script>

  <!-- *************************************** -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- *********************************************** -->

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '438826309156891');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=438826309156891&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->




<script type="text/javascript">
_linkedin_partner_id = "5887980";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=5887980&fmt=gif" />
</noscript>

</head>

<body>

    @include('frontend.inc.header')

    @include('frontend.inc.social')




    <!-- <div class="owl-carousel owl-theme" id="mainslider">
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>
        <div class="item"><img src="{{ asset('frontend') }}/assets/images/ProductCoverImage.jpg" class="responsive-image" style="max-width: 100%;"><div class="centered text-dark"><h1>Welcome to Manhal Crafts</h1></div></div>

    </div> -->

    @yield('content')



    @include('frontend.inc.footer')


    <script src="https://player.vimeo.com/api/player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#mainslider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
    <script>
        $('#membershipslider').owlCarousel({
            loop: true,
            margin: 150,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.video-gallery').magnificPopup({
                delegate: 'a',
                type: 'iframe',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>




</body>

</html>
