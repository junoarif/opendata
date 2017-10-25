<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
   <meta name="description" content="Portal Open Data RSJD Dr. RM. Soedjarwadi Provinsi Jawa Tengah, Open Data, Sujarwadi, Soedjarwadi, RSJD, Klaten" />
   <meta name="robots" content="index, follow" />
   <meta name="author" content="Juno Arif" />

   <title>Admin ODS</title>

   <!-- Bootstrap core CSS -->
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

   <!-- Custom Google Web Font -->
   <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

   <!-- Custom CSS-->
   <link href="css/general.css" rel="stylesheet">

   <!-- Custom CSS-->
   <link href="css/card.css" rel="stylesheet">

  <!-- Owl-Carousel -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

 <!-- Magnific Popup core CSS file -->
 <link rel="stylesheet" href="css/magnific-popup.css">

 <script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
 <!--[if IE 9]>
   <script src="js/PIE_IE9.js"></script>
 <![endif]-->
 <!--[if lt IE 9]>
   <script src="js/PIE_IE678.js"></script>
 <![endif]-->

 <!--[if lt IE 9]>
   <script src="js/html5shiv.js"></script>
 <![endif]-->

 <!-- style search -->
<link href="{{ asset('css/searchbox.css') }}" rel="stylesheet">
<style>
.content {
     margin-top:20px;
}
</style>
</head>

<body="home">
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>

 @include('layout.partial._adm_navigation')

 @yield('content')


 @include('layout.partial._js')


</body>

</html>
