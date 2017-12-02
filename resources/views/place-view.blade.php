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

<body style="overflow: hidden;">
	<!-- banner -->

	@yield('content')

	<!-- /about -->
	<div id="map" style="height: 500px"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 24.5945746, lng: 73.7081551},
          zoom: 16
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Current Location');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);

      }
    </script>
<script src="{{asset('m/js/jquery-1.11.1.min.js')}}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR-4yE4OnKzSXJ5DErZEmxwWs8k3H1hJI&callback=initMap">
    </script>
	<div class="about" id="welcome">
		<div class="container">
			<div class="wthree_head_section" style="text-align: center;">
				<h2>{{$place->place_name}}</h2>

				<h3 class="agile_tittle"><p>{{$place->place_desc}}</p></h3>
			</div>
		</div>
	</div>
	<div class="portfolio-agileinfo" id="portfolio" >
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="agile_tittle"><i class="fa fa-bullhorn" aria-hidden="true"></i> <span>{{$place->place_name }}</span>Photo Gallery</h3>
			</div>
		</div>
		<div class="agile_wthree_inner_grids" >
			<div class="agile_port_w3ls_info">
				<div class="portfolio-grids_main">
					@foreach($photo as $p)
					<div class="col-md-6 portfolio-grids_left" data-aos="zoom-in" >
						<a href="{{asset('uploads/'.$p->photo)}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="{{asset('uploads/'.$p->photo)}}" class="img-responsive" alt="w3ls" style="height: 250px;" />
								<div class="b-wrapper">
									<i class="fa fa-magic" aria-hidden="true"></i>
									
								</div>
							</a>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
	<!--// Gallery -->
	<!-- agile_testimonials -->
	<div class="agile_testimonials" id="testimonials">
		
	</div>
	<!-- //agile_testimonials -->

	<div class="w3l_footer">
		<div class="container">
			<div class="col-md-4">
				<h2><a href="{{url('home')}}"><i class="fa fa-camera-retro" aria-hidden="true"></i> <small>Rajasthan Tourism</small><br/>Nearby</a></h2>
			</div>
			<div class="col-md-8 botttom-nav-agileits">
				<ul class="nav-w3ls">
					<li><a class="scroll" href="#welcome">Nearby Places</a></li>
					<li><a class="scroll" href="#portfolio">Photo Gallery</a></li>
					<li><a class="scroll" href="#testimonials">Our Tourist</a></li>
				</ul>
				<div class="w3l-social team_agile _icons">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<p class="agileits_w3ls_copyright">Rajasthan Tourism</p>
			<div class="arrow-container animated fadeInDown">
				<a href="#home" class="arrow-2 scroll">
					<i class="fa fa-angle-up"></i>
				</a>
				<div class="arrow-1 animated hinge infinite zoomIn"></div>
			</div>
		</div>
	</div>
	<!--//footer -->



	<!-- js -->
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