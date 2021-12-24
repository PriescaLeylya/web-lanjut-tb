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
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/templatemo-style.css')}}" rel="stylesheet">

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
    <section class="vt">
        <form action="/manage/update/{{$booking->id}}" method="post" enctype="multipart/form-data">
            {{@csrf_field()}}
            <input type="hidden" name="id" value="{{$booking->id}}"></br>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" required="required" name="nama" value="{{$booking->nama}}"></br>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" required="required" name="email" value="{{$booking->email}}"></br>
            </div>
            <div class="form-group">
                <label for="ttl">Tempat Tanggal Lahir</label>
                <input type="date" class="form-control" required="required" name="ttl" value="{{$booking->ttl}}"></br>
            </div>
            <div class="form-group">
                <label for="notelp">No Telepon</label>
                <input type="tel" class="form-control" required="required" name="notelp" value="{{$booking->notelp}}"></br>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="textarea" class="form-control" required="required" name="alamat" value="{{$booking->alamat}}"></br>
            </div>
            <div class="form-group">
                <label for="paket">Pilih paket perjalanan :</label>
                <select id="book_paket" name="paket" value="{{$booking->paket}}">
                    <option value="MALANG">Paket Perjalanan Malang - Rp 3.500.000/minggu</option>
                    <option value="BALI">Paket Perjalanan Bali - Rp 7.500.000/minggu</option>
                    <option value="JOGJA">Paket Perjalanan Jogja - Rp 5.500.000/minggu</option>
                    <option value="BOGOR">Paket Perjalanan Bogor - Rp 3.750.000/minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bukti_tf">Bukti Transfer</label>
                <input type="hidden" class="form-control" name="bukti_tf" value="{{$booking->bukti_tf}}"></br>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="book_status" name="status" value="{{$booking->status}}">
                    <option value="Pembayaran Belum Diverifikasi">Pembayaran Belum Diverifikasi</option>
                    <option value="Pembayaran telah Terverifikasi">Pembayaran telah Terverifikasi</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="edit" class="btn btn-primary float-center">Simpan Perubahan</button><br><br>
            </div>
        </form>
    </section>
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