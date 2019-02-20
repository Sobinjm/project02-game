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

   @include('inc.nav_bar')


   <section class="content-wrap">
    <form>
    <!-- Banner -->
   @include('inc.banner_edit')

 

    <div class="container youplay-store">

      <div class="col-md-9">
        <!-- Post Info -->
        <article>

          <!-- Description -->
          <h2 class="mt-0">Description</h2>
          <div class="description">
           <p>
             
             <textarea name="gamedes" rows="10" placeholder="enter your game Description" class="form-control"></textarea>
           </p>
          </div>
          <!-- /Description -->

          <!-- Post Share -->
          <div class="btn-group social-list social-likes" data-counters="no">
            <span class="btn btn-default facebook" title="Share link on Facebook"></span>
            <span class="btn btn-default twitter" title="Share link on Twitter"></span>
            <span class="btn btn-default plusone" title="Share link on Google+"></span>
            <span class="btn btn-default pinterest" title="Share image on Pinterest" data-media=""></span>
            <span class="btn btn-default vkontakte" title="Share link on VK"></span>
          </div>
          <!-- /Post Share -->
        </article>
        <!-- /Post Info -->


        <!-- Information -->
        <div class="requirements-block">
          <h2>game details</h2>
          <div>
            <strong>Team:</strong> <select name="gameTeam" class="form-control">
                                      <option value="Squad">Squad</option>
                                      <option value="Duo">Duo</option>
                                      <option value="solo">solo</option>
              
                                  </select>
          </div>
          <div>
            <strong>Map:</strong> <select name="gameTeam" class="form-control">
                                      <option value="Map1">map1</option>
                                      <option value="Map2">map2</option>
                                      <option value="Map3">map3</option>
              
                                  </select>
          </div>
          <div>
            <strong>Tourment Date:</strong> <input type="date" name="gamedate" class="form-control">
          </div>
          <div>
            <strong>Match Start Time:</strong> <input type="text" name="gametime" class="form-control">
          </div >
        </div>

      </div>
    </div>
  </form>
  </section>


  


 

 
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
