<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vacaytour - Booking</title>
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

</head>

<body>
	<!-- Header -->
	<div class="tm-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
					<a href="/about" class="tm-site-name">VACAYTOUR</a>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
						<ul>
							<li><a href="home">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="book" class="active">Booking</a></li>
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

	<!-- gray bg -->
	<br><br><br><br>
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider effect2 effect2-contact tm-contact-box-1">
				<ul class="slides">
					<li>
						<img src="img/ketik.jpg" alt="image" class="contact-image" />
						<div class="contact-text">
							<h2 class="slider-title">Petunjuk Pengisian Formulir </h2>
							<h3 class="slider-subtitle"></h3>
							<p class="slider-description" style="color: #000;">
								1. Isilah formulir menggunakan huruf kapital (email disesuaikan)<br>
								2. Isilah formulir menggunakan nama lengkap<br>
								3. Isilah bagian alamat dengan selengkap-lengkapnya<br>
								4. Upload bukti transfer dengan ekstensi jpg/jpeg/png<br>
								5. Klik button submit untuk menyimpan data pada website<BR>
								6. Status pembayaran berhasil atau tidak akan diverifikasi oleh admin
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- white bg -->
	<section class="section-padding-bottom">
		<form action="/book/tambah" method="post">
			<div class="container">
				<div class="row">
					<div class="tm-section-header section-margin-top">
						<div class="col-lg-4 col-md-3 col-sm-3">
							<hr>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<h2 class="tm-section-title">Booking</h2>
						</div>
						<div class="col-lg-4 col-md-3 col-sm-3">
							<hr>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- contact form -->
					<form action="/book/tambah" method="post" class="tm-contact-form" encytype=”multipart/form-data”> @csrf <div class="col-lg-6-primary center-col-md-6 tm-contact-form-input">
							<label> DATA DIRI</label>
							<div class="form-group">
								<input type="text" id="book_name" name="nama" required="required" class="form-control" placeholder="NAMA" />
							</div>
							<div class="form-group">
								<input type="email" id="book_email" name="email" required="required" class="form-control" placeholder="EMAIL" />
							</div>
							<div class="form-group">
								<input type="date" id="book_ttl" name="ttl" required="required" class="form-control" placeholder="TANGGAL LAHIR" />
							</div>
							<div class="form-group">
								<input type="tel" id="book_notelp" name="notelp" required="required" class="form-control" placeholder="NOMOR TELEPON" />
							</div>
							<div class="form-group">
								<textarea id="book_alamat" name="alamat" required="required" class="form-control" rows="6" placeholder="ALAMAT DOMISILI"></textarea>
							</div>
							<br>
							<label> PILIHAN PAKET PERJALANAN</label><br>
							<div>
								Pilih paket perjalanan :
								<select id="book_paket" name="paket">
									<option value="MALANG">Paket Perjalanan Malang - Rp 3.500.000/minggu</option>
									<option value="BALI">Paket Perjalanan Bali - Rp 7.500.000/minggu</option>
									<option value="JOGJA">Paket Perjalanan Jogja - Rp 5.500.000/minggu</option>
									<option value="BOGOR">Paket Perjalanan Bogor - Rp 3.750.000/minggu</option>
								</select>
							</div><br>
							<div class="form-group">
								UPLOAD BUKTI TRANSFER
								<input type="file" id="book_notelp" name="bukti_tf" required="required" class="form-control" />
							</div>
							<div class="form-group">
								<button class="tm-submit-btn" type="submit" name="submit">Submit now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</form>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2020 Vacay Tour Group</p>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script> <!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->
	<script>
		/* Google map
      	------------------------------------------------*/
		var map = '';
		var center;

		function initialize() {
			var mapOptions = {
				zoom: 14,
				center: new google.maps.LatLng(37.769725, -122.462154),
				scrollwheel: false
			};

			map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

			google.maps.event.addDomListener(map, 'idle', function() {
				calculateCenter();
			});

			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(center);
			});
		}

		function calculateCenter() {
			center = map.getCenter();
		}

		function loadGoogleMap() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
			document.body.appendChild(script);
		}

		// DOM is ready
		$(function() {

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

			// Flexslider
			$('.flexslider').flexslider({
				controlNav: false,
				directionNav: false
			});

			// Google Map
			loadGoogleMap();
		});
	</script>
</body>

</html>