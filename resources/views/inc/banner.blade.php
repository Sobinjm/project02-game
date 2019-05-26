

    <!-- Banner -->
@if(count($poster)>=1)



<?php

// print_r($poster);
$dirname = "images/poster/splmatch/banner/".$splposter[0]['galleryId']."/";
$images = glob($dirname."*.jpg");

?>
<section class="youplay-banner banner-top youplay-banner-parallax">
  <div class="image" style="background-image: url({{ asset($images[0]) }})">
  </div>
  @if(isset($login_success))
@if(count($login_success)>=0)

            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                  @foreach($login_success as $error)

                <strong>Warning!</strong> {{$error->name}} <br>


                @endforeach
            </div>

            @endif
            @endif



           

  <div class="info">
    <div>
      <div class="container">
        <h2>{{$poster[0]['m_title']}} <!--<br> Reaper of Souls --></h2>
      <em>"{{$poster[0]['tagline']}}.Match date on {{$splposter[0]['m_date']}},{{$poster[0]['m_day']}}"</em>
        <br>
        <br>
        <br>
        @guest
        <a class="btn btn-lg" href="/login">Enroll Now</a>
      
       @else
       <a class="btn btn-lg" href="/enroll_now/{{$poster[0]['id']}}/{{auth::user()->id}}">Enroll Now</a>
       
      @endguest
      </div>
    </div>

</section>

        
    @else
    <?php

// print_r($poster);
$dirname = "images/poster/splmatch/banner/".$splposter[0]['galleryId']."/";
$images = glob($dirname."*.jpg");

?>
<section class="youplay-banner banner-top youplay-banner-parallax">
  <div class="image" style="background-image: url({{ asset($images[0]) }})">
  </div>
  @if(isset($login_success))
@if(count($login_success)>=0)

            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                  @foreach($login_success as $error)

                <strong>Warning!</strong> {{$error->name}} <br>


                @endforeach
            </div>

            @endif
            @endif



           

  <div class="info">
    <div>
      <div class="container">
        <h2>{{$splposter[0]['m_title']}} <!--<br> Reaper of Souls --></h2>
      <em>"{{$splposter[0]['tagline']}}.Match date on {{$splposter[0]['m_date']}},{{$splposter[0]['m_day']}}"</em>
        <br>
        <br>
        <br>
        @guest
        <a class="btn btn-lg" href="/login">Enroll Now</a>
      
       @else
       <a class="btn btn-lg" href="/enroll_now/{{$splposter[0]['id']}}/{{auth::user()->id}}">Enroll Now</a>
       
      @endguest
      </div>
    </div>

</section>
       
    @endif
    <!-- /Banner -->
