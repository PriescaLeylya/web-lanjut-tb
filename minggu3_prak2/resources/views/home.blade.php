<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic @yield('title')</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">                                    <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
       
        <div class="tm-header">
                        @yield('header')
        </div>

        <div class="tm-about-img-container">
            
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row tm-2-rows-sm-swap">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2">
                        
                        <h3 class="tm-gold-text">Sidebar Links</h3>
                        @yield('sidebar')

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                    @yield('content')
                  </div>       
            </div>
        </section>
        
        <footer class="tm-footer">
           @yield('footer')
        </footer>

        <!-- load JS files -->
        <script src="{{ asset ('js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{ asset ('https://www.atlasestateagents.co.uk/javascript/tether.min.js') }}"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="{{ asset ('js/bootstrap.min.js') }}"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>