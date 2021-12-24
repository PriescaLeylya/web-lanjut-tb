<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vacaytour - Manage</title>
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
							<li><a href="manage">Manage</a></li>
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

	<table class="table table-bordered table-striped" style="margin: 20px;">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Tempat Tanggal Lahir</th>
				<th>No Telepon</th>
				<th>Alamat Dom</th>
				<th>Paket</th>
				<th>Bukti Transfer</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			@foreach($booking as $a)
			<tr>
				<td>{{$a->id}}</td>
				<td>{{$a->nama}}</td>
				<td>{{$a->email}}</td>
				<td>{{$a->ttl}}</td>
				<td>{{$a->notelp}}</td>
				<td>{{$a->alamat}}</td>
				<td>{{$a->paket}}</td>
				<td>{{$a->bukti_tf}}</td>
				<td>{{$a->status}}</td>
				<td>
					<a href="manage/edit/{{ $a->id }}" class="btn btn-primary btn-radiuszan">Edit</a>
					<a href="manage/delete/{{ $a->id }}" class="btn btn-primary btn-radiuszan">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="manage/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>


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