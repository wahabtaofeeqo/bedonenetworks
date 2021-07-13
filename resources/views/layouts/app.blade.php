<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BeDoneNetworks | Buy Bitcoin, Gifcard exchange made easy</title>

	<!-- Favicons -->
  	<link href="{{asset('assets/favicon.png')}}" rel="icon">
  	<link href="{{asset('assets/apple-touch-icon.png')}}" rel="apple-touch-icon">

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

	<!-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/venobox/venobox.css')}}" /> -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/icofont/icofont.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/remixicon/remixicon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/aos/aos.css')}}" />

	<!-- Carousel -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/owl.carousel/assets/owl.carousel.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.css')}}" />

	<!-- Custom Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
</head>
<body>

	<div id="app">
		@yield('content')
	</div>

	<footer class="bg-white" id="footer">
	  <div class="container">
	    <div class="row footer-top pb-0 mb-0">
	      <div class="col-lg-4 col-md-6 footer-contact">
	          <h3>Bedone Networks</h3>
	          <p>
	            Available at your request<br>
	              
	            <strong>Phone:</strong> +234 07036974316<br>
	            <strong>Email:</strong> belloalaba6@gmail.com<br>
	          </p>
	      </div>

	      <div class="col-lg-4 col-md-6 footer-links">
	          <h4>Quick Link</h4>
	          <ul>
	            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
	            <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
	            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact us</a></li>
	          </ul>
	      </div>


	      <div class="col-lg-4 col-md-6 footer-links">
	          <h4>Our Social Networks</h4>
	          <p>Constantly active on our social media platform to attend to your request.</p>
	          <div class="social-links mt-3">
	            <a href="https://instagram.com/bedonenetworks_" class="instagram"><i class="bx bxl-instagram"></i></a>
	            <a href="https://wa.me/2348020833029" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
	            <a href="https://facebook.com/be done omolade" class="linkedin"><i class="bx bxl-facebook"></i></a>
	          </div>
	      </div>
	    </div>

	    <p class="text-center py-2">
	      &copy; Copyright <strong><span>Bedonenetworks</span></strong>. All Rights Reserved. Designed and coded by <a href="https://wa.me/2348136974417">
	        <strong>Taocoder</strong>
	      </a>
	    </p>
	  </div>
	</footer>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script> -->
	

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

	<!-- Owl -->
	<script type="text/javascript" src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script> -->
	<!-- <script type="text/javascript" src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script> -->
	<!-- <script type="text/javascript" src="{{asset('vendor/venobox/venobox.min.js')}}"></script> -->

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script type="text/javascript" src="{{asset('vendor/aos/aos.js')}}"></script>

	<!-- Script -->
	<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>