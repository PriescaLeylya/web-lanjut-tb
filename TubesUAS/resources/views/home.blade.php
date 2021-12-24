<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vacaytour - Home</title>
	<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="tm-gray-bg">
	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
					<a href="/about" class="tm-site-name">VACAYTOUR</a>
				</div>
				<div class="test1">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="home" class="active">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="book">Booking</a></li>
							<li><a href="contact">Contact</a></li>
							@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else
							<li class="nav-item">
								<a id="nav-link">
									{{ Auth::user()->name }}
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
							</li>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							@endguest
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
			<ul class="slides">
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title"><span class="tm-yellow-text">Paket</span> Wisata</h1>
						<p class="tm-banner-subtitle">Untuk Perjalanan Anda</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-2.jpg" />
				</li>
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title">Berbagai <span class="tm-yellow-text">Macam</span> Destinasi</h1>
						<p class="tm-banner-subtitle">Destinasi yang luar biasa</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-3.jpg" />
				</li>
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title"><span class="tm-yellow-text">Online</span> Booking</h1>
						<p class="tm-banner-subtitle">Kemudahan dalam proses booking</p>
						<!-- <a href="#more" class="tm-banner-link">Learn More</a>	 -->
					</div>
					<img src="img/banner-1.jpg" />
				</li>
			</ul>
		</div>
	</section>

	<!-- gray bg -->
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
						<li role="presentation" class="active">
							<a href="#booking" aria-controls="booking" role="tab" data-toggle="tab">Booking</a>
						</li>
						<li role="presentation">
							<a href="#pembayaran" aria-controls="pembayaran" role="tab" data-toggle="tab">Pembayaran</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="booking">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="booking-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
											<div class="form-group">
												<p class="slider-description" style="color: #000;">
													1. Pilihan paket liburan pada halaman home<br>
													2. Isi form pada halaman booking<br>
													3. Sesuaikan pada form pada halaman booking<br>
													4. Lakukan pembayaran sesui petunjuk pembayaran
												</p>
											</div>

										</div>

									</div>
									<div class="form-group tm-yellow-gradient-bg text-center">
									</div>
								</form>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade tm-white-bg" id="pembayaran">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="pembayaran-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
											<div class="form-group">
												<p class="slider-description" style="color: #000;">
													1. Lakukan booking terlebih dahulu<br>
													2. Kemudian transfer nominal uang melalui bank<br>
													3. Upload bukti transfer pada halaman booking<br>
													4. Kemudian submit<br>
													5. Terakhir tunggu verifikasi dari admin
												</p>
											</div>
										</div>
									</div>
									<div class="form-group tm-yellow-gradient-bg text-center">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="img/Tour2.jpeg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span>Bali</span>
							<span>Rp 6,6 Juta</span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="img/Tour1.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>Jogja</span>
							<span>Rp 2,2 Juta</span>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="section-margin-top">
			<div class="row">
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<hr>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h2 class="tm-section-title">Paket Perjalanan</h2>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<hr>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20"> Fasilitas : </p>
								<p> - Villa
								<p> - Kendaraan
								<p> - 5 Wisata free

							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Holiday sesuai bajet dan waktu luangmu</p>
							</div>
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Rp 7.500.000/minggu
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								Bali
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20"> Fasilitas : </p>
								<p> - Villa
								<p> - Kendaraan
								<p> - 3 Wisata dan Keraton free

							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Berlibur sekaligus belajar tentang budaya Jawa</p>
							</div>
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Rp 5.500.000/minggu
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								Jogja
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20"> Fasilitas : </p>
								<p> - Villa
								<p> - Kendaraan
								<p> - 4 Wisata free

							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Melepas penat dikota bunga yang dingin dan sejuk</p>
							</div>
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Rp 3.500.000/minggu
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								Malang
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-tours-box-1">
						<img src="img/tours-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-1-info">
							<div class="tm-tours-box-1-info-left">
								<p class="text-uppercase margin-bottom-20"> Fasilitas : </p>
								<p> - Villa
								<p> - Kendaraan
								<p> - 3 Wisata free

							</div>
							<div class="tm-tours-box-1-info-right">
								<p class="gray-text tours-1-description">Berlibur sambil menyaksikan dan memberi makan rusa di istana</p>
							</div>
						</div>
						<div class="tm-tours-box-1-link">
							<div class="tm-tours-box-1-link-left">
								Rp 3.750.000/minggu
							</div>
							<a href="#" class="tm-tours-box-1-link-right">
								Bogor
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3">
						<hr>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<h2 class="tm-section-title">Paket Spesial</h2>
					</div>
					<div class="col-lg-4 col-md-3 col-sm-3">
						<hr>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Christmas</h3>
							<p> Discount 40%
							<p> 20 orang pertama
							<p> Desember </p>
						</div>
						<a href="/book" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">
						<img src="img/index-04.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">New Year</h3>
							<p> Discount 25%
							<p> 35 orang pertama
							<p>Januari</p>
						</div>
						<a href="/book" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">
						<img src="img/index-05.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Valentine</h3>
							<p> Discount 50%
							<p> 15 orang pertama
							<p>February</p>
						</div>
						<a href="/book" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">
						<img src="img/index-06.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15">Idul Fitri</h3>
							<p> Discount 15%
							<p> 50 orang pertama
							<p>Bulan Menyesuaikan</p>
						</div>
						<a href="/book" class="tm-tours-box-2-link">Book Now</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Apabila kurang memahami dengan alur booking atau package yang ditawarkan bisa menghubungi kami melalui fitur contact
					</p>
				</div>
			</div>
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2020 VacayTour Group</p>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
	<script type="text/javascript" src="js/moment.js"></script> <!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script> <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {
			$('#hotelCarTabs a').click(function(e) {
				e.preventDefault()
				$(this).tab('show')
			})
			$('.date').datetimepicker({
				format: 'MM/DD/YYYY'
			});
			$('.date-time').datetimepicker();
			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
		// Load Flexslider when everything is loaded.
		$(window).load(function() {
			// Vimeo API nonsense
			/*
						  var player = document.getElementById('player_1');
						  $f(player).addEvent('ready', ready);
						 
						  function addEvent(element, eventName, callback) {
						    if (element.addEventListener) {
						      element.addEventListener(eventName, callback, false)
						    } else {
						      element.attachEvent(eventName, callback, false);
						    }
						  }
						 
						  function ready(player_id) {
						    var froogaloop = $f(player_id);
						    froogaloop.addEvent('play', function(data) {
						      $('.flexslider').flexslider("pause");
						    });
						    froogaloop.addEvent('pause', function(data) {
						      $('.flexslider').flexslider("play");
						    });
						  }
			*/
			// Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
			/*
						  $(".flexslider")
						    .fitVids()
						    .flexslider({
						      animation: "slide",
						      useCSS: false,
						      animationLoop: false,
						      smoothHeight: true,
						      controlNav: false,
						      before: function(slider){
						        $f(player).api('pause');
						      }
						  });
			*/
			//	For images only
			$('.flexslider').flexslider({
				controlNav: false
			});
		});
	</script>
</body>

</html>