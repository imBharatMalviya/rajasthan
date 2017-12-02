<html>
<head>
    <title>Rajasthan Tourism</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Rajasthan Tourism" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{asset('m/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('m/css/slider.css')}}" type="text/css" media="screen" property="" />
    <link href="{{asset('m/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Owl-carousel-CSS -->
    <link href="{{asset('m/css/owl.carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('m/css/team.css')}}" type="text/css" media="all" />
    <link href="{{asset('m/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('m/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="banner_top" id="home">
        <div class="wrapper">
            <div class="agile_banner_text_info">
                <h1><i class="fa fa-camera-retro" aria-hidden="true"></i> <span>Rajasthan Tourism</span><a href="{{url('home')}}">AAS PASS <i class="fa fa-hand-o-up" aria-hidden="true"></i> </a></h1>
            </div>
            <div class="gallery">
                @foreach($photo as $p)
                <div class="gallery__img-block  ">
                    <span class="">
                     {{$p->photo_name}}
                    </span>
                    <img src="{{asset('uploads/'.$p->photo)}}" thumb-url="{{asset('uploads/'.$p->photo)}}" alt="" />
                </div>
                @endforeach
                <div class="gallery__controls">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('m/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- Slider script -->
    <script src="{{asset('m/js/slider.js')}}"></script>

    <!-- Kickoff the slider -->
    <script>
        $(document).ready(function () {
            var $gallery = $('.gallery');

            $gallery.vitGallery({
                autoplay: true
            })
        })
    </script>
    <!-- /nav -->
    <script src="{{asset('m/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('m/js/classie.js')}}"></script>
    <script src="{{asset('m/js/demo1.js')}}"></script>
    <!-- //nav -->
    <!-- js for portfolio lightbox -->
    <script src="{{asset('m/js/jquery.chocolat.js')}}"></script>
    <link rel="stylesheet " href="{{asset('m/css/chocolat.css')}}" type="text/css" media="all" />
    <!--light-box-files -->
    <script type="text/javascript ">
        $(function () {
            $('.portfolio-grids a').Chocolat();
        });
    </script>
    <!-- /js for portfolio lightbox -->
    <!-- stats -->
    <script src="{{asset('m/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('m/js/jquery.countup.js')}}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('m/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('m/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- requried-jsfiles-for owl -->
    <script src="{{asset('m/js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <script type="text/javascript" src="{{asset('m/js/bootstrap-3.1.1.min.js')}}"></script>
</body>
</html>