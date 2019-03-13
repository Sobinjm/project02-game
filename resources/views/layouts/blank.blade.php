<!DOCTYPE html>

<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>youplay</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Icon -->
  <link rel="icon" type="image/png" href="/images/icon.png">
  <!-- Google Fonts -->

  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/css/bower_components/bootstrap/dist/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="/css/bower_components/font-awesome/css/font-awesome.min.css" />

  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="/css/bower_components/owl_carousel/dist/assets/owl.carousel.min.css" />
  <!-- Youplay -->

  <link rel="stylesheet" type="text/css" href="/css/rexgzone/rexgzone.css" />

</head>


<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

   @include('inc.navbar')


 
  <!-- Main Content -->
  <section class="content-wrap full youplay-login">

    <!-- Banner -->
    <div class="youplay-banner banner-top">
      <div class="image" style="background-image: url('/images/login-bg.jpg')"></div>

      <div class="info">
        <div>
          <div class="container align-center">

          @yield('content')

          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->
  </section>
<div>
    <section class="content-wrap ">
       @yield('content2')
    </section>
</div>
 
  <!-- /Main Content -->
   

   

 
  <!-- jQuery -->
  <script type="text/javascript" src="/css/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Hexagon Progress -->
  <script type="text/javascript" src="/css/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>


  <!-- Bootstrap -->
  <script type="text/javascript" src="/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="/css/bower_components/jarallax/dist/jarallax.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="/css/bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="/css/bower_components/owl_carousel/dist/owl.carousel.min.js"></script>

  <!-- Countdown -->
  <script type="text/javascript" src="/css/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
  <!-- Youplay -->
  <script type="text/javascript" src="/js/rexgzone.min.js"></script>

  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,
    
            // set small navbar on load
            navbarSmall:      false,
    
            // enable fade effect between pages
            fadeBetweenPages: true,
    
            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
  </script>


  <script type="text/javascript">
    $(".countdown").each(function() {
        $(this).countdown($(this).attr('data-end'), function(event) {
          $(this).text(
            event.strftime('%D days %H:%M:%S')
          );
        });
    })
  </script>

</body>


<!-- Mirrored from html.nkdev.info/youplay/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 12:41:01 GMT -->
</html>
